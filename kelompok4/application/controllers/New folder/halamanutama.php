<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class Halamanutama extends CI_Controller{
		function __construct(){
			parent::__construct();
			$this->load->helper(array('url','form'));
			$this->load->model('user_model','',TRUE);
		}

		function index(){
			$this->load->view('halaman_utama');
		}

		// ini ada dropdown nya
		// function input_surat_pinjam()
		// {
		// 	$this->load->view('input_surat_pinjam');
		// }
		function buat_surat()
		{
			$this->load->view('buat_surat');
		}	
		function insert_user()
		{
			$this->load->view('insert_user');
		}
		function tambah_u_organisasi()
		{
			$this->load->view('tambah_u_organisasi');
		}
		function insert_organisasi()
		{
			$this->load->view('insert_organisasi');
		}
		function tambah_u_pimpinan()
		{
			$this->load->view('tambah_u_pimpinan');
		}
		function insert_p_polinema()
		{
			$this->load->view('insert_p_polinema');
		}	
		function data_user()
		{
			$this->load->view('data_user');
		}
		function lihat_data_organisasi()
		{
			$query['organisasi'] = $this->user_model->view_organisasi()->result();
			$this->load->view('lihat_data_organisasi',$query);
		}
		function lihat_data_p_polinema()
		{
			$query['pimpinan_polinema'] = $this->user_model->view_p_polinema()->result();
			$this->load->view('lihat_data_p_polinema',$query);
		}
	}
?>