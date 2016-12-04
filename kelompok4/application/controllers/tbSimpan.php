<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class tbSimpan extends CI_Controller {

	public function __construct()
	{
		parent::__construct(); 
		$this->load->model('crud_model','crud'); //load model dari crud model dan diberi alias dengan nama crud
		$this->load->model('M_anggota', '', TRUE);
		$this->load->model('M_jenis_simpan', '', TRUE);	
		$this->load->model('M_tbSimpan', '', TRUE);	
		$this->load->helper(array('form', 'url'));
		$this->load->library('upload'); //load library upload bisa dilakukan disni atau disimpan di autoload
 
	}


	public function index()
	{
		$this->load->view('layout/header');
		$data['anggota'] = $this->M_anggota->get_all();
		$data['get'] = $this->M_tbSimpan->inner_join();
		$this->load->view('form_tbSimpan', $data);

		 $this->load->view('layout/footer');
	
	}

 

	public function insert(){
		$this->load->view('layout/header');
		if (isset($_POST['ok'])) {

			 $in = $this->M_tbSimpan->insert();
			redirect(base_url().'tbSimpan/index','refresh');
			
	 
	 
	 
	 
			
	}
		$data['jenis_simpan']= $this->M_jenis_simpan->get_all();
		$data['anggota']= $this->M_anggota->get_all();
		$this->load->view('tambah_tbSimpan',$data);
		$this->load->view('layout/footer');
	}

	public function update($id){
		$this->load->view('layout/header');
		if(isset($_POST['ok'])){
			$in = $this->M_tbSimpan->update($id);
			redirect(base_url().'tbSimpan/index','refresh');
			$this->load->view('layout/footer');
	}

	// $this->load->view('navbar_admin');
	$data['tbSimpanan']= $this->M_tbSimpan->get_all();
	$data['get']= $this->M_tbSimpan->get_id($id);
	$data['jenis_simpan']= $this->M_jenis_simpan->get_all();
	$data['anggota']= $this->M_anggota->get_all();
	$this->load->view('update_tbSimpan', $data);
	 $this->load->view('footer_admin');
}

	public function delete($id){
		$this->M_tbSimpan->delete($id);
		redirect(base_url().'tbSimpan/index','refresh');
	}

	public function inner_join(){
		$join= $this->M_tbSimpan->inner_join();
		print_r($join);
	}

	public function print_trans($id)
		{
			// $model = new M_tbSimpan();
			// $tbSimpan = $model->find_one($_GET['id']);

			$data['trans'] = $this->M_tbSimpan->get_trans($id);



			// Load view “pdf_report” untuk menampilkan hasilnya
			$this->load->view('cetak_transaksi', $data);
		}

	public function view()
 {
 		$data['tbSimpan'] = $this->crud->show('tbSimpan');
		 $this->load->view('form_tbSimpan',$data);
 }

}


/* End of file siswa.php */
/* Location: ./application/controllers/siswa.php */