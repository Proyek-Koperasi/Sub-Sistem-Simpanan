<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_anggota extends CI_Model {

	public function insert(){
		$object = array(
			'id_anggota' => $this->input->post('id_anggota'),
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'username_anggota' => $this->input->post('username_anggota'),
			'password_anggota' => md5($this->input->post('password_anggota'))
			//'status'=> $this->input->post('status')
		);
		$this->db->insert('anggota', $object);
	}

	public function get_all(){
		$this->db->select('*');
		$get = $this->db->get('anggota');
		
		return $get->result();
		
	}
	public function get_where($id){
		$get = $this->db->get_where('anggota', array('id_anggota' => $id));
		return $get->result();
	}

	public function get_id($id){
		$get = $this->db->get_where('anggota', array('id_anggota'=>$id));
		return $get->first_row();
	}

	public function update($id){
		$object = array(
	
			'nama' => $this->input->post('nama'),
			'jk' => $this->input->post('jk'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tgl_lahir' => $this->input->post('tgl_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp'),
			'username_anggota' => $this->input->post('username_anggota'),
			'password_anggota' => md5($this->input->post('password_anggota'))
			
			//'status'=> $this->input->post('status')
		);
		$this->db->where('id_anggota', $id);
		$this->db->update('anggota', $object);
		
	}

	public function delete($id){
		$this->db->where('id_anggota', $id);
		$this->db->delete('anggota');
		
	}

	public function login($username, $password){
		$this->db->select('*');
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		$this->db->from('anggota');
		$data = $this->db->get();
		return $data->result();
		// $get = $this->db->get_where('anggota', array('username' =>$username
		// 	,'password'=>$password 
		// 	));

		// return $get->first_row();
	}


}

/* End of file modelName.php */
/* Location: ./application/models/modelName.php */