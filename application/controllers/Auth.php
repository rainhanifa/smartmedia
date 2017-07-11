<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {
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
			$this->load->view('template/header.php');
			$this->load->view('auth/register.php');
			$this->load->view('template/footer.php');
		}
		public function registersuccess(){
			$this->load->view('template/header.php');
			$this->load->view('auth/register-success.php');
			$this->load->view('template/footer.php');
		}
		public function verification(){
			$this->load->view('template/header.php');
			$this->load->view('auth/verification-success.php');
			$this->load->view('template/footer.php');
		}

		public function doLogin(){
			if(isset($_POST['submit'])){
	            $em     = $this->input->post('email');
	            $pw     = md5($this->input->post('password'));
	            $login  =  $this->db->get_where('app_users',array('email'=>$em,'password'=>  $pw));
	            if($login->num_rows()>0)
	            {
	                $r      = $login->row_array();
	                if($r['type'] == '3'){	

	                	$data   = array('is_active_user' => $r['username'],
	                            'is_active_name' => $r['fullname'],
	                            'is_logged_in' => 'TRUE');

		                $this->session->set_userdata($data);
						redirect('member/dashboard');
	                }
	                else{
	                	$this->session->set_flashdata("message","You don't have privileges to access this feature");	
	                }
	                
	            }else{
	                $this->session->set_flashdata("message","Wrong email or password");	
	            }        
	        }
			
			redirect("auth/login");
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
