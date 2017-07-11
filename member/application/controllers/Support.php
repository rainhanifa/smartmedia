<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Support extends CI_Controller {
		/*var $table = "tickets, departments";*/
 
		public function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('is_logged_in')){
		        redirect('auth/login');
		     }
	        $this->load->model('smartmedia');
	    }

		public function index(){
			$data['ticket'] = $this->db->query('SELECT DISTINCT tickets.id, tickets.id_ticket,  min(tickets.date_ticket) as date_lawas, max(tickets.date_ticket) as date_terbaru, departments.name_department, tickets.subject_ticket, tickets.status_ticket from departments JOIN tickets ON departments.id_department = tickets.department_id group by tickets.id_ticket')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/index.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function new_ticket(){
			$dataz['department'] = $this->db->query('SELECT * FROM departments')->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/new_ticket.php',$dataz);
			$this->load->view('template/footer-member.php');
		}
		public function open_ticket($id_department=0){
			$data['department'] = $this->db->query('SELECT * FROM departments')->result_array();
			$data['departement'] = $id_department;
			if (isset($_POST['submit'])){


				$category = $this->input->post('department_id');
				$tags = $this->input->post('priority');
				$subject = $this->input->post('subject');
				$sites = $this->input->post('sites');
				$content = $this->input->post('content');
				$date = date("Y-m-d");
				
	            $config['upload_path']          = realpath('./../')."/upload/tickets/";
	            $config['allowed_types']        = 'gif|jpg|png|jpeg';
	            
	            $this->load->library('upload');

	            $this->upload->initialize($config);


	            if($this->upload->do_upload('up_photo')) {
	                $datax = $this->upload->data();
	                $foto_k = "upload/tickets/".$datax['file_name'];
	                $alert_foto = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload foto profil berhasil!</strong></div>";
					$this->session->set_flashdata('alert_foto', $alert_foto);
	            }
	            else{
	            	/*echo $this->upload->display_errors('<p>', '</p>');*/
	            	$alert_foto = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload foto profil gagal!</strong>mohon lakukan update foto</div>";
					$this->session->set_flashdata('alert_foto', $alert_foto);
	            }

				$ticket_post = array( "department_id" => $category,
										"id_ticket" => "id_ticket"+1,
										"priority" => $tags,
										"subject_ticket" => $subject,
										"sites" => $sites,
										"description" => $content,
										"date_ticket" => $date,
										"status_ticket" => "unsolved",
										"photo" => $foto_k
									);
				$this->db->insert("tickets",$ticket_post);
				// var_dump($ticket_post);
				// die();
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menyimpan</strong>
                </div>');

                redirect('Support/');
			}

			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/open_ticket.php',$data);
			$this->load->view('template/footer-member.php');
		}
		public function detail($id = 0){
			$data['ticket'] = $this->db->query('SELECT * FROM tickets WHERE id = '.$id)->result_array();
			$this->load->view('template/header-member.php');
			$this->load->view('template/navbar-member.php');
			$this->load->view('support/detail_ticket.php',$data);
			$this->load->view('template/footer-member.php'); 
		}
	}
