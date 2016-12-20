<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class anggota extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_anggota');
		
	}

	public function index()
	{
		$this->load->view('layout/header');
		$data['get'] = $this->M_anggota->get_all();
		$this->load->view('form_anggota', $data);
		 $this->load->view('layout/footer');
	}

	public function insert(){
		$this->load->view('layout/header');
		if (isset($_POST['ok'])) {
			$in = $this->M_anggota->insert();
			redirect(base_url().'anggota/index','refresh');
		}
		$this->load->view('tambah_anggota');
		$this->load->view('layout/footer');
	}

	public function update($id){
		$this->load->view('layout/header');
		if(isset($_POST['ok'])){
			$in = $this->M_anggota->update($id);
			redirect(base_url().'anggota/index','refresh');
			$this->load->view('layout/footer');
	}

	$data['register']= $this->M_anggota->get_where($id);
	$data['get']= $this->M_anggota->get_id($id);
	$this->load->view('update_anggota', $data);
	
}

	public function delete($id){
		$this->M_anggota->delete($id);
		redirect(base_url().'anggota/index','refresh');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */