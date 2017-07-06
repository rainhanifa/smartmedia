<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Announcement extends CI_Controller {

		var $table = "announcements";
 
		public function __construct() {
	        parent::__construct();
	        $this->load->model('smartmedia');
	    }

		public function index(){
			$data['announcement'] = $this->db->query('SELECT * FROM announcements')->result_array();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function detail(){
			//detail
		}
		public function add(){
			if (isset($_POST['submit'])){
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$date = date("Y-m-d");

				$announcement_post = array( "title_announcement" => $title,
											"content_announcement" => $content,
											"date_announcement" => $date
										);
				$this->db->insert("announcements",$announcement_post);

				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil menyimpan</strong>
                </div>');

                redirect('Announcement/');
			}

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement_create.php');
			$this->load->view('template/footer-admin.php');
		}
		public function update($id_announcement = 0){
			if (isset($_POST['submit'])){
				$id_announcement = $this->input->post('id_announcement');
				$title = $this->input->post('title');
				$content = $this->input->post('content');
				$date = date("Y-m-d");

				$announcement_update = array( "title_announcement" => $title,
											"content_announcement" => $content,
											"date_announcement" => $date
										);
				$this->db->where('id_announcement', $id_announcement);
				$this->db->update("announcements",$announcement_update);
				
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil mengupdate !</strong>
                </div>');

                redirect('Announcement/');
            }

			$data['announcement'] = $this->db->query("SELECT * FROM announcements WHERE id_announcement = ".$id_announcement)->result();
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('announcement/announcement_update.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function delete($id_announcement = 0){
			$this->db->where('id_announcement', $id_announcement);
			if($this->db->delete("announcements")){
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

			redirect('Announcement/');
		}
	}
