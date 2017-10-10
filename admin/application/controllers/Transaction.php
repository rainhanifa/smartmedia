<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Transaction extends CI_Controller {
		var $table	= "transactions";
		var $admin;
		public function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('admin_logged_in')){
		        redirect('auth/login');
		     }
		     $this->admin = $this->session->userdata['admin_active_id'];
		}
		
		public function index(){
			$data['transactions'] =	$this->db->select("*")->from($this->table)->join("clients", $this->table.'.client_id = clients.id_client')
                                    ->order_by("date_payment", "DESC")
									->get()->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('transaction/transaction.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function invoice($id){
            if($id>0){
                $billing_data = $this->db->select("id_transaction, detail, total, status_payment, method, due_date, date_payment, date_transaction,
                                                first_name, last_name,  address_1, address_2, city, region, zip_code, phone, email")->from($this->table)
                                    ->join("billing", "transactions.client_id = billing.client_id")
                                    ->where("id_transaction",$id)
                                    ->get_compiled_select();
                $client_data = $this->db->select("id_transaction, detail, total, status_payment, method, due_date, date_payment, date_transaction,
                                                    first_name, last_name,  address_1, address_2, city, region, zip_code, phone, email")->from($this->table)
                                        ->join("clients", "transactions.client_id = clients.id_client")
                                        ->where("id_transaction",$id)
                                        ->get_compiled_select();

                // merge both data
                $data['transactions'] = $this->db->query($billing_data." UNION ".$client_data." LIMIT 1")->result_array();

                                        //print_r($this->db->last_query());exit;
                $this->load->view('template/header-admin.php');
                $this->load->view('template/navbar-admin.php');
                $this->load->view('transaction/detail_invoice.php', $data);
                $this->load->view('template/footer-admin.php');
            }
            else{
                $this->session->set_flashdata("message", '
                    <div class="alert alert-warning">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Please choose transaction</strong>
                    </div>');

                redirect('transaction'); 
            }
            
		}
		public function awaiting(){
			$data['transactions'] =	$this->db->select("transactions.id_transaction as notrans, transactions.*, clients.*")
                                    ->from($this->table)->join("clients", $this->table.'.client_id = clients.id_client')
									->where(array("status_payment" => "1"))->get()->result_array();
			// print_r($this->db->last_query());
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('transaction/transaction_awaiting.php', $data);
			$this->load->view('template/footer-admin.php');
		}

        public function vouchers(){
            $data['transactions'] = $this->db->select("*, vouchers.used_by as activator")->from($this->table)
                                    ->join("clients", $this->table.'.client_id = clients.id_client', "inner")
                                    ->join("vouchers", $this->table. '.client_id = vouchers.used_by', "inner")
                                    ->where(
                                        array("status_payment" => "2",
                                                "method" => 1)
                                        )
                                    ->order_by("date_payment", "DESC")
                                    ->get()->result_array();
                                    //print_r($this->db->last_query());exit;
            $this->load->view('template/header-admin.php');
            $this->load->view('template/navbar-admin.php');
            $this->load->view('transaction/voucher_activation.php', $data);
            $this->load->view('template/footer-admin.php');
        }

		public function confirm($id_transaction){
			if($id_transaction > 0){
                $konfirmasi = array("status_payment" => 2, 
                                "verified_by" => $this->admin,
                                "verified_date" => date("Y-m-d")
                                );
                $this->db->where('id_transaction', $id_transaction);
                if($this->db->update("transactions",$konfirmasi)){
                    $this->session->set_flashdata("message", '
                    <div class="alert alert-success">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Transaction confirmed</strong>
                    </div>');
                }else{
                    $this->session->set_flashdata("message", '
                    <div class="alert alert-danger">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Failed to confirm, please try again later!</strong>
                    </div>');
                } 
            }
            else{
                $this->session->set_flashdata("message", '
                    <div class="alert alert-warning">
                        <button class="close" data-dismiss="alert">×</button>
                        <strong>Please choose transaction</strong>
                    </div>');
            }
			redirect('transaction/awaiting');   
		}
		public function voucher(){
			//list voucher activated
		}
		public function get_transaction_by_id($id_transaction){
			$transaksi =	$this->db->select("*")->from($this->table)->join("clients", $this->table.'.client_id = clients.id_client')
									->where(array("id_transaction" => $id_transaction))->get()->result_array();

            echo '<h3 class="modal-title"><strong>CONFIRM PAYMENT #'.$transaksi[0]['id_transaction'].'</strong></h3>
                        </div>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                </div>
                            </div>
                            <br/>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>ORDER</h4>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table table-stripped">
                                                <thead>
                                                    <tr>
                                                        <th>'.$transaksi[0]['detail'].'</th>
                                                        <th class="text-right">Rp '.$transaksi[0]['total'].'</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="text-right"><h4>TOTAL</h4></td>
                                                        <td class="text-right"><h4>Rp '.$transaksi[0]['total'].'</h4></td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="panel panel-default">
                                        <div class="panel-heading">
                                            <h4>PAYMENT DETAIL</h4>
                                        </div>
                                        <div class="panel-body">
                                            <table class="table">
                                                <thead>
                                                    <tr>
                                                        <th>Date of Payment</th>
                                                        <th>: '.date('l, d-m-Y', strtotime($transaksi[0]['date_payment'])).'</th>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="panel panel-info">
                                        <div class="panel-heading">
                                            <h5>PAYMENT METHOD</h5> 
                                        </div>
                                        <div class="panel-body">
                                            <p>'.getPaymentName($transaksi[0]['method']).'</p>
                                        </div>
                                    </div>
                                </div>              
                            </div>
                        </div>';
                            /*
			echo '<h3><strong>Confirm Payment '.$transaksi[0]['id_transaction'].'</strong></h3>
                            </div>
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-12">
                                        
                                    </div>
                                </div>
                                <br/>
                                <div class="row">
                                    <div class="col-md-6">
                                            <h4>ORDER</h4>
                                            <table>
                                                <tbody>
                                                    <tr>
                                                        <td>Extend 30-days</td>
                                                        <td>..............</td>
                                                        <td class="text-right">Rp 70.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Credit Balance</td>
                                                        <td>..............</td>
                                                        <td class="text-right">-Rp 6.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td></td>
                                                        <td class="text-right">TOTAL</td>
                                                        <td class="text-right">Rp 70.000</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                    </div>
                                    <div class="col-md-6">
                                        <h4>PAYMENT DETAIL</h4>
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td>Date of Payment</td>
                                                    <td> : </td>
                                                    <td>'.$transaksi[0]['date_payment'].'</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <br/>
                                        <p><strong>PAYMENT METHOD</strong></p>
                                        <p><strong>BCA 0115116032 - Imaniar Hanifa</strong></p>
                                    </div>
                                </div>              ';*/
		}
	}
