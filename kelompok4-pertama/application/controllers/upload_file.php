<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Upload_File extends CI_Controller {
 
 public function __construct()
 {
 parent::__construct();
 $this->load->model('crud_model','crud'); //load model dari crud model dan diberi alias dengan nama crud
 $this->load->library('upload'); //load library upload bisa dilakukan disni atau disimpan di autoload
 
 }
 
public function index()
 {
 $this->load->view('form_upload'); //menampilkan halaman upload
 }
 public function do_upload()
 {
		$config['upload_path'] = "gambar/"; //lokasi folder yang akan digunakan untuk menyimpan file
	 $config['allowed_types'] = 'gif|jpg|png|JPEG'; //extension yang diperbolehkan untuk diupload
	 $config['file_name'] = url_title($this->input->post('file_upload'));
	 
	$this->upload->initialize($config); //meng set config yang sudah di atur
	 if( !$this->upload->do_upload('file_upload'))
	 {
	 
	 echo $this->upload->display_errors();
	 }
	 else{
	 $data = array(
	 
	 'name'=>$this->upload->file_name
	 );
	 $this->crud->insert($data,'images');
	 redirect('upload_file/view');
	 }
 }
 public function view()
 {
 		$data['images'] = $this->crud->show('images');
		 $this->load->view('view_upload',$data);
 }
}

?>