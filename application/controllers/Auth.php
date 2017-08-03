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
				$password		=	md5($this->input->post('password'));
	        	$confirm		=	md5($this->input->post('confirm_password'));

	        	if($password != $confirm){
	        		$this->session->set_flashdata("message","Password and Confirm Password doesn't match");
	        	}
	        	else{
		        	$email			=	$this->input->post('email');

		        	//check if email already registered
		        	$exist = $this->db->get_where($this->table, array('username' => $email))->num_rows();
		        	if($exist > 0){
						$this->session->set_flashdata("message","Sorry, this email is already registered");
		        	}
		        	else{

			        	$first_name		=	$this->input->post('firstname');
			        	$last_name		=	$this->input->post('lastname');

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
						                            'is_active_cid' => $cid,
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
				$domain			=	$this->input->post('domain');
				$email 			=	$this->input->post('email');
				$bandwidth 		=	$this->input->post('bandwidth');
				$storage		= 	$this->input->post('storage');
				$active 		=	$this->input->post('active_period');
				$price 			=	$this->input->post('price');

				$start_date 	= date("Y-m-d");
				$end_date		= date("Y-m-d", strtotime("+".$active." days"));
				
				// set active package
				$packagedata	= array("id_client" => $this->session->userdata("is_active_id"),
									"domain" => $voucher['domain'],
									"email" => $voucher['email'],
									"bandwidth"	=> $voucher['bandwidth'],
									"storage" => $voucher['storage'],
									"active_period" => $voucher['active_period'],
									"start_date" => date('Y-m-d')
								);

				$this->db->insert("clients_package",$package_data);

				// update voucher as used
				$use_voucher	=	array("status" => 1, "used_at" => date('Y-m-d H:i:s'));
				$this->db->where('id_voucher', $id_voucher);
				$this->db->update("vouchers",$use_voucher);

				// simpan transaksi
				$transaction_data	= array("id_client" => $this->session->userdata("is_active_id"),
										"date_transaction" => date("Y-m-d"),
										"due_date" => date("Y-m-d"),
										"date_payment" => date("Y-m-d"),
										"date_transaction" => date("Y-m-d"),
										"total" => $price,
										"method" => 1,
										"detail" => "Aktivasi voucher starter",
										"status_payment" => 2,
										"verified_by" => 1
										);
				$this->db->insert("transactions",$transaction_data);

				redirect('auth/createsite');
			}
			$this->load->view('auth/voucher.php');
		}

		function get_voucher_by_code(){
			$code 		=	$_GET['code'];
	        $voucher 	=  $this->db->query("SELECT * FROM vouchers
	        								JOIN packages ON vouchers.id_package = packages.id_package
	        								WHERE vouchers.code = '$code' AND vouchers.status = 0 LIMIT 1")->result_array();

	        if($voucher){
		        foreach($voucher as $detail){
						echo '<h5 class="info-text">Anda akan mengaktifkan <strong>'.$detail['name'].'</strong></h5>
							<input type="hidden" name="id_voucher" value="'.$detail['id_voucher'].'">
							<input type="hidden" name="domain" value="'.$detail['domain'].'">
							<input type="hidden" name="email" value="'.$detail['email'].'">
							<input type="hidden" name="bandwidth" value="'.$detail['bandwidth'].'">
							<input type="hidden" name="storage" value="'.$detail['storage'].'">
							<input type="hidden" name="active_period" value="'.$detail['active_period'].'">
							<input type="hidden" name="price" value="'.$detail['price'].'">

	                        <div class="col-sm-10 col-sm-offset-1">
	                            <div class="col-sm-3">
									<div class="choice" data-toggle="wizard-checkbox">
	                                    <input type="checkbox" name="jobb" value="Design">
	                                    <div class="card card-checkboxes card-hover-effect">
	                                        <i class="ti-desktop"></i>
											<p>'.$detail['domain'].'<br/>Subdomain</p>
	                                    </div>
	                                </div>
	                            </div>
	                            <div class="col-sm-3">
									<div class="choice" data-toggle="wizard-checkbox">
	                                    <input type="checkbox" name="jobb" value="Design">
	                                    <div class="card card-checkboxes card-hover-effect">
	                                        <i class="ti-envelope"></i>
											<p>'.$detail['email'].'<br/>Akun Email</p>
	                                    </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-3">
								<div class="choice" data-toggle="wizard-checkbox">
	                                <input type="checkbox" name="jobb" value="Design">
	                                <div class="card card-checkboxes card-hover-effect">
	                                    <i class="ti-package"></i>
										<p>'.$detail['storage'].' MB <br/>Penyimpanan</p>
	                                </div>
	                            </div>
	                        </div>
	                        <div class="col-sm-3">
								<div class="choice" data-toggle="wizard-checkbox">
	                                <input type="checkbox" name="jobb" value="Design">
	                                <div class="card card-checkboxes card-hover-effect">
	                                    <i class="ti-stats-up"></i>
										<p>'.$detail['bandwidth'].' MB<br/>Bandwidth</p>
	                                </div>
	                            </div>
	                        </div>
	                    </div>';
	                }
	            }
	       
	        else
	        {
	        	echo '<h5 class="info-text">Voucher Tidak Ditemukan atau Telah Kadaluarsa</h5>';
	        }
            exit;
		}
		function createsite(){
			if(isset($_POST['finish'])){
				$sitename		= $this->input->post("sitename");
				$siteaddress	= $this->input->post("siteaddress");
				$sitedesc		= $this->input->post("sitedesc");
				$webmail		= $this->input->post("webmail");

				$sitedata		= array("name_site" => $sitename,
										"address_site" => $siteaddress,
										"description_site" => $sitedesc,
										"client_id"	=> $this->session->userdata("is_active_id"),
										"date_registered" => date('Y-m-d')
									);
				if($this->db->insert("sites",$sitedata)){
					$this->session->set_userdata('new_site', $siteaddress);
					redirect("web-builder/");
				}
				else{
					$this->session->set_flashdata("message","Failed to save site! ".$this->db->error());	
				}
				
			}
			$this->load->view('auth/createsite.php');
		}

	    function logout()
	    {
	        $this->session->sess_destroy();
	        $data   = array('is_active_user' => '',
	                            'is_active_name' => '',
	                            'is_logged_in' => 'FALSE');
	        $this->session->unset_userdata($data);
	        $this->session->set_flashdata("message","You're logged out");	
	        
			$this->load->view('template/header.php');
	        $this->load->view('auth/login.php');
			$this->load->view('template/footer.php');
	    }
	}
