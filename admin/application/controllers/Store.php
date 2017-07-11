<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Store extends CI_Controller {
		var $table = "theme";

		public function index(){
			//redirect to package

			
			
		}
		public function package_detail(){
			//detail
		}
		public function package_add(){
			// add page	

		}
		public function package_update(){
			// update page
		}
		public function package_delete(){
			// delete
		}
		public function voucher_detail(){
			//detail
		}
		public function voucher_add(){
			// add page	
		}
		public function voucher_update(){
			// update page
		}
		public function voucher_delete(){
			// delete
		}
		public function theme_detail(){
			$data['theme'] = $this->db->query('SELECT * FROM theme')->result_array();

			//detail
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('store/theme.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function theme_add(){
			// add page	
			$data['theme'] = $this->db->query('SELECT * FROM theme')->result_array();
			if (isset($_POST['submit'])){
				$name = $this->input->post('name');
				$description = $this->input->post('description');
				$preview1 = $this->input->post('preview1');
				$preview2 = $this->input->post('preview2');
				$preview3 = $this->input->post('preview3');
				$file = $this->input->post('file');
				

				$theme_post = array("name_theme" => $name, 
											"description_theme" => $description,
											"preview_1" => $preview1, 							
											"preview_2" => $preview2,
											"preview_3" => $preview3,
											"file_theme" => $file,);
				if($this->db->insert("theme",$theme_post)){
					$this->session->set_flashdata("warning", '
	                <div class="alert alert-success">
	                    <button class="close" data-dismiss="alert">×</button>
	                    <strong>Berhasil menyimpan</strong>
	                </div>');
				}else{
					$this->session->set_flashdata("warning", '
	                <div class="alert alert-danger">
	                    <button class="close" data-dismiss="alert">×</button>
	                    <strong>Error</strong>
	                </div>');
				}


            	redirect('store/theme_detail');    
			}

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('store/theme_create.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function theme_update($id_theme = 0){
			// update page
			$data['theme'] = $this->db->query('SELECT * FROM theme')->result_array();
			if (isset($_POST['submit'])){
				$name = $this->input->post('name');
				$id_theme = $this->input->post('id_theme');
				$description = $this->input->post('description');
				$preview1 = $this->input->post('preview1');
				$preview2 = $this->input->post('preview2');
				$preview3 = $this->input->post('preview3');
				$file = $this->input->post('file');

				$theme_post = array("name_theme" => $name, 
											"description_theme" => $description,
											"preview_1" => $preview1, 							
											"preview_2" => $preview2,
											"preview_3" => $preview3,
											"file_theme" => $file,);
				$this->db->where('id_theme', $id_theme);
				if($this->db->update("theme",$theme_post)){
					$this->session->set_flashdata("warning", '
	                <div class="alert alert-success">
	                    <button class="close" data-dismiss="alert">×</button>
	                    <strong>Berhasil Mengupdate</strong>
	                </div>');
				}else{
					$this->session->set_flashdata("warning", '
	                <div class="alert alert-danger">
	                    <button class="close" data-dismiss="alert">×</button>
	                    <strong>Error</strong>
	                </div>');
				}
				
            	redirect('store/theme_detail');    
			}


			$data['theme'] = $this->db->query("SELECT * FROM theme WHERE id_theme = ".$id_theme)->result();

			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('store/theme_update.php', $data);
			$this->load->view('template/footer-admin.php');
		}
		public function theme_delete($id_theme = 0){
			// delete
			$this->db->where('id_theme', $id_theme);
			if ( $this->db->delete("theme")){
				$this->session->set_flashdata("warning", '
                <div class="alert alert-success">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Berhasil Menghapus</strong>
                </div>');
			}else{
				$this->session->set_flashdata("warning", '
                <div class="alert alert-danger">
                    <button class="close" data-dismiss="alert">×</button>
                    <strong>Error</strong>
                </div>');
			}

			redirect('store/theme_detail'); 
		}
		
	}
