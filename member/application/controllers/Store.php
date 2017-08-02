<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Store extends CI_Controller {
		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	    }
	    
		public function index(){
			$data['quota'] = $this->db->get_where('packages',array("category_package" => "0"))->result_array();
			$data['extensions'] = $this->db->order_by('active_period', 'ASC')->get_where('packages',array("category_package" => "1"))->result_array();
			
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('store/index.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function confirmation(){
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('store/confirmation.php');
			$this->load->view('template/footer-member.php');
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
			$is_user_package	=	$this->db->get_where("clients_package", array("id_client" => $this->session->userdata('is_active_id')))->num_rows();

			if($is_user_package > 0) {
				$user_package		=	$this->db->get_where("clients_package", array("id_client" => $this->session->userdata('is_active_id')))->result_array();
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
				$this->db->where('id_client', $this->session->userdata("is_active_id"));
				$this->db->update("clients_package",$packagedata);

			}
			else{
				// set active package
				$packagedata	= array("id_client" => $this->session->userdata("is_active_id"),
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
			$transaction_data	= array("id_client" => $this->session->userdata("is_active_id"),
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
