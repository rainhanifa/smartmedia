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
			$data['departments'] = $this->db->query('SELECT * FROM departments')->result_array();
			
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('support/departments.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail ticket
		}
		public function add(){
			if (isset($_POST['submit'])){
				$name = $this->input->post('name');
				$desc = $this->input->post('desc');

				$department_post = array( "name_department" => $name,
										"description_department" => $desc
									);
				$this->db->insert("departments",$department_post);

				$this->session->set_flashdata("warning", '
		            <div class="alert alert-success">
		                <button class="close" data-dismiss="alert">×</button>
		                <strong>Berhasil menambahkan</strong>
		            </div>');

		        redirect('Support/');
	        }
		}
		
		public function update(){
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
				
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil mengupdate !</strong>
                </div>');

                redirect('Support/');
            }
            
			$data['departments'] = $this->db->query("SELECT * FROM departments WHERE id_department = ".$id_department)->result();
		}

		public function delete(){
			$id_department = $_GET['id'];
			$this->db->where('id_department', $id_department);
			if($this->db->delete("departments")){
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menghapus!</strong>
                </div>');
			}else{
				$this->session->set_flashdata("warning", '
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
		public function ticket($id=0){
			$data['ticket'] = $this->db->query('SELECT tickets.id, tickets.id_ticket,  min(tickets.date_ticket) as open_date, max(tickets.date_ticket) as latest_date, departments.name_department, tickets.subject_ticket, tickets.status_ticket from departments JOIN tickets ON departments.id_department = tickets.department_id group by tickets.id_ticket')->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('support/tickets.php', $data);
			$this->load->view('template/footer-admin.php');
		}

		public function detail_ticket($id = 0){
			$data['ticket'] = $this->db->query('SELECT * FROM tickets WHERE id = '.$id)->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('support/detail_ticket.php',$data);
			$this->load->view('template/footer-admin.php');
		}

		public function open_ticket(){
			
		}
		public function close_ticket(){
			//action close
		}
		public function delete_ticket(){
			//action delete
		}
	}
