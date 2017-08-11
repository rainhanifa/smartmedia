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
	}
