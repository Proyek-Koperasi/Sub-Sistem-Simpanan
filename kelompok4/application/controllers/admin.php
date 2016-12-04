<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_admin');
		
	}

	public function index()
	{
		
		$this->load->view('layout/header');
		$data['get'] = $this->M_admin->get_all();
		$this->load->view('form_register', $data);
		 $this->load->view('layout/footer');
		
		
			
	}

	public function insert(){
		$this->load->view('layout/header');
		if (isset($_POST['ok'])) {
			$in = $this->M_admin->insert();
			redirect(base_url().'admin/index','refresh');
		}
		$this->load->view('tambah_admin');
		 $this->load->view('layout/footer');
	}

	public function update($id){
		$this->load->view('layout/header');
		if(isset($_POST['ok'])){
			$in = $this->M_admin->update($id);
			redirect(base_url().'admin/index','refresh');
			 $this->load->view('layout/footer');
	}

	$data['register']= $this->M_admin->get_where($id);
	$data['get']= $this->M_admin->get_id($id);
	$this->load->view('update_admin', $data);
	
}

	public function delete($id){
		$this->M_admin->delete($id);
		redirect(base_url().'admin/index','refresh');
	}

}

/* End of file controllername.php */
/* Location: ./application/controllers/controllername.php */