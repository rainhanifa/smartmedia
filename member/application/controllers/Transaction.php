<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Transaction extends CI_Controller {
		var $table	= 'transactions';
		var $user 	= '';

		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		     $this->user 	= $this->session->userdata('is_active_cid');
	    }
	    
		public function index(){
			$data['transactions']	=	$this->db->get_where($this->table, array('client_id' => $this->user))->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('transaction/index.php', $data);
			$this->load->view('template/footer-member.php');
		}
		public function invoice($id = 0){
			$data['invoices']	=	$this->db->get_where($this->table, array('id_transaction' => $id))->result_array();
			$data['my_detail']	=	$this->db->select('billing.first_name, billing.last_name, billing.company_name,
									billing.phone, billing.address_1, billing.city, billing.zip_code, billing.region, billing.email')
									->from('billing')->join('clients as c', 'billing.client_id = c.id_client')
									->where(array('c.id_client'=> $this->user))->limit(1)->get()->result_array();

			$this->load->view('template/header-member.php');
			$this->load->view('transaction/invoice.php', $data);
		}

		function confirm_payment(){
			$invoice_id = $this->input->post('invoice_id');
			$method		= $this->input->post('method');

			$confirm_data = array('date_payment' => date("Y-m-d"),
							'method' => $method,
							'status_payment' => 1 );

			$this->db->where('id_transaction', $invoice_id);
			$this->db->update('transactions', $confirm_data);

			redirect('transaction');
		}

		
		public function confirmation($product = 0){
			$data['product']	= $this->db->get_where('packages',array("id_package" => $product))->result_array();
			$data['my_detail']	= $this->db->select('*')->from('clients')->join('app_users as u', 'u.id_users = clients.user_id')
								->where(array("id_client" => $this->user_id))->get()->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('transaction/confirmation.php', $data);
			$this->load->view('template/footer-member.php');
		}
		function finish(){
			if(isset($_POST)){
				//input to billing
				$first_name		=	$this->input->post('first_name');
				$last_name		=	$this->input->post('last_name');
				$company_name	=	$this->input->post('company_name');
				$phone_number	=	$this->input->post('phone_number');
				$email 			=	$this->input->post('email');
				$address_1		=	$this->input->post('address_1');
				$address_2		=	$this->input->post('address_2');
				$city 			=	$this->input->post('city');
				$region			=	$this->input->post('region');
				$zip_code		=	$this->input->post('zip_code');

				$billing_data	=	array("client_id" => $this->user_id,
										"first_name" => $first_name,
										"last_name" => $last_name,	
										"company_name" => $company_name,
										"phone" => $phone_number,
										"email" => $email,
										"address_1" => $address_1,
										"address_2" => $address_2,
										"city" => $city,
										"region" => $region,
										"zip_code" => $zip_code
									);
				if($this->db->insert("billing", $billing_data)){
					$billing_id = $this->db->insert_id();

					//input to transaction
					$product 	=	$this->input->post('product');
					$price		=	$this->input->post('price');
					$method		=	$this->input->post('method');

					//get product detail
					$product_detail = $this->db->get_where("packages", array('id_package' => $product))->result_array();
					$product_name 	= $product_detail[0]['name_package'];

					$detail = "Pembelian ".$product_name." via web";
					

					$transaction_data	= array("client_id" => $this->user_id,
												"date_transaction" => date("Y-m-d"),
												"due_date" => date("Y-m-d", strtotime("+90 days")),
												"total" => $price,
												"detail" => $detail,
												"billing_id" => $billing_id,
												"status_payment" => 0,
												"method" => $method
											);
					if($this->db->insert("transactions", $transaction_data)){
						$invoice_id	= $this->db->insert_id();
					}
				}
				
			}
			redirect('transaction/invoice/'.$invoice_id);
		}
		function activate_voucher(){
			$id_voucher		=	$this->input->post('id_voucher');
			$domain			=	$this->input->post('domain');
			$email 			=	$this->input->post('email');
			$bandwidth 		=	$this->input->post('bandwidth');
			$storage		= 	$this->input->post('storage');
			$active 		=	$this->input->post('active_period');
			$price 			=	$this->input->post('price');

			$today			= date("Y-m-d");
			$start_date 	= $today;
			$end_date		= date("Y-m-d", strtotime("+".$active." days"));

			// check user package
			$is_user_package	=	$this->db->get_where("clients_package", array("id_client" => $this->user_id))->num_rows();

			if($is_user_package > 0) {
				$user_package		=	$this->db->get_where("clients_package", array("id_client" => $this->user_id))->result_array();
				$package_domain		=	$user_package[0]['domain'];
				$package_email		=	$user_package[0]['email'];
				$package_bandwidth	=	$user_package[0]['bandwidth'];
				$package_storage	=	$user_package[0]['storage'];
				$package_period		=	$user_package[0]['active_period'];
				$package_start		=	$user_package[0]['start_date'];
				$package_end		=	$user_package[0]['end_date'];


				
				if($active > 0){
					if($package_end > $today){
						//tambahkan masa aktif
						$end_date		= date("Y-m-d", strtotime($package_end." + ".$active." days"));
						//start date dari yang lama
						$start_date		= $package_start;
					}

				}

				$packagedata	= array("domain" => $package_domain + $domain,
										"email" => $package_email + $email,
										"bandwidth"	=> $package_bandwidth + $bandwidth,
										"storage" => $package_storage + $storage,
										"active_period" => $package_period + $active,
										"start_date" => $start_date,
										"end_date" => $end_date
									);
				$this->db->where('id_client', $this->user_id);
				$this->db->update("clients_package",$packagedata);

			}
			else{
				// set active package
				$packagedata	= array("id_client" => $this->user_id,
								"domain" => $domain,
								"email" => $email,
								"bandwidth"	=> $bandwidth,
								"storage" => $storage,
								"active_period" => $active,
								"start_date" => $start_date,
								"end_date" => $end_date
							);
				$this->db->insert("clients_package",$packagedata);
	
			}
			
			// update voucher as used
			$use_voucher	=	array("status" => 1, "used_at" => date('Y-m-d H:i:s'));
			$this->db->where('id_voucher', $id_voucher);
			$this->db->update("vouchers",$use_voucher);

			// simpan transaksi
			$transaction_data	= array("id_client" => $this->user_id,
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

			$this->session->set_flashdata("message", "Voucher baru telah diaktifkan");
			redirect("store");
		}
	}
