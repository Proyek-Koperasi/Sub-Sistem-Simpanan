<?php
defined('BASEPATH') OR exit('No direct script access allowed');

 class crud_Model extends CI_Model {
 function __construct() {
 parent::__construct();
 
}
 
public function show($table){
  $this->db->select('*');
  $data = $this->db->get($table);
  if($data->num_rows() == 0){
  return $data->result_array();
 }else{
 return false;
 }
 }
 
 public function insert($data,$table){
 $this->db->insert($table, $data);
 }
 
}


/* End of file modelName.php */
/* Location: ./application/models/modelName.php */