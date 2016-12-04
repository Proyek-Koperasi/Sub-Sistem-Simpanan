<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis_simpan extends CI_Model {

	public function insert(){
		$object = array(
			'kd_jenis_simpan' => $this->input->post('kd_jenis_simpan'),
			'jenis_simpan' => $this->input->post('jenis_simpan')
		);
		$this->db->insert('jenis_simpan', $object);
	}

	public function get_all(){
		$this->db->select('*');
		$get = $this->db->get('jenis_simpan');
		
		return $get->result();
		
	}
	public function get_where($id){
		$get = $this->db->get_where('jenis_simpan', array('kd_jenis_simpan' => $id));
		return $get->result();
	}

	public function get_id($id){
		$get = $this->db->get_where('jenis_simpan', array('kd_jenis_simpan'=>$id));
		return $get->first_row();
	}

	public function update($id){
		$object = array(
			
			'jenis_simpan' => $this->input->post('jenis_simpan')
		);
		$this->db->where('kd_jenis_simpan', $id);
		$this->db->update('jenis_simpan', $object);
		
	}

	public function delete($id){
		$this->db->where('kd_jenis_simpan', $id);
		$this->db->delete('jenis_simpan');
		
	}

	public function login($username, $password){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('admin');
		$data = $this->db->get();
		return $data->result();
		// $get = $this->db->get_where('admin', array('username' =>$username
		// 	,'password'=>$password 
		// 	));

		// return $get->first_row();
	}


}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */