<?php

	class User_model extends CI_Model{

		// public function __construct(){
		// 	parent::__construct();
		// 	$this->load->database();
		// }
		
		public function login_user(){
			$username	=$this->input->post('username');
			$password 	=$this->input->post('password');

			$sql=$this->db->query("SELECT * FROM admin WHERE username='$username' AND password='$password' ");

			if ($sql) {
				return $sql->first_row();
			}
		}

		// public function insert_user()
		// {
		// 	$data = array(
		// 		'id_admin'		=> 'NULL',
		// 		'username' 		=> $this->input->post('username'),
		// 		'password' 		=> $this->input->post('password'),
		// 		'status'  		=> $this->input->post('status')    
		// 		);
		// 	$simpan=$this->db->insert('admin', $data);
		// 	return $simpan;
		// }

		// public function view_user(){
		// 	$query=$this->db->query('SELECT * FROM admin ORDER BY id_admin DESC LIMIT 1');
		// 	return $query;
		// }

		// public function insert_organisasi()
		// {
			
		// 	$data = array(
		// 		'id_organisasi'		=> 'NULL',
		// 		'id_user_o' 		=> $this->input->post('id_user_o'),
		// 		'no_induk_pejabat' 	=> $this->input->post('no_induk_pejabat'),
		// 		'nama_org' 			=> $this->input->post('nama_org'),
		// 		'jabatan_org' 		=> $this->input->post('jabatan_org'),
		// 		'nama_pejabat_org' 	=> $this->input->post('nama_pejabat_org'),
		// 		'email_org' 		=> $this->input->post('email_org'),
		// 		'level' 			=> $this->input->post('level'),
		// 		'id_pimpinan_o' 	=> $this->input->post('id_pimpinan_o'),
		// 		'logo_' 			=> $this->input->post('logo_'),
		// 		);
		// 	$simpan=$this->db->insert('organisasi', $data);
		// 	return $simpan;
		// }

		// public function insert_pimpinan()
		// {
		// 	$data = array(
		// 		'id_pimpinan'		=> 'NULL',
		// 		'id_user_p' 		=> $this->input->post('id_user_p'),
		// 		'nip_pimpinan' 		=> $this->input->post('nip_pimpinan'),
		// 		'nama_pimpinan' 	=> $this->input->post('nama_pimpinan'),
		// 		'jabatan_pimpinan' 	=> $this->input->post('jabatan_pimpinan'),
		// 		'email_pimpinan' 	=> $this->input->post('email_pimpinan')
		// 		);
		// 	$simpan=$this->db->insert('pimpinan_polinema', $data);
		// 	return $simpan;
		// }

		// public function view_organisasi_s()
		// {
		// 	$userid=$this->session->userdata('id_user');
		// 	$id=$this->db->where('id_user_o', $userid);
		// 	// $query=$this->db->get('organisasi');
		// 	$this->db->select('*');
		// 	$this->db->from('organisasi AS A');
		// 	$this->db->join('user AS B', 'A.id_user_o = B.id_user', 'INNER');			
		// 	$this->db->join('pimpinan_polinema AS C', 'A.id_pimpinan_o = C.id_pimpinan', 'INNER');
		// 	$query = $this->db->get();
		// 	return $query;
		// }

		// public function view_p_polinema_s()
		// {
		// 	$userid=$this->session->userdata('id_user');
		// 	$id=$this->db->where('id_user_p', $userid);
		// 	// $query=$this->db->get('pimpinan_polinema');
		// 	$this->db->select('*');
		// 	$this->db->from('pimpinan_polinema AS A');
		// 	$this->db->join('user AS B', 'A.id_user_p = B.id_user', 'INNER');			
		// 	// $this->db->join('organisasi AS C', 'A.id_pimpinan = C.id_pimpinan_o', 'INNER');
		// 	$query = $this->db->get();
		// 	return $query;
		// }

		// public function view_organisasi()
		// {
		// 	$query=$this->db->get('organisasi');
		// 	return $query;
		// }
		// public function view_p_polinema()
		// {
		// 	$query=$this->db->get('pimpinan_polinema');
		// 	return $query;
		// }

		// public function get_detail_o($id_organisasi){
		// 	return $this->db->get_where('organisasi', array('id_organisasi' => $id_organisasi));
		// }

		// public function update_o($data,$id_organisasi){
		// 	$this->db->update("organisasi",$data,$id_organisasi);
		// }
		// public function get_detail_p($id_pimpinan){
		// 	return $this->db->get_where('pimpinan_polinema', array('id_pimpinan' => $id_pimpinan));
		// }

		// public function update_p($data,$id_pimpinan){
		// 	$this->db->update("pimpinan_polinema",$data,$id_pimpinan);
		// }

	}
?>