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
										"phone_number" => $phone,
										"address_1" => $address_1,
										"address_2" => $address_2,
										"city" => $city,
										"region" => $region,
										"zip_code" => $zip_code,
										"country" => $country,
									);

				
				$this->db->where("id_users",$this->session->userdata('is_active_id'));
				if($this->db->update($this->table,$profile)){
					$this->session->set_flashdata('message','<div class="alert alert-success">
                            <button class="close" data-dismiss="alert">&times;</button >Profile changes! </div>');	
				}
				else{
					$this->session->set_flashdata('message','<div class="alert alert-danger">
                            <button class="close" data-dismiss="alert">&times;</button>Failed to edit profile! '.$this->db->error().'</div>');	
				}
			}
			$data['profile'] = $this->db->get_where($this->table, array('id_users' => $this->session->userdata('is_active_id')))->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');

			$this->load->view('user/edit.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function acc_setting(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('user/acc_setting.php');
			$this->load->view('template/footer-member.php');
		}
	}
