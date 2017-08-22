<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {
		/*var $table = "tickets, departments";*/
 		var $user_id;

		public function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
		    $this->user_id = $this->session->userdata('is_active_cid');
	    }

		public function index(){
			//$data['ticket'] = $this->db->query('SELECT DISTINCT tickets.id, tickets.id_ticket,  min(tickets.date_ticket) as open_date, max(tickets.date_ticket) as latest_date, departments.name_department, tickets.subject_ticket, tickets.status_ticket FROM departments JOIN tickets ON departments.id_department = tickets.department_id GROUP BY tickets.id_ticket')->result_array();
			$where = array("client_id" => $this->user_id);
			$data['tickets']  	= $this->db->select("*")
									->from("tickets AS t")
									->join("departments AS d","t.department_id = d.id_department")
									->where($where)
									->group_by("t.id_ticket")
									->get()
									->result_array();

			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/index.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function new_ticket(){
			$data['department'] = $this->db->query('SELECT * FROM departments')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/new_ticket.php',$data);
			$this->load->view('template/footer-member.php');
		}

		public function open_ticket($id_department=0){
			$data['department'] = $this->db->query('SELECT * FROM departments')->result_array();
			$data['department_id'] = $id_department;

			$where 	= array("client_id" => $this->user_id);
			$data['my_site']	= $this->db->get_where("sites", $where)->result_array();

			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/open_ticket.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function detail($id = 0){

			/*$data['ticket'] = $this->db->query('SELECT * FROM tickets WHERE id = '.$id)->result_array();
			$data['name'] = $this->db->query(
				"SELECT tickets.*, app_users.fullname 
				FROM tickets INNER JOIN app_users ON app_users.id_users = tickets.client_id 
				WHERE tickets.id_ticket = '" .$data['ticket'][0]['id_ticket']."' ORDER BY tickets.id")->result_array();
			*/

			$where = array("id_ticket" => $id);
			$where2 = array("ticket_id" => $id);

			$data['tickets']  	= $this->db->select("*")->from("tickets AS t")
									->join("departments AS d","t.department_id = d.id_department")
									->join("clients AS c","t.client_id = c.id_client")
									->where($where)->get()->result_array();
			$data['messages'] 	= $this->db->select("*")->from("ticket_details as d")
									->join("app_users AS u", "d.user_id = u.id_users")
									->where($where2)->order_by("date_detail","DESC")->get()->result_array();

			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/detail_ticket.php',$data);
			$this->load->view('template/footer-member.php'); 
		}

		function submit_ticket(){
				//user inputs
				$category = $this->input->post('department_id');
				$tags = $this->input->post('priority');
				$subject = $this->input->post('subject');
				$sites = $this->input->post('sites');
				$content = $this->input->post('content');
				$date = date("Y-m-d H:i:s");


				$ticket_data	= array("subject_ticket" => $subject,
										"date_open_ticket" => $date,
										"priority_ticket" => $tags,
										"department_id" => $category,
										"site_id" => $sites,	
										"client_id" => $this->user_id,
										"status_ticket" => 0
										);

				if($this->db->insert("tickets", $ticket_data)){
					//last id
					$id_ticket 	= $this->db->insert_id();
					//save detail
					$ticket_detail = array("ticket_id" => $id_ticket,
											"user_id" => $this->session->userdata("is_active_id"),
											"date_detail" => $date,
											"message_detail" => $content
										);
					if($this->db->insert("ticket_details", $ticket_detail)){
						//last id
						$id_detail 	= $this->db->insert_id();
						
						$config['upload_path']          = realpath('./../')."/upload/tickets/";
			            $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|zip|rar';

			            $this->load->library('upload');
			            $this->upload->initialize($config);

			            if($this->upload->do_upload('up_photo')) {
			                $datax = $this->upload->data();
			                $filex = "upload/tickets/".$datax['file_name'];

							$ticket_post = array( "detail_id" => $id_detail,
													"file_detail" => $filex);

							$this->db->insert("ticket_attachments",$ticket_post);
						}
						$message = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' 	aria-label='Close'><span aria-hidden='true'>&times;</span></button> Tiket telah dikirimkan</div>"; 
					}
					else{
						$message = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Terjadi kesalahan sistem</div>"; 
					}
					$this->session->set_flashdata('message', $message);
					redirect("support");
				}
				else{
					$message = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Terjadi kesalahan sistem</div>"; 
					$this->session->set_flashdata('message', $message);
					redirect("support/open_ticket");
				}
		}


		function reply_ticket(){
				//user inputs
				$id_ticket = $this->input->post('id_ticket');
				$message = $this->input->post('message');
				$date = date("Y-m-d H:i:s");

				$reply_data = array("ticket_id" => $id_ticket,
										"user_id" => $this->session->userdata("is_active_id"),
										"date_detail" => $date,
										"message_detail" => $message
									);
				if($this->db->insert("ticket_details", $reply_data)){
					//last id
					$id_detail 	= $this->db->insert_id();
					
					$config['upload_path']          = realpath('./../')."/upload/tickets/";
		            $config['allowed_types']        = 'gif|jpg|png|jpeg|doc|zip|rar';

		            $this->load->library('upload');
		            $this->upload->initialize($config);

		            if($this->upload->do_upload('up_photo')) {
		                $datax = $this->upload->data();
		                $filex = "upload/tickets/".$datax['file_name'];

						$ticket_post = array( "detail_id" => $id_detail,
												"file_detail" => $filex);

						$this->db->insert("ticket_attachments",$ticket_post);
					}

					// mark ticket as Customer Reply
					$mark_ticket 	= array("status_ticket" => 2);
					$this->db->where('id_ticket', $id_ticket);
					$this->db->update("tickets",$mark_ticket);

					$message = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Tiket telah dikirimkan</div>"; 
				}
				else{
					$message = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Terjadi kesalahan sistem</div>"; 	
				}
				$this->session->set_flashdata('message', $message);
				redirect("support");
		}
	}
