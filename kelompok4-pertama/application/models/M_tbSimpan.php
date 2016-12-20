<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tbSimpan extends CI_Model {

	function __construct() {
 parent::__construct();
 
}
 


	public function insert(){


	 $foto 	= (!empty($_FILES['foto']['name'])) ? $_FILES['foto']['name'] : "" ;
		if (strlen($foto)>0) {
			if (is_uploaded_file($_FILES['foto']['tmp_name'])) {
			//move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/e_koperasi/image/foto/".$foto);
			move_uploaded_file($_FILES['foto']['tmp_name'], "C:/xampp/htdocs/kelompok4/gambarbaru/".$foto);
			}
		}


		$object = array(
			'id_transaksi' 		=> $this->input->post('id_transaksi'),
			'id_anggota'			=> $this->input->post('id_anggota'),
			'jml_simpan'		=> $this->input->post('jml_simpan'),
			'jml_ambil'	=> $this->input->post('jml_ambil'),
			'total'	=> $this->input->post('total'),
			'tgl_transaksi' 			=> $this->input->post('tgl_transaksi'),
			
			'kd_jenis_simpan'	=> $this->input->post('kd_jenis_simpan'),
			'gambar' => $foto
			 ); 
		$this->db->insert('tbSimpan',$object);

		 
	}

	public function get_all(){
		$get = $this->db->get('tbSimpan');

		return $get->result();
	}
	
	public function get_where($id){
		$get = $this->db->get_where('tbSimpan', array('id_transaksi' => $id));
		return $get->result();
	}

	public function get_trans($id){
		$this->db->join('anggota', 'tbSimpan.id_anggota = anggota.id_anggota');
		$this->db->join('jenis_simpan', 'jenis_simpan.kd_jenis_simpan = tbSimpan.kd_jenis_simpan');
		$get = $this->db->get_where('tbSimpan', array('id_transaksi' => $id));
		return $get->result();
	}

	public function get_id($id){
		$get = $this->db->get_where('tbSimpan', array('id_transaksi'=>$id));
		return $get->first_row();
	}

	public function update($id){
		$object = array(
			
		'id_anggota'			=> $this->input->post('id_anggota'),
			'jml_simpan'		=> $this->input->post('jml_simpan'),
			'jml_ambil'	=> $this->input->post('jml_ambil'),
			'total'	=> $this->input->post('total'),
			'tgl_transaksi' 			=> $this->input->post('tgl_transaksi'),
			
			'kd_jenis_simpan'	=> $this->input->post('kd_jenis_simpan')
		);

		$this->db->where('id_transaksi', $id);
		$this->db->update('tbSimpan', $object);
	}

	public function delete($id){
		$this->db->where('id_transaksi', $id);
		$this->db->delete('tbSimpan');
	}

	public function inner_join(){
		$this->db->select('*');
		$this->db->from('tbSimpan');
		$this->db->join('anggota', 'tbSimpan.id_anggota = anggota.id_anggota');
		$this->db->join('jenis_simpan', 'jenis_simpan.kd_jenis_simpan = tbSimpan.kd_jenis_simpan');
		$db= $this->db->get();

		return $db->result();

	}

	public function show($table){
		  $this->db->select('*');
		  $data = $this->db->get($table);
		  if($data->num_rows() == 0){
		  		return $data->result_array();
		  }
		  else
		  {
		 		return false;
		  }
 } 


}

/* End of file m_siswa.php */
/* Location: ./application/models/m_siswa.php */