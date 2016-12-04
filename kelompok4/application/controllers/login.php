<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Login extends CI_Controller{
		public function __construct(){
		parent::__construct();
			$this->load->database();
			$this->load->helper(array('url','form'));
			$this->load->model('user_model',TRUE);
			// $this->load->helper(array('form', 'url'));
			// $this->load->library('session');
		}
		public function index(){
			$this->load->model('user_model');

				$data['view']=" ";

				if(isset($_POST['ok'])){
					$cek=$this->user_model->login_user();
					if($cek){
						$data=array(
							'id_admin'	=> $cek->id_admin,
							'username'	=> $cek->username,
							'password'	=> $cek->password,
						
							// 'level'		=> "lt"
						);
						// Berfungsi untuk menyimpan user data
						$this->session->set_userdata($data);
						// $user = $this->session->userdata('username');
						redirect(base_url().'');
					}
					else{
						$data['error']="Username/Password Salah!";
						//$this->load->view('login',$data);
					}
				}
				

			$this->load->view('login',$data);
		}


		public function logout(){
			// $this->session->unset_userdata('id_user');
	  //       $this->session->unset_userdata('username');
	  //       $this->session->unset_userdata('password');
	  //       $this->session->unset_userdata('level');
	  //       session_destroy();
			$this->session->sess_destroy();
			redirect(base_url().'login');
		}

		public function proses_organisasi()
		{
			$this->load->model('user_model');

			// if ($this->input->post('logo_')) {
			// 	$config = array(
			// 		'allowed_types' => 'jpg|jpeg|png',
			// 		'upload_path'	=> $this->gallery_path,
			// 		'max_size'		=> 2000,
			// 		'file_name'		=> url_title($this->input->post('file_upload')) 
			// 	);
			// 	$this->load->library('upload', $config);
			// 	$this->upload->do_upload();
			// }
			if(isset($_POST['ok'])){
				$this->user_model->insert_organisasi();
				redirect(base_url().'welcome/lihat_data_organisasi');
			}

			$this->load->view('welcome/lihat_data_organisasi',$data);	
		}
		public function proses_pimpinan()
		{
			$this->load->model('user_model');

			if(isset($_POST['ok'])){
				$this->user_model->insert_pimpinan();
				redirect(base_url().'welcome/lihat_data_p_polinema');
			}

			$this->load->view('welcome/lihat_data_p_pimpinan',$data);	
		}
	}

?>