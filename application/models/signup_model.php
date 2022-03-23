<?php 

class Signup_model extends CI_Model{

	function check_username($username){
		$this->db->select('username');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function check_email($email){
		$this->db->select('email');
		$this->db->from('users');
		$this->db->where('email',$email);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function insert_user_record($userData){
		$this->db->insert('users',$userData);
	}

}