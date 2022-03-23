<?php 

class Account_model extends CI_Model{

	function update_token($user_id,$token){
		$this->db->where('id', $user_id);
    	$this->db->update('users', array('token'=>$token));
	}

	function get_user_data($user_id){
		$this->db->select('username,email,token,is_verified');
		$this->db->from('users');
		$this->db->where('id',$user_id);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function verify_user($user_id){
		$this->db->where('id', $user_id);
    	$this->db->update('users', array('is_verified'=>1));
    	$this->db->update('users', array('token'=>''));
	}

	//foreach ($query->result() as $row)
	// {
	//         echo $row->title;
	//         echo $row->name;
	//         echo $row->body;
	// }

}