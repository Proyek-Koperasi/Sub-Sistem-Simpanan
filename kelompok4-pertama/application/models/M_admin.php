<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_admin extends CI_Model {

	public function insert(){
		$object = array(
			'id_admin' => $this->input->post('id_admin'),
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'status' => $this->input->post('status')
			//'status'=> $this->input->post('status')
		);
		$this->db->insert('admin', $object);
	}

	public function get_all(){
		$this->db->select('*');
		$get = $this->db->get('admin');
		
		return $get->result();
		
	}
	public function get_where($id){
		$get = $this->db->get_where('admin', array('id_admin' => $id));
		return $get->result();
	}

	public function get_id($id){
		$get = $this->db->get_where('admin', array('id_admin'=>$id));
		return $get->first_row();
	}

	public function update($id){
		$object = array(
			
			'username' => $this->input->post('username'),
			'password' => md5($this->input->post('password')),
			'status' => $this->input->post('status')
			//'status'=> $this->input->post('status')
		);
		$this->db->where('id_admin', $id);
		$this->db->update('admin', $object);
		
	}

	public function delete($id){
		$this->db->where('id_admin', $id);
		$this->db->delete('admin');
		
	}

	public function login($username, $password){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('admin');
		$data = $this->db->get();
		return $data->result();
		// $get = $this->db->get_where('user', array('username' =>$username
		// 	,'password'=>$password 
		// 	));

		// return $get->first_row();
	}


}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */