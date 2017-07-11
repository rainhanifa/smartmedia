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

	        $data['error'] = "";

	        if(isset($_POST['submit'])){
	            $un     = $this->input->post('username');
	            $pw     = md5($this->input->post('password'));
	            $login  =  $this->db->get_where('app_users',array('username'=>$un,'password'=>  $pw));
	            if($login->num_rows()>0)
	            {
	                $r      = $login->row_array();
	                $data   = array('admin_active_user' => $r['username'],
	                            'admin_acive_name' => $r['nama'],
	                            'admin_logged_in' => 'TRUE');

	                $this->session->set_userdata($data);

	                redirect('dashboard');
	            }else{
	                $data['error'] = "Username atau password salah";
	            }        
	        }
			$this->load->view('auth/login.php', $data);
		}

		public function register(){
			
		}


	    function logout()
	    {
	        $this->session->sess_destroy();
	        $this->session->unset_userdata();
	        redirect('auth/login');
	    }
	}
