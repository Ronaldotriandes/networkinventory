<?php defined('BASEPATH') OR exit('No direct script access allowed');
class Login_model extends CI_Model {
   	public function viewdata($where=''){
		$sql = "select * from login $where";
		$cek = $this->db->query($sql);
		return $cek -> result_array();
	}
	public function insert($data){
		$result = $this->db->insert('login',$data);
	}
}