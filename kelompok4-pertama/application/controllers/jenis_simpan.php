<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class jenis_simpan extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jenis_simpan');
		
	}

	public function index()
	{
		$this->load->view('layout/header');
		$data['get'] = $this->M_jenis_simpan->get_all();
		$this->load->view('form_jenis_simpan', $data);
		 $this->load->view('layout/footer');
	}

	public function insert(){
		$this->load->view('layout/header');
		if (isset($_POST['ok'])) {
			$in = $this->M_jenis_simpan->insert();
			redirect(base_url().'jenis_simpan/index','refresh');
		}
		$this->load->view('tambah_jenis_simpan');
		$this->load->view('layout/footer');
	}

	public function update($id){
		$this->load->view('layout/header');
		if(isset($_POST['ok'])){
			$in = $this->M_jenis_simpan->update($id);
			redirect(base_url().'jenis_simpan/index','refresh');
			$this->load->view('layout/footer');
	}

	$data['register']= $this->M_jenis_simpan->get_where($id);
	$data['get']= $this->M_jenis_simpan->get_id($id);
	$this->load->view('update_jenis_simpan', $data);
	
}

	public function delete($id){
		$this->M_jenis_simpan->delete($id);
		redirect(base_url().'jenis_simpan/index','refresh');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */