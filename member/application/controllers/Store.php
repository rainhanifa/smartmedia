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
		function get_voucher_by_code(){

			$code 		=	$_GET['code'];
	        $voucher 	=  $this->db->query("SELECT * FROM vouchers
	        								JOIN packages ON vouchers.id_package = packages.id_package
	        								WHERE vouchers.code = '$code' AND vouchers.status = 0 LIMIT 1")->result_array();

	        if($voucher){
	        	foreach($voucher as $detail){
	        		$voucher_detail	= array("cart_id_voucher"	=> $detail['id_voucher'],
	        								"cart_kode_voucher" => $detail['code']);
	        		$this->session->set_userdata("cart_detail", $voucher_detail);
       						//	<input type="hidden" name="id_voucher" value="'.$detail['id_voucher'].'">
		     				//  <input type="hidden" name="domain" value="'.$detail['domain'].'">
							// <input type="hidden" name="email" value="'.$detail['email'].'">
							// <input type="hidden" name="bandwidth" value="'.$detail['bandwidth'].'">
							// <input type="hidden" name="storage" value="'.$detail['storage'].'">
							// <input type="hidden" name="active_period" value="'.$detail['active_period'].'">
							// <input type="hidden" name="price" value="'.$detail['price'].'">
		        	echo '<div class="modal-body">
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
