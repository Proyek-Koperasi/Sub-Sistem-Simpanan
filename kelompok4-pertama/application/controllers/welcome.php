<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct(){
			parent::__construct();
			$this->load->library('session');
			$this->load->helper(array('url','form'));
			$this->load->model('user_model','',TRUE);
			$this->load->model('model_notifikasi','',TRUE);

			if ($this->session->userdata('username') == "") {
	            redirect('/login/');
	        }
	}

	public function index()
	{
        $this->load->view('layout/header');
		$this->load->view('halaman_utama');
        $this->load->view('layout/footer');
	}

	public function profil_o()
	{
		$this->load->view('layout/header');
		$query['organisasi'] = $this->user_model->view_organisasi_s()->result();
		$this->load->view('profil_o',$query);
		$this->load->view('layout/footer');
	}

	public function profil_p()
	{
		$this->load->view('layout/header');
		$query['pimpinan_polinema'] = $this->user_model->view_p_polinema_s()->result();
		$this->load->view('profil_p',$query);
		$this->load->view('layout/footer');
	}
	
	public function insert_user()
	{
        $this->load->view('layout/header');
		$this->load->view('insert_user');
        $this->load->view('layout/footer');
	}
	public function tambah_user()
	{
        $this->load->view('layout/header');
		$this->load->view('tambah_user');
        $this->load->view('layout/footer');
	}
	function proses_add_user()
		{
			if(isset($_POST['ok'])){
				$this->user_model->insert_user();
				redirect(base_url().'welcome/data_add_user');
			}
			// if ($data->level('lt')|| $data->level('organisasi')) {
			// 	$this->load->view('insert_organisasi',$data);
			// }
			// else{
			// 	$this->load->view('insert_p_polinema',$data);
			// }
			
		}

	public function data_add_user()
	{
        $this->load->view('layout/header');
		$query['user'] = $this->user_model->view_user()->result();
		$this->load->view('data_add_user',$query);
        $this->load->view('layout/footer');
	}

	public function insert_organisasi()
	{
        $this->load->view('layout/header');
		$this->load->view('insert_organisasi');
        $this->load->view('layout/footer');
	}
	public function insert_p_polinema()
	{
        $this->load->view('layout/header');
		$this->load->view('insert_p_polinema');
        $this->load->view('layout/footer');
	}	
	public function data_user()
	{
        $this->load->view('layout/header');
		$this->load->view('data_user');
        $this->load->view('layout/footer');
	}
	public function lihat_data_organisasi()
	{
        $this->load->view('layout/header');
		$query['organisasi'] = $this->user_model->view_organisasi()->result();
		$this->load->view('lihat_data_organisasi',$query);
        $this->load->view('layout/footer');
	}
	public function lihat_data_p_polinema()
	{
        $this->load->view('layout/header');
		$query['pimpinan_polinema'] = $this->user_model->view_p_polinema()->result();
		$this->load->view('lihat_data_p_polinema',$query);
        $this->load->view('layout/footer');
	}
	public function organisasi()
	{
        $this->load->view('layout/header');
		$query['organisasi'] = $this->user_model->view_organisasi()->result();
		$this->load->view('organisasi',$query);
        $this->load->view('layout/footer');
	}
	public function p_polinema()
	{
        $this->load->view('layout/header');
		$query['pimpinan_polinema'] = $this->user_model->view_p_polinema()->result();
		$this->load->view('p_polinema',$query);
        $this->load->view('layout/footer');
	}
	public function update_organisasi($id_organisasi)
		{
			$this->load->view('layout/header');
			$data['organisasi'] = $this->user_model->get_detail_o($id_organisasi)->row();
			$this->load->view('update_organisasi', $data);
	        $this->load->view('layout/footer');
		}
	public function proses_update_o()
	{
			$id_organisasi['id_organisasi'] = $this->input->post('id_organisasi');
			
			$data = array(
				'id_user_o' 		=> $this->input->post('id_user_o'),
				'no_induk_pejabat' 	=> $this->input->post('no_induk_pejabat'),
				'nama_org' 			=> $this->input->post('nama_org'),
				'jabatan_org' 		=> $this->input->post('jabatan_org'),
				'nama_pejabat_org' 	=> $this->input->post('nama_pejabat_org'),
				'email_org' 		=> $this->input->post('email_org'),
				'level' 			=> $this->input->post('level'),
				'id_pimpinan_o' 	=> $this->input->post('id_pimpinan_o'),
				'logo_' 			=> $this->input->post('logo_')
				 );
			$this->user_model->update_o($data,$id_organisasi);
			// echo var_dump($data); die();

			redirect('welcome/lihat_data_organisasi','refresh');
	}
	public function update_p_pimpinan($id_pimpinan)
		{
			$this->load->view('layout/header');
			$data['pimpinan_polinema'] = $this->user_model->get_detail_p($id_pimpinan)->row();
			$this->load->view('update_p_pimpinan', $data);
	        $this->load->view('layout/footer');
		}
	public function proses_update_p()
	{
			$id_pimpinan['id_pimpinan'] = $this->input->post('id_pimpinan');
			
			$data = array(
				'id_user_p' 		=> $this->input->post('id_user_p'),
				'nip_pimpinan' 		=> $this->input->post('nip_pimpinan'),
				'nama_pimpinan' 	=> $this->input->post('nama_pimpinan'),
				'jabatan_pimpinan' 	=> $this->input->post('jabatan_pimpinan'),
				'email_pimpinan' 	=> $this->input->post('email_pimpinan')
				 );
			$this->user_model->update_p($data,$id_pimpinan);
			// echo var_dump($data); die();

			redirect('welcome/lihat_data_p_polinema','refresh');
	}

	public function notifikasi()
	{
		$this->load->view('notifikasi');
	}
	public function formpesan()
	{
		$this->load->view('layout/header');
		$this->load->view('formpesan');
		$this->load->view('layout/footer');
	}
	public function kirimpesan()
	{
		$this->load->model('model_notifikasi');
		if(isset($_POST['ok'])){
			$this->model_notifikasi->insert_pesan();
			redirect(base_url().'arsip/lihat_surat_keluar');
		}
		$this->load->view('formpesan',$data);	
	}
	public function formpesan_p()
	{
		$this->load->view('layout/header');
		$this->load->view('formpesan_p');
		$this->load->view('layout/footer');
	}
	public function kirimpesan_p()
	{
		$this->load->model('model_notifikasi');
		if(isset($_POST['ok'])){
			$this->model_notifikasi->insert_psn();
			redirect(base_url().'arsip/draft_masuk');
		}
		$this->load->view('formpesan_p',$data);	
	}
	public function pesan()
	{
		$this->load->view('layout/header');
		$this->load->view('pesan');
		$this->load->view('layout/footer');
	}
	public function pesan_p()
	{
		$this->load->view('layout/header');
		$this->load->view('pesan_p');
		$this->load->view('layout/footer');
	}
	public function pesan_u()
	{
		$this->load->view('layout/header');
		$this->load->view('pesan_u');
		$this->load->view('layout/footer');
	}
	public function lihatpesan()
	{
		$this->load->view('lihatpesan');
	}
	// public function lihatpesan_p()
	// {
	// 	$this->load->view('lihatpesan_p');
	// }
	public function cekpesan()
	{
		$this->load->view('cekpesan');
	}
	public function pesan_umum()
	{
		$this->load->view('layout/header');
		$this->load->view('pesan_umum');
		$this->load->view('layout/footer');
	}
	public function kirimpesan_u()
	{
		$this->load->model('model_notifikasi');
		if(isset($_POST['ok'])){
			$this->model_notifikasi->insert_psn_u();
			redirect(base_url().'welcome/pesan_keluar');
		}
		$this->load->view('formpesan_u',$data);	
	}
	public function pesan_keluar()
	{
		$this->load->view('layout/header');
		$this->load->view('pesan_keluar');
		$this->load->view('layout/footer');
	}
	public function pesan_masuk()
	{
		$this->load->view('layout/header');
		$this->load->view('pesan_masuk');
		$this->load->view('layout/footer');
	}
	// public function lihatpesan_u()
	// {
	// 	$this->load->view('lihatpesan_u');
	// }
	// public function cekpesan_p()
	// {
	// 	$this->load->view('cekpesan_p');
	// }
}