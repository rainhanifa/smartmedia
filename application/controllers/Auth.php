<?php
	defined('BASEPATH') OR exit('No direct script access allowed');


	class Auth extends CI_Controller {

		var $table		=	'app_users';

		public function index(){
			redirect("auth/login");
		}
		public function login(){
			if ($this->session->userdata('is_logged_in')){
	            redirect('member/dashboard');
	        }
			$this->load->view('template/header.php');
			$this->load->view('auth/login.php');
			$this->load->view('template/footer.php');
		}

		function register(){
			$data['nama'] = "";
			$data['email'] = "";
			if($_SERVER['QUERY_STRING']){
				parse_str($_SERVER['QUERY_STRING'], $_GET); 	
				$data['nama']	=	$_GET['first_name'];
				$data['email']	=	$_GET['email'];	
			}
			
			//proses register
			if(isset($_POST['submit'])){
	        	if($password != $confirm){
	        		$this->session->set_flashdata("message","Password and Confirm Password doesn't match");
	        	}
	        	else{
		        	$email			=	trim($this->input->post('email'));

		        	//check if email already registered
		        	$exist = $this->db->get_where($this->table, array('username' => $email))->num_rows();
		        	if($exist > 0){
						$this->session->set_flashdata("message","Sorry, this email is already registered");
		        	}
		        	else{

			        	$first_name		=	trim($this->input->post('firstname'));
			        	$last_name		=	trim($this->input->post('lastname'));

		        		$register_user	= 	array("username" => $email,
														"email"	 => $email,
														"password" => $password,
														"type"	=> "3",
														"fullname" => $first_name." ".$last_name
												);
		        		if($this->db->insert($this->table,$register_user)){
							$id_user	= $this->db->insert_id();

							$register_client=	array("user_id" => $id_user,
														"first_name" => $first_name,
														"last_name"	 => $last_name,
												 );
							if($this->db->insert("clients",$register_client)){

								$id_client	= $this->db->insert_id();
								//aktifkan sesi
						        $login   = array('is_active_user' => $email,
						                            'is_active_name' => $first_name.' '.$last_name,
						                            'is_active_id' => $id_user,
						                            'is_active_cid' => $id_client,
						                            'is_active_time' => date("H:i"),
						                            'is_logged_in' => 'TRUE');
								$this->session->set_userdata($login);

								redirect("auth/voucher/");
							}
							else{
								$this->session->set_flashdata("message","Registrasi gagal! ".var_dump($this->db->error()));	
							}
						}else{
							$this->session->set_flashdata("message","Registrasi gagal!");
						}
		        	}
		        }
			//redirect to profile
		    }
			$this->load->view('auth/profile.php', $data);
		}

		function voucher(){
			
			if(isset($_POST['submit'])){
				$id_voucher			=	$this->input->post('id_voucher');
				$code 			=	$this->input->post('voucher_code');

				if($id_voucher != ""){
					if (preg_match("/^[A-Za-z0-9\-]+$/", $id_voucher) && preg_match("/^[A-Za-z0-9\-]+$/", $code)) {
						

						// check if voucher code and voucher id is exist, not used, and not expired
						$check_id 		=	array("id_voucher" => $id_voucher, "code" => $code, "used_at" => null, "expired_date <= " => 'NOW()');
						$check 			=	$this->db->get_where("vouchers", $check_id)->result_array();

						if(!empty($check)){

							//Find detail
							$id_package 	= 	$check[0]['id_package'];
							$find 			=	array("id_package" => $id_package);
							$package 		=	$this->db->get_where("packages", $find)->result_array();

							if(!empty($package)){

								//check if voucher is starter type
								if($package[0]['category_package'] ==  2){

									//PROSES
									$start_date 	= date("Y-m-d");
									$end_date		= date("Y-m-d", strtotime("+".$active." days"));


									// set active package
									$packagedata	= array("client_id" => $this->session->userdata("is_active_cid"),
													"domain" => $package[0]['domain'],
													"email" => $package[0]['email'],
													"bandwidth"	=> $package[0]['bandwidth'],
													"storage" => $package[0]['storage'],
													"active_period" => $package[0]['active_period'],
													"start_date" => $start_date,
													"end_date" => $end_date
												);
									$this->db->insert("clients_package",$packagedata);

									// update voucher as used
									$use_voucher	=	array("status" => 1, "used_at" => date('Y-m-d H:i:s'), "used_by" => $this->session->userdata("is_active_cid"));
									$this->db->where('id_voucher', $id_voucher);
									$this->db->update("vouchers",$use_voucher);

									// simpan transaksi
									$transaction_data	= array("client_id" => $this->session->userdata("is_active_cid"),
															"date_transaction" => date("Y-m-d"),
															"due_date" => date("Y-m-d"),
															"date_payment" => date("Y-m-d"),
															"date_transaction" => date("Y-m-d"),
															"total" => $package[0]['price_package'],
															"method" => 1,
															"detail" => $code,
															"status_payment" => 2,
															"verified_by" => 1
															);
									$this->db->insert("transactions",$transaction_data);

									redirect('auth/createsite');
								}
								else
								{
									$this->session->set_flashdata("message","Masukkan kode voucher untuk Starter Pack");
								}
							}
							else{
								$this->session->set_flashdata("message","Mohon maaf, kode voucher tidak dapat digunakan lagi.");
							}
						}
						else{
							$this->session->set_flashdata("message","Kode voucher tidak ditemukan");
						}
					}
					else{
						$this->session->set_flashdata("message","Format kode voucher tidak sesuai");
					}
				}
				else
				{
					$this->session->set_flashdata("message","Aktifkan voucher dengan mengklik Enter");
				}
			}
			$this->load->view('auth/voucher.php');
		}

		function get_voucher_by_code(){
			$code 		=	$_GET['code'];
			if($code != ""){
				if (preg_match("/^[A-Za-z0-9-]+$/", $code)) {
		        	$voucher 	=  $this->db->query("SELECT * FROM vouchers
	        								JOIN packages ON vouchers.id_package = packages.id_package
	        								WHERE vouchers.code = '$code' AND vouchers.status = 0 LIMIT 1")->result_array();
		        	
			        if($voucher){
			        	// cek apakah kode voucher berupa starter
			        	if($voucher[0]['category_package'] ==  2){
			        		//pass voucher data to view
			        		$data['voucher'] = $voucher;
			        		$result = $this->load->view('auth/voucher_detail', $data, TRUE);
			        		echo $result;	
			        	}
			        	else
			        	{
			        		echo '<h5 class="info-text">Anda harus memasukkan kode voucher untuk Starter</h5>';
			        	}
			        	
			        }
			        else
			        {
			        	echo '<h5 class="info-text">Voucher tidak ditemukan atau telah kadaluarsa</h5>';
			        }
			    }
			    else
			        {
			        	echo '<h5 class="info-text">Kode voucher tidak sesuai format</h5>';
			        }
		    }
		    else{
		    	echo '<h5 class="info-text">Harap memasukkan kode voucher!</h5>';
		    }
            exit;
		}
		function createsite(){

			if(isset($_POST['finish'])){

				// check if site address available
				$siteaddress	= $this->input->post("siteaddress");
				$site_exist		= $this->db->get_where("sites", "address_site = '".$siteaddress."'")->result_array();

				if(empty($site_exist)){
					// check if webmail address available
					$mailaddress	= $this->input->post("webmail");
					$mail_exist		= $this->db->get_where("site_mails", "address_mail = '".$mailaddress."'")->result_array();
					
					if(empty($mail_exist)){
						// process
						$sitename		= $this->input->post("sitename");
						$sitedesc		= $this->input->post("sitedesc");

						$sitedata		= array("name_site" => $sitename,
												"address_site" => $siteaddress,
												"description_site" => $sitedesc,
												"client_id"	=> $this->session->userdata("is_active_cid"),
												"date_registered" => date('Y-m-d')
											);
						if($this->db->insert("sites",$sitedata)){
							// get site id 

							// insert email to databasedddd`dddddzsdd
							$this->session->set_userdata('new_site', $siteaddress);
							redirect("web-builder/");
						}
						else{
							$this->session->set_flashdata("message","Failed to save site! ".$this->db->error());	
						}	
					}
					else
					{
						$this->session->set_flashdata("message","Alamat email tidak tersedia");	
					}
				}
				else
				{
					$this->session->set_flashdata("message","Alamat website tidak tersedia");	
				}
			}
			$this->load->view('auth/createsite.php');
		}

	    function logout()
	    {
	        $this->session->sess_destroy();
	        $data   = array('is_active_user' => '',
	                            'is_active_name' => '',
	                            'is_active_id' => '',
	                            'is_active_cid' => '',
	                            'is_active_time' => '',
	                            'is_logged_in' => 'FALSE');
	        $this->session->unset_userdata($data);
	        $this->session->set_flashdata("message","You're logged out");	
	        
			$this->load->view('template/header.php');
	        $this->load->view('auth/login.php');
			$this->load->view('template/footer.php');
	    }
	}
