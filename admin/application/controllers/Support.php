<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {
		var $table = "departments";
 
		public function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('admin_logged_in')){
		        redirect('auth/login');
		     }
	        $this->load->model('smartmedia');
	    }

		public function index(){
			$data['tickets'] = $this->db->query('SELECT * FROM tickets')->result_array();
			$data['departments'] = $this->db->query('SELECT * FROM departments')->result_array();
			
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('support/departments.php', $data);
			$this->load->view('template/footer-admin.php');
		}

		public function department_add(){
			if (isset($_POST['submit'])){
				$name = $this->input->post('name');
				$desc = $this->input->post('desc');

				$department_post = array( "name_department" => $name,
										"description_department" => $desc
									);
				$this->db->insert("departments",$department_post);

				$this->session->set_flashdata("message", '
		            <div class="alert alert-success">
		                <button class="close" data-dismiss="alert">×</button>
		                <strong>Berhasil menambahkan</strong>
		            </div>');

		        redirect('Support/');
	        }
		}
		
		public function department_update(){
			if (isset($_POST['submit'])){	
				$id_department = $this->input->post('id_department');
				$name = $this->input->post('name');
				$desc = $this->input->post('desc');

				$department_update = array( "id_department" => $id_department,
											"name_department" => $name,
											"description_department" => $desc
										);
				$this->db->where('id_department', $id_department);
				$this->db->update("departments",$department_update);
				
				$this->session->set_flashdata("message", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil mengupdate !</strong>
                </div>');

                redirect('Support/');
            }
            
			$data['departments'] = $this->db->query("SELECT * FROM departments WHERE id_department = ".$id_department)->result();
		}

		public function department_delete(){
			$id_department = $_GET['id'];
			$this->db->where('id_department', $id_department);
			if($this->db->delete("departments")){
				$this->session->set_flashdata("message", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menghapus!</strong>
                </div>');
			}else{
				$this->session->set_flashdata("message", '
                <div class="alert alert-error">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Error!</strong>
                </div>');
			}

			redirect('Support/');
		}
		public function get_category_by_id($id_department){

			$department = $this->db->query("SELECT * FROM departments WHERE id_department = ".$id_department)->result_array();
			foreach($department as $a){
				echo '
				<div class="row">
	            	<div class="form-group">
	                	<input type="hidden" name="id_department" value="'.$a['id_department'].'">
	                	<div class="col-sm-12 col-lg-12 controls distance">
	                    	<input type="text" class="form-control" name="name" value="'.$a['name_department'].'">
	                	</div>
	                    <div class="col-sm-12 col-lg-12 controls distance">
	                    	<textarea class="form-control" name="desc">'.$a['description_department'].'</textarea>
	                    </div>
	                </div>
	            </div>';
            }
		}
		public function ticket(){
			$data['tickets']  	= $this->db->select("*")
								->from("tickets AS t")
								->join("departments AS d","t.department_id = d.id_department")
								->group_by("t.id_ticket")
								->get()
								->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('support/tickets.php', $data);
			$this->load->view('template/footer-admin.php');	
		}

		public function ticket_detail($id = 0){
			if($id > 0){
				$where = array("id_ticket" => $id);
				$where2 = array("ticket_id" => $id);

				$data['tickets']  	= $this->db->select("*")->from("tickets AS t")
										->join("departments AS d","t.department_id = d.id_department")
										->join("clients AS c","t.client_id = c.id_client")
										->where($where)->get()->result_array();
				$data['messages'] 	= $this->db->select("*")->from("ticket_details as d")
										->join("app_users AS u", "d.user_id = u.id_users")
										->where($where2)->order_by("date_detail", "DESC")->get()->result_array();

				$this->load->view('template/header-admin.php');
				$this->load->view('template/navbar-admin.php');
				$this->load->view('support/detail_ticket.php',$data);
				$this->load->view('template/footer-admin.php'); 	
			}
			else{
				$this->session->set_flashdata("message", '
                <div class="alert alert-warning">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Please select ticket</strong>
                </div>');
				redirect("support/ticket");
			}
		}



		function reply_ticket(){
				//user inputs
				$id_ticket = $this->input->post('id_ticket');
				$message = $this->input->post('message');
				$date = date("Y-m-d H:i:s");

				$reply_data = array("ticket_id" => $id_ticket,
										"user_id" => $this->session->userdata("admin_active_id"),
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

					// mark ticket as Answered
					$mark_ticket 	= array("status_ticket" => 1);
					$this->db->where('id_ticket', $id_ticket);
					$this->db->update("tickets",$mark_ticket);

					$message = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Reply telah dikirimkan</div>"; 
				}
				else{
					$message = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Terjadi kesalahan sistem</div>"; 	
				}
				$this->session->set_flashdata('message', $message);
				redirect("support/ticket_detail/".$id_ticket);
		}

		public function close_ticket($id_ticket){
			//action close
			$close_ticket = array("status_ticket" => 3,
								"date_close_ticket" => date("Y-m-d"));

			$this->db->where('id_ticket', $id_ticket);
			$this->db->update("tickets",$close_ticket);

			$message = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> Ticket is closed.</div>";
				$this->session->set_flashdata('message', $message);
			redirect("support/ticket_detail/".$id_ticket);
		}
		public function delete_ticket(){
			//action delete
		}
	}
