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
			redirect("store/packages");
			
		}
		public function packages(){
			$data['packages'] = $this->db->get('packages')->result_array();

			//detail
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('store/package.php',$data);
			$this->load->view('template/footer-admin.php');
		}
		public function package_add(){
			if(isset($_POST['submit'])){
				$name	=	$this->input->post('name');
				$detail	=	$this->input->post('detail');
				$price	=	$this->input->post('price');
				$active	=	$this->input->post('active');
				$domain	=	$this->input->post('domain');
				$email	=	$this->input->post('email');
				$bandwidth	=	$this->input->post('bandwidth');
				$storage	=	$this->input->post('storage');
				$category =	$this->input->post('category');

				$insert_package	= array("name_package" => $name,
										"detail_package" => $detail,
										"price_package" => $price,
										"active_period"	=> $active,
										"domain" => $domain,
										"email" => $email,
										"bandwidth" => $bandwidth,
										"storage" => $storage,
										"category_package" => $category,
								);
				if($this->db->insert("packages", $insert_package)){
					$this->session->set_flashdata("message","Berhasil menambahkan paket!");
				}else{
					$this->session->set_flashdata("message","Gagal menambahkan paket!");
				}
				redirect("store/packages");
			}
		}
		public function package_update(){
			$id	=	$this->input->post('id');
			$name	=	$this->input->post('name');
			$detail	=	$this->input->post('detail');
			$price	=	$this->input->post('price');
			$active	=	$this->input->post('active');
			$domain	=	$this->input->post('domain');
			$email	=	$this->input->post('email');
			$bandwidth	=	$this->input->post('bandwidth');
			$storage	=	$this->input->post('storage');
			$category =	$this->input->post('category');

			$update_package	= array("name_package" => $name,
									"detail_package" => $detail,
									"price_package" => $price,
									"active_period"	=> $active,
									"domain" => $domain,
									"email" => $email,
									"bandwidth" => $bandwidth,
									"storage" => $storage,
									"category_package" => $category,
							);
			$this->db->where('id_package', $id);
			if($this->db->update("packages",$update_package)){
				$this->session->set_flashdata("message", 'Berhasil mengupdate package!');
			}else{
				$this->session->set_flashdata("message", 'Error! '.$this->db->error());
			}
			redirect("store/packages");
		}
		public function package_delete($id){
			$this->db->where('id_package', $id);
			if($this->db->delete("packages")){
				$this->session->set_flashdata("message", 'Berhasil menghapus packages!');
			}else{
				$this->session->set_flashdata("message", 'Error! '.$this->db->error());
			}
			redirect("store/packages");
		}

		public function get_package_by_id($id_package){
			$package	=	$this->db->query('SELECT * FROM packages WHERE id_package ='.$id_package)->result_array();

			foreach($package as $p){
			echo '<div class="row"><div class="form-group">
                        <div class="col-sm-12 col-lg-12 controls">
                        	<input type="hidden" name="id" value="'.$p['id_package'].'">
                            <span class="m_25"><label>Package Name</label></span>
                            <input type="text" name="name" id="package_name" class="form-control" value="'.$p['name_package'].'">
                        </div>
                        <div class="col-sm-12 col-lg-12 controls">
                            <span class="m_25"><label>Package Detail</label></span>
                            <textarea name="detail" class="form-control">'.$p['detail_package'].'</textarea>
                        </div>
                        <div class="col-sm-12 col-lg-12 controls">
                            <span class="m_25"><label>Package Price</label></span>
                                <div class="input-group">
                                    <div class="input-group-addon"> Rp </div>
                                    <input type="number" name="price" id="package_price" class="form-control" value="'.$p['price_package'].'">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-12 controls">
                            <span class="m_25"><label>Category</label></span>
                            <select name="category" class="form-control">
                                <option value="0" '.(($p['category_package'] == 0) ? 'selected' : '').'>Quota</option>
                                <option value="1" '.(($p['category_package'] == 1) ? 'selected' : '').'>Extension</option>
                                <option value="2" '.(($p['category_package'] == 2) ? 'selected' : '').'>Starter</option>
                            </select>
                        </div>
                        <div class="col-sm-12 col-lg-12 controls">
                            <span class="m_25"><label>Active Period</label></span>
                            <div class="input-group">
                                <input type="number" name="active" class="form-control"  value="'.$p['active_period'].'">
                                <div class="input-group-addon"> days </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-6 controls">
                            <span class="m_25"><label>Domain</label></span>
                            <input type="number" name="domain" class="form-control" value="'.$p['domain'].'">
                        </div>
                        <div class="col-sm-6 col-lg-6 controls">
                            <span class="m_25"><label>Email</label></span>
                            <input type="number" name="email" class="form-control" value="'.$p['email'].'">
                        </div>
                        <div class="col-sm-6 col-lg-6 controls">
                            <span class="m_25"><label>Bandwidth</label></span>
                            <input type="number" name="bandwidth" class="form-control"  value="'.$p['bandwidth'].'">
                        </div>
                        <div class="col-sm-6 col-lg-6 controls">
                            <span class="m_25"><label>Storage</label></span>
                            <div class="input-group">
                                <input type="number" name="storage" class="form-control" value="'.$p['storage'].'">
                                <div class="input-group-addon"> MB </div>
                            </div>
                        </div>';
            }
		}

		public function vouchers(){
			$data['vouchers'] = $this->db->select("*")->from("vouchers")->join("packages", "vouchers.id_package = packages.id_package")
								->order_by("status")->get()->result_array();
			$data['packages']  =	$this->db->get('packages')->result_array();

			//detail
			$this->load->view('template/header-admin.php');
			$this->load->view('template/navbar-admin.php');
			$this->load->view('store/voucher.php',$data);
			$this->load->view('template/footer-admin.php');
		}

		public function get_voucher_by_id($id_voucher){
			$voucher	=	$this->db->query('SELECT * FROM vouchers WHERE id_voucher ='.$id_voucher)->result_array();
			$package	=	$this->db->get('packages')->result_array();

			foreach($voucher as $v){
				echo '<div class="row">
                <div class="form-group">
                    <div class="col-sm-12 col-lg-12 controls">
                        <span class="m_25"><label>Voucher Code</label></span>
                        <input type="hidden" name="id" value="'.$v['id_voucher'].'">
                        <input type="text" name="code" id="voucher_code" class="form-control" value="'.$v['code'].'">
                    </div>

                    <div class="col-sm-12 col-lg-12 controls">
                        <span class="m_25"><label>Voucher Name</label></span>
                        <input type="text" name="voucher_name" id="voucher_name" class="form-control value="'.$v['name'].'">
                    </div>

                    <div class="col-sm-12 col-lg-12 controls">
                        <span class="m_25"><label>Voucher Price</label></span>
                            <div class="input-group">
                                <div class="input-group-addon"> Rp </div>
                                <input type="number" name="price" id="voucher_price" class="form-control" value="'.$v['price'].'">
                            </div>
                    </div>

                    <div class="col-sm-12 col-lg-12 controls">
                        <span class="m_25"><label>Package</label></span>
                        <select name="package" class="form-control">';
                foreach($package as $p){
                	echo '<option value="'.$p['id_package'].'"'.(($v['id_package'] == $p['id_package'])?' selected ':'').'>'.$p['name_package'].'</option>';
                }
				echo '</select>
                    </div>
                </div>
            	</div>';
            }
            exit;
		}
		public function voucher_add(){
			if(isset($_POST['submit'])){
				$code	=	$this->input->post('code');
				$name	=	$this->input->post('voucher_name');
				$price	=	$this->input->post('price');
				$package=	$this->input->post('package');

				$insert_voucher	= array("code" => $code,
										"name" => $name,
										"price" => $price,
										"id_package"	=> $package
								);
				if($this->db->insert("vouchers", $insert_voucher)){
					$this->session->set_flashdata("message","Berhasil menambahkan voucher!");
				}else{
					$this->session->set_flashdata("message","Gagal menambahkan voucher!");
				}
				redirect("store/vouchers");
			}
		}
		public function voucher_update(){
			$id 	=	$this->input->post('id');
			$code	=	$this->input->post('code');
			$name	=	$this->input->post('voucher_name');
			$price	=	$this->input->post('price');
			$package=	$this->input->post('package');

			$update_voucher	= array("code" => $code,
									"name" => $name,
									"price" => $price,
									"id_package"	=> $package
							);
			$this->db->where('id_voucher', $id);
			if($this->db->update("vouchers",$update_voucher)){
				$this->session->set_flashdata("message", 'Berhasil mengupdate voucher!');
			}else{
				$this->session->set_flashdata("message", 'Error! '.$this->db->error());
			}
			redirect("store/vouchers");
		}
		public function voucher_delete($id){
			$this->db->where('id_voucher', $id);
			if($this->db->delete("vouchers")){
				$this->session->set_flashdata("message", 'Berhasil menghapus voucher!');
			}else{
				$this->session->set_flashdata("message", 'Error! '.$this->db->error());
			}
			redirect("store/vouchers");
		}
		public function themes(){
			$data['theme'] = $this->db->get('theme')->result_array();

			//detail\
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
