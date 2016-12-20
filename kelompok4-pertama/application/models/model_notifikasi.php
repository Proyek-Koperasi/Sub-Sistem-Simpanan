<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_notifikasi extends CI_Model
{
	public function insert_pesan()
	{
		$data = array(
				'nomor'			=> 'NULL',
				'waktu' 		=> $this->input->post('waktu'),
				'nomor_surat_p' => $this->input->post('nomor_surat_p'),
				'dari' 			=> $this->input->post('dari'),
				'kepada'		=> $this->input->post('kepada'),
				'pesan' 		=> $this->input->post('pesan'),
				'sudahbaca' 	=> ('N'));
		$simpan=$this->db->insert('tabel_pesan', $data);
		return $simpan;
	}
	public function insert_psn()
	{
		$data = array(
				'id_psn'	=> 'NULL',
				'no_surat_' => $this->input->post('no_surat_'),
				'waktu_' 	=> $this->input->post('waktu_'),
				'dari_' 	=> $this->input->post('dari_'),
				'kpd_'		=> $this->input->post('kpd_'),
				'pesan_' 	=> $this->input->post('pesan_'),
				'baca_' 	=> ('N'));
		$simpan=$this->db->insert('psn', $data);
		return $simpan;
	}
	public function insert_psn_u()
	{
		$data = array(
				'id_pesan'		=> 'NULL',
				'time_' 		=> $this->input->post('time_'),
				'from_' 		=> $this->input->post('from_'),
				'to_'			=> $this->input->post('to_'),
				'msg_' 			=> $this->input->post('msg_'),
				'statusbaca' 	=> ('N'));
		$simpan=$this->db->insert('pesan', $data);
		return $simpan;
	}
}