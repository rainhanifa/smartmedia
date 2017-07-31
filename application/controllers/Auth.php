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
								//aktifkan sesi
						        $login   = array('is_active_user' => $email,
						                            'is_active_name' => $first_name.' '.$last_name,
						                            'is_active_id' => $id_user,
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

				$code 			=	$this->input->post('voucher_code');

				$use_voucher	=	array("status" => 1, "used_at" => date('Y-m-d H:i:s'));
				$this->db->where('code', $code);
				$this->db->update("vouchers",$use_voucher);

				$voucher 	=	$this->db->get_where('vouchers', array('code' => $code))->result_array();
				foreach($voucher as $voucher){
					$this->session->set_flashdata('package', $voucher['id_package']);
				}
				redirect('auth/createsite');
			}
			$this->load->view('auth/voucher.php');
		}

		function get_voucher_by_code(){
			$code 		=	$_GET['code'];
	        $voucher 	=  $this->db->query("SELECT * FROM vouchers
	        								JOIN packages ON vouchers.id_package = packages.id_package
	        								WHERE vouchers.code = '$code'")->result_array();

	        if($voucher){

		        foreach($voucher as $detail){
					echo '<h5 class="info-text">Anda akan mengaktifkan <strong>'.$detail['name'].'</strong>!</h5>
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
	        	echo '<h5 class="info-text">Voucher Tidak Ditemukan!</h5>';
	        }
            exit;
		}
		function createsite(){
			if(isset($_POST['finish'])){
				$sitename		= $this->input->post("sitename");
				$siteaddress	= $this->input->post("siteaddress");
				$sitedesc		= $this->input->post("sitedesc");
				$webmail		= $this->input->post("webmail");
				$package		= $this->input->post("package");

				$sitedata		= array("name_site" => $sitename,
										"address_site" => $siteaddress,
										"description_site" => $sitedesc,
										"client_id"	=> $this->session->userdata("is_active_id"),
										"active_package" => $package,
										"date_registered" => date('Y-m-d')
									);
				if($this->db->insert("sites",$sitedata)){
					redirect("web-builder");
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
