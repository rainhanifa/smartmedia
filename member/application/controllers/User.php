<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class User extends CI_Controller {

		var $table		=	'clients';

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }
		public function index(){
			redirect("user/edit");
		}
		public function edit(){
			if(isset($_POST['submit'])){
				$first_name		= $this->input->post('first_name');
				$last_name 		= $this->input->post('last_name');
				$full_name		= $first_name." ".$last_name;

				$company_name	= $this->input->post('company_name');

				$phone			= $this->input->post('phone');
				$address_1		= $this->input->post('address_1');
				$address_2		= $this->input->post('address_2');
				$city			= $this->input->post('city');
				$region			= $this->input->post('region');
				$zip_code		= $this->input->post('zip_code');
				$country		= $this->input->post('country');

				$profile		= array("first_name" => $first_name,
										"last_name" => $last_name,
										"company_name" => $company_name,
										"phone" => $phone,
										"address_1" => $address_1,
										"address_2" => $address_2,
										"city" => $city,
										"region" => $region,
										"zip_code" => $zip_code,
										"country" => $country,
									);
				$userdata		= array("fullname" => $full_name);
				
				$this->db->where("user_id",$this->session->userdata('is_active_id'));
				if($this->db->update($this->table,$profile)){
					$this->db->where("id_users",$this->session->userdata('is_active_id'));
					$this->db->update("app_users",$userdata);

					$this->session->set_userdata("is_active_name", $full_name);

					$this->session->set_flashdata('message','<div class="alert alert-success">
                            <button class="close" data-dismiss="alert">&times;</button >Profile updated! </div>');	
				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger">
                            <button class="close" data-dismiss="alert">&times;</button>Failed to update! '.$this->db->error().'</div>');	
				}
			}
			$data['profile'] = $this->db->get_where($this->table, array('user_id' => $this->session->userdata('is_active_id')))->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');

			$this->load->view('user/edit.php', $data);
			$this->load->view('template/footer-member.php');
		}

		public function acc_setting(){
			if(isset($_POST['submit'])){
				$old_passw	=	$this->input->post('old');
				$new_passw	=	$this->input->post('new');
				$conf_passw	=	$this->input->post('confirm');


				if($new_passw == $old_passw){
					$this->session->set_flashdata('message','<div class="alert alert-danger">Password baru tidak dapat sama dengan password lama</div>');
				} else if($new_passw != $conf_passw){
					$this->session->set_flashdata('message','<div class="alert alert-danger">Konfirmasi password tidak sama dengan password baru</div>');
				} else{
					$key	= array("id_users" => $this->session->userdata("is_active_id"),
									"password" => md5($old_passw));
					$match	= $this->db->get_where("app_users", $key)->num_rows();
					if($match == 0){
						$this->session->set_flashdata('message','<div class="alert alert-danger">Password yang Anda masukkan salah</div>');
					} else{
						$this->db->where("id_users",$this->session->userdata('is_active_id'));
						if($this->db->update("app_users",array("password" => md5($new_passw)))){
							$this->session->set_flashdata('message','<div class="alert alert-success">Password baru telah disimpan</div>');	
						}
						else{
							$this->session->set_flashdata('message','<div class="alert alert-danger">Tidak dapat mengubah password</div>');
						}
					}
				}
			}
			$data['js'] 		= array('js/jquery.validate.min.js');
			$data['page_js']	= $this->load->view('custom-script/acc-setting', '', TRUE);
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('user/acc_setting.php', $data);
			$this->load->view('template/footer-member.php');
		}
	}
