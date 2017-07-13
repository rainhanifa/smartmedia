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
		public function register(){
			if ($this->session->userdata('is_logged_in')){
	            redirect('member/dashboard');
	        }

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
		        	}else{
			        	$first_name		=	$this->input->post('first_name');
			        	$last_name		=	$this->input->post('last_name');

						$register_user	= 	array("username" => $email,
													"email"	 => $email,
													"password" => $password,
													"type"	=> "3",
													"fullname" => $first_name." ".$last_name
											);
						if($this->db->insert($this->table,$register_user)){
							$id_user	= $this->db->insert_id();

							$register_client=	array("id_users" => $id_user,
														"first_name" => $first_name,
														"last_name"	 => $last_name,
												 );
							if($this->db->insert("clients",$register_client)){
								redirect("auth/registersuccess/".$email);
							}
							else{
								$this->session->set_flashdata("message","Failed to save user data! ".$this->db->error());	
							}
						}else{
							$this->session->set_flashdata("message","Sorry, there are errors in our system. Please try again later");
						}
						     		
		        	}
	        	}
	        }
			$this->load->view('template/header.php');
			$this->load->view('auth/register.php');
			$this->load->view('template/footer.php');
		}
		public function registersuccess($mail = ""){
			if($mail != ""){
				$data["mail"]		= $mail;
			}
			else
			{	
				$data["mail"]		= "registered mail";	
			}
			$this->load->view('template/header.php');
			$this->load->view('auth/register-success.php', $data);
			$this->load->view('template/footer.php');
		}
		public function verification(){
			$this->load->view('template/header.php');
			$this->load->view('auth/verification-success.php');
			$this->load->view('template/footer.php');
		}

		public function doLogin(){
			if(isset($_POST['submit'])){
				$redirect = $this->input->post('redirect');

				if($redirect == ""){
					$redirect = 'member/dashboard';
				}

	            $em     = $this->input->post('email');
	            $pw     = md5($this->input->post('password'));
	            $login  =  $this->db->get_where('app_users',array('email'=>$em,'password'=>  $pw));
	            if($login->num_rows()>0)
	            {
	                $r      = $login->row_array();
	                if($r['type'] == '3'){	

	                	$data   = array('is_active_user' => $r['username'],
	                            'is_active_name' => $r['fullname'],
	                            'is_active_id' => $r['id_users'],
	                            'is_logged_in' => 'TRUE');

		                $this->session->set_userdata($data);
		                	redirect($redirect);
						
	                }
	                else{
	                	$this->session->set_flashdata("message","You don't have privileges to access this feature");	
						$this->session->set_flashdata("redirect",$redirect);	
	                }
	                
	            }else{
	                $this->session->set_flashdata("message","Wrong email or password");	
					$this->session->set_flashdata("redirect",$redirect);	
	            }        
	        }
			redirect("auth/login");
		}

		function voucher(){
			if(isset($_POST['submit'])){
				redirect("auth/createsite");
			}
			$this->load->view('template/header.php');
			$this->load->view('auth/kode-voucher.php');
			$this->load->view('template/footer.php');
		}


		function createsite(){
			if(isset($_POST['submit'])){
				$sitename		= $this->input->post("sitename");
				$siteaddress	= $this->input->post("siteaddress");
				$sitedesc		= $this->input->post("sitedesc");
				$webmail		= $this->input->post("webmail");

				$sitedata		= array("name_site" => $sitename,
										"address_site" => $siteaddress,
										"description_site" => $sitedesc,
										"client_id"	=> $this->session->userdata("is_active_id")
									);
				if($this->db->insert("sites",$sitedata)){
					redirect("web-builder");
				}
				else{
					$this->session->set_flashdata("message","Failed to save site! ".$this->db->error());	
				}
				
			}
			$this->load->view('template/header.php');
			$this->load->view('auth/last-step.php');
			$this->load->view('template/footer.php');
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
