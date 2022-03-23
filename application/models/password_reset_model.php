<?php 

class Password_reset_model extends CI_Model{

	function get_user_data($email){
		$this->db->select('*');
		$this->db->from('users');
		$this->db->where('email',$email);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function update_token($email,$token){
		$this->db->where('email', $email);
    	$this->db->update('users', array('token'=>$token));
	}

	function get_token($username){
		$this->db->select('token');
		$this->db->from('users');
		$this->db->where('username',$username);
		$query = $this->db->get();

		if($query->num_rows() == 1){
			foreach ($query->result() as $row) {
				return $row->token;
			}
		}
	}

	function set_password($username,$password){
		$this->db->where('username', $username);
    	$this->db->update('users', array('password'=>$password,'token'=>''));
	}

}