<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {
		var $table = "departments";
 
		public function __construct() {
	        parent::__construct();
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
				$name = $this->input->post('title');
				$desc = $this->input->post('content');

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
		public function open_ticket(){
			//action open
		}
		public function close_ticket(){
			//action close
		}
		public function delete_ticket(){
			//action delete
		}
	}
