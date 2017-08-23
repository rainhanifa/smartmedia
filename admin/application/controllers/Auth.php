<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Auth extends CI_Controller {
		public function index(){
			redirect("auth/login");
		}
		public function login(){

			if ($this->session->userdata('admin_logged_in')){
	            redirect('dashboard');
	        }


	        if(isset($_POST['submit'])){
	            $un     = $this->input->post('username');
	            $pw     = md5($this->input->post('password'));
	            $login  =  $this->db->get_where('app_users',array('username'=>$un,'password'=>  $pw));
	            if($login->num_rows()>0)
	            {
	            	$r      = $login->row_array();
	                if($r['type'] != '3'){
	                	$data   = array('admin_active_user' => $r['username'],
	                            'admin_active_name' => $r['fullname'],
	                            'admin_active_id' => $r['id_users'],
	                            'admin_logged_in' => 'TRUE',
	                            'admin_active_time' => date("H:i"));

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
			
		}


	    function logout()
	    {
	        $this->session->sess_destroy();

	    	$data   = array('admin_active_user' => '',
	                'admin_active_name' => '',
	                'admin_active_time' => '',
	                'admin_logged_in' => 'FALSE');
	        $this->session->unset_userdata($data);
	        $this->session->set_flashdata("message","You're logged out");	
	        $this->load->view('auth/login.php');
	    }


	}
