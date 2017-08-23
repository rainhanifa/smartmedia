<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {

		public function index(){
			redirect("auth/login");
		}
		public function login(){
			if ($this->session->userdata('is_logged_in')){
	            redirect('dashboard');
	        }

	        if(isset($_POST['submit'])){
	            $un     = $this->input->post('username');
	            $pw     = md5($this->input->post('password'));
	            $login  =  $this->db->get_where('app_users',array('username'=>$un,'password'=>  $pw));
	            if($login->num_rows()>0)
	            {
	                $r      = $login->row_array();
	                if($r['type'] == '3'){	
	                	$clients  =  $this->db->get_where('clients',array('user_id' =>  $r['id_users']))->result_array();
	                	foreach($clients as $client){
	                		$client_id = $client['id_client'];
	                	}

	                	$data   = array('is_active_user' => $r['username'],
	                            'is_active_name' => $r['fullname'],
	                            'is_active_id' => $r['id_users'],
	                            'is_active_cid' => $client_id,
	                            'is_active_time' => date("H:i"),
	                            'is_logged_in' => 'TRUE');

		                $this->session->set_userdata($data);
		                redirect('dashboard');
	                }
	                else{
	                	$this->session->set_flashdata("message","You don't have privileges to access this feature");	
	                }
	                
	            }else{
	                $this->session->set_flashdata("message","Wrong username or password");	
	            }        
	        }
			$this->load->view('auth/login.php');
		}
		public function register(){
			$this->load->view('template/header.php');
			$this->load->view('about/register.php');
			$this->load->view('template/footer.php');
		}
		public function registersuccess(){
			$this->load->view('template/header.php');
			$this->load->view('about/register-success.php');
			$this->load->view('template/footer.php');
		}
		public function verification(){
			$this->load->view('template/header.php');
			$this->load->view('about/verification-success.php');
			$this->load->view('template/footer.php');
		}
		public function requestreset(){

		}

	    function logout()
	    {
	        $this->session->sess_destroy();
	        $data   = array('is_active_user' => '',
	                            'is_active_name' => '',
	                            'is_active_time' => '',
	                            'is_logged_in' => 'FALSE');
	        $this->session->unset_userdata($data);
	        $this->session->set_flashdata("message","You're logged out");	
	        $this->load->view('auth/login.php');
	    }
	}
