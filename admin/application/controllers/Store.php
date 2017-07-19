<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Store extends CI_Controller {
		function __construct() {
	        parent::__construct();
		     if (!$this->session->userdata('admin_logged_in')){
		        redirect('auth/login');
		     }
	    }

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
		public function vouchers(){
			$data['vouchers'] = $this->db->get('vouchers')->result_array();

			//detail
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('store/voucher.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function voucher_add(){
			// add page	
			if(isset($_POST['submit'])){
				$code	=	$this->input->post('code');
				$name	=	$this->input->post('name');
				$price	=	$this->input->post('price');
				$package=	$this->input->post('package');

				$insert_voucher	= array("code" => $code,
										"name" => $name,
										"price" => $price,
										"id_package"	=> $package
								);
				if($this->db->insert("vouchers", $insert_voucher)){
					$this->session->set_flashdata("message","berhasil");
				}else{
					$this->session->set_flashdata("message","gagal");
				}
				redirect("store/vouchers");
			}
		}
		public function voucher_update(){
			// update page
		}
		public function voucher_delete(){
			// delete
		}
		public function themes(){
			$data['theme'] = $this->db->get('theme')->result_array();

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
        
	            $config['upload_path']          = realpath('./../')."/upload/theme";
	            $config['allowed_types']        = 'gif|jpg|png|jpeg|pdf|docx|zip';

				$this->load->library('upload');
				
				$this->upload->initialize($config);

				if($this->upload->do_upload('preview1')) {
	                $datax = $this->upload->data();
	                $preview1= "upload/theme/".$datax['file_name'];
	                $alert_preview = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload preview theme berhasil!</strong></div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }
	            else{
	            	/*echo $this->upload->display_errors('<p>', '</p>');*/
	            	$alert_preview = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload preview theme gagal!</strong>".var_dump($this->upload->display_errors())."</div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }

	            if($this->upload->do_upload('preview2')) {
	                $datax = $this->upload->data();
	                $preview2 = "upload/theme/".$datax['file_name'];
	                $alert_preview = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload preview theme berhasil!</strong></div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }
	            else{
	            	/*echo $this->upload->display_errors('<p>', '</p>');*/
	            	$alert_preview = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload preview theme gagal!</strong>".var_dump($this->upload->display_errors())."</div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }

	            if($this->upload->do_upload('preview3')) {
	                $datax = $this->upload->data();
	                $preview3 = "upload/theme/".$datax['file_name'];
	                $alert_preview = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload preview theme berhasil!</strong></div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }
	            else{
	            	/*echo $this->upload->display_errors('<p>', '</p>');*/
	            	$alert_preview = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload preview theme gagal!</strong>".var_dump($this->upload->display_errors())."</div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }

	            if($this->upload->do_upload('file')) {
	                $datax = $this->upload->data();
	                $file = "upload/theme/".$datax['file_name'];
	                $alert_preview = "<div class='alert alert-success alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload file berhasil!</strong></div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }
	            else{
	            	/*echo $this->upload->display_errors('<p>', '</p>');*/
	            	$alert_preview = "<div class='alert alert-warning alert-dismissible' role='alert'><button type='button' class='close' data-dismiss='alert' aria-label='Close'><span aria-hidden='true'>&times;</span></button> <strong>Upload file gagal!</strong>".var_dump($this->upload->display_errors())."</div>";
					$this->session->set_flashdata('alert_preview', $alert_preview);
	            }

				$theme_post = array("name_theme" => $name, 
										"description_theme" => $description,
										"preview_1" => $preview1, 							
										"preview_2" => $preview2,
										"preview_3" => $preview3,
										"file_theme" => $file
									);
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
