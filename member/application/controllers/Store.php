<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	
	class Store extends CI_Controller {
		var $user_id;
		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		    $this->user_id = $this->session->userdata("is_active_cid");
	    }
	    
		public function index(){
			$data['quota'] = $this->db->get_where('packages',array("category_package" => "0"))->result_array();
			$data['extensions'] = $this->db->order_by('active_period', 'ASC')->get_where('packages',array("category_package" => "1"))->result_array();
			
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('store/index.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function confirmation($product = 0){
			$data['product']	= $this->db->get_where('packages',array("id_package" => $product))->result_array();
			$data['my_detail']	= $this->db->select('*')->from('clients')->join('app_users as u', 'u.id_users = clients.user_id')
								->where(array("id_client" => $this->user_id))->get()->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('store/confirmation.php', $data);
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
		function get_voucher_by_code(){

			$code 		=	$_GET['code'];
	        $voucher 	=  $this->db->query("SELECT * FROM vouchers
	        								JOIN packages ON vouchers.id_package = packages.id_package
	        								WHERE vouchers.code = '$code' AND vouchers.status = 0 LIMIT 1")->result_array();

	        if($voucher){
	        	foreach($voucher as $detail){
		        	echo '<div class="modal-body">
                            <input type="hidden" name="id_voucher" value="'.$detail['id_voucher'].'">
		        			<input type="hidden" name="domain" value="'.$detail['domain'].'">
							<input type="hidden" name="email" value="'.$detail['email'].'">
							<input type="hidden" name="bandwidth" value="'.$detail['bandwidth'].'">
							<input type="hidden" name="storage" value="'.$detail['storage'].'">
							<input type="hidden" name="active_period" value="'.$detail['active_period'].'">
							<input type="hidden" name="price" value="'.$detail['price'].'">
							<div class="row">
	                            <div class="col-md-12">
	                                <h5>Anda akan mengaktifkan <strong>'.$detail['name'].'</strong></h5>
	                            </div>';
	                if($detail['domain'] > 0){
	                	echo '<div class="col-md-4">
	                             <span class="btn btn-primary">Website <span class="badge">'.$detail['domain'].'</span></span>
	                            </div>';
	                }
	                if($detail['email'] > 0){
	                	echo '<div class="col-md-4">
	                             <span class="btn btn-primary">Email <span class="badge">'.$detail['email'].'</span></span>
	                            </div>';
	                }
	                if($detail['bandwidth'] > 0){
	                	echo '<div class="col-md-4">
	                             <span class="btn btn-primary">Bandwidth <span class="badge">'.$detail['bandwidth'].' MB</span></span>
	                            </div>';
	                }
	                if($detail['storage'] > 0){
	                	echo '<div class="col-md-4">
	                             <span class="btn btn-primary">Penyimpanan <span class="badge">'.$detail['storage'].' MB</span></span>
	                            </div>';
	                }
	                if($detail['active_period'] > 0){
	                	echo '<div class="col-md-4">
	                             <span class="btn btn-primary">Masa Aktif <span class="badge">'.$detail['active_period'].' hari</span></span>
	                            </div>';
	                }
	                            
		        	echo '</div></div><div class="modal-footer">
	                        <button class="btn" data-dismiss="modal">CANCEL</button>
	                        <input type="submit" class="btn btn-info " value="BELI" name="submit" >
	                    </div>';
	            }
	        }else{
	        	echo '<div class="modal-body">Kode voucher tidak ditemukan atau telah kadaluarsa</div>';
	        }
		}
	}
