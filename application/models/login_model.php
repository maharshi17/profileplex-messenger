<?php 

class Login_model extends CI_Model{

	function login($username_email, $password){
		$this->db->select('*');
		$this->db->from('users');
		$where = "username = '$username_email' AND password = '$password' OR email = '$username_email' AND password = '$password'";
		$this->db->where($where);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function update_last_login($userid, $time){
		$sql = "UPDATE users SET last_login = '$time' WHERE id = '$userid'";
		$query = $this->db->query($sql);
	}
	
}