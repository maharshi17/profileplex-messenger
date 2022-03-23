<?php

class messages_model extends CI_Model{

	function get_session_user_data($session_userid){
		$this->db->select('id, full_name, username, email, profile_photo, gender, dob, about, is_verified, created_at');
		$this->db->from('users');
		$this->db->where('id',$session_userid);
		$query = $this->db->get();
		$result = $query->result_array();
		return $result;
	}

	function get_profile_data($user_id){
		$sql = "SELECT id, full_name, username, profile_photo, gender, dob, about, is_profile_private, created_at FROM users WHERE id = '$user_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_edit_profile_data($session_userid){
		$sql = "SELECT profile_photo, gender, dob, about FROM users WHERE id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function update_user_profile($session_userid, $is_photo_changed, $profile_photo_name, $gender, $dob, $about){
		if($is_photo_changed == 0){
			$sql = "UPDATE users SET gender = '$gender', dob = '$dob', about = '$about' WHERE id = '$session_userid'";
			$query = $this->db->query($sql);
			return true;
		}
		else {
			$sql = "UPDATE users SET profile_photo = '$profile_photo_name', gender = '$gender', dob = '$dob', about = '$about' WHERE id = '$session_userid'";
			$query = $this->db->query($sql);
			return true;
		}
	}

	function get_settings_data($session_userid){
		$sql = "SELECT full_name, username, email, is_profile_private FROM users WHERE id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_chat_list($session_userid){
		$sql = "SELECT id, sender_id, receiver_id, message, is_read, time, date FROM messages WHERE sender_id = '$session_userid' OR receiver_id = '$session_userid' ORDER BY id DESC";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_chat_user_info($session_userid, $user_id){
		$sql = "SELECT username, profile_photo, last_login FROM users WHERE id = '$user_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	/* Favourite messages start */
	function get_favourite_messages($session_userid){
		$sql = "SELECT message_id FROM favourites WHERE for_user_id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_favourite_message_info($message_id){
		$sql = "SELECT sender_id, receiver_id, message, time, date FROM messages WHERE id = '$message_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function add_messsage_to_favourites($session_userid, $message_id){
		$sql = "INSERT INTO favourites(message_id, for_user_id) VALUES('$message_id', '$session_userid')";
		$query = $this->db->query($sql);
	}

	function remove_message_from_favourites($session_userid, $message_id){
		$sql = "DELETE FROM favourites WHERE message_id = $message_id AND for_user_id = '$session_userid'";
		$query = $this->db->query($sql);
	}

	function is_message_favourite($session_userid, $message_id){
		$sql = "SELECT * FROM favourites WHERE message_id = '$message_id' AND for_user_id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}
	/* Favourite messages end */

	function delete_message($message_id, $session_userid){
		$this->db->query("DELETE FROM messages WHERE id = '$message_id' AND sender_id = '$session_userid'");
		$this->db->query("DELETE FROM favourites WHERE message_id = '$message_id'");
	}

	function get_archived_users($session_userid){
		$sql = "SELECT user_id FROM archived WHERE for_user_id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_archived_user_info($user_id){
		$sql = "SELECT full_name, username, profile_photo FROM users WHERE id = '$user_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function add_user_to_archive($session_userid, $user_id){
		$sql = "INSERT INTO archived(user_id, for_user_id) VALUES('$user_id', '$session_userid')";
		$query = $this->db->query($sql);
	}

	function remove_user_from_archive($session_userid, $user_id){
		$sql = "DELETE FROM archived WHERE user_id = $user_id AND for_user_id = '$session_userid'";
		$query = $this->db->query($sql);
	}

	function is_user_archived($session_userid, $user_id){
		$sql = "SELECT * FROM archived WHERE user_id = '$user_id' AND for_user_id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function delete_user_chat($session_userid, $user_id){
		$this->db->query("DELETE FROM messages WHERE (sender_id = '$session_userid' AND receiver_id = '$user_id') OR (sender_id = '$user_id' AND receiver_id = '$session_userid')");
		$this->db->query("DELETE FROM archived WHERE user_id = '$user_id' AND for_user_id = '$session_userid'");
	}

	function user_chat_header_info($user_id){
		$sql = "SELECT id, username, profile_photo, last_login FROM users WHERE id = '$user_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_initial_chat($session_userid){
		$sql = "SELECT * FROM messages WHERE sender_id = '$session_userid' OR receiver_id = '$session_userid' ORDER BY id DESC LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function search_chat($query,$session_userid){
		$sql = "SELECT id, profile_photo, username, full_name FROM users WHERE (username LIKE '%$query%' OR full_name LIKE '%$query%') AND id != '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_chat($user_id){
		$sql = "SELECT id, profile_photo, username FROM users WHERE id = '$user_id'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function get_messages($session_userid, $userid){
		$sql = "SELECT * FROM messages WHERE (sender_id = '$session_userid' AND receiver_id = '$userid') OR (sender_id = '$userid' AND receiver_id = '$session_userid')";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function insert_message($sender_id, $receiver_id, $message, $time, $date){
		$sql = "INSERT INTO messages(sender_id, receiver_id, message, is_sent, is_read, time, date) VALUES('$sender_id', '$receiver_id', '$message', 1, 0, '$time', '$date')";
		$this->db->query($sql);
	}

	function get_last_sent_message($sender_id, $receiver_id){
		$sql = "SELECT id, sender_id, receiver_id, is_sent, is_read, time, date FROM messages WHERE sender_id = '$sender_id' AND receiver_id = '$receiver_id' ORDER BY id DESC LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function read_message($session_userid, $user_id){
		$sql = "UPDATE messages SET is_read = 1 WHERE sender_id = '$user_id' AND receiver_id = '$session_userid'";
		$this->db->query($sql);
	}

	function get_instant_message($session_userid, $userid){
		$sql = "SELECT * FROM messages WHERE sender_id = '$userid' AND receiver_id = '$session_userid' AND is_read = 0 ORDER BY id DESC LIMIT 1";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function read_last_message($last_message_id){
		$sql = "UPDATE messages SET is_read = 1 WHERE id = '$last_message_id'";
		$this->db->query($sql);
	}

	/* Update settings */

	function update_general_settings($session_userid, $fullname, $username, $email){
		$sql = "UPDATE users SET full_name = '$fullname', username = '$username', email = '$email' WHERE id = '$session_userid'";
		$query = $this->db->query($sql);
		return true;
	}

	function update_password($session_userid, $final_password){
		$sql = "UPDATE users SET password = '$final_password' WHERE id = '$session_userid'";
		$query = $this->db->query($sql);
		return true;
	}

	function update_profile_privacy($session_userid, $is_profile_private){
		$sql = "UPDATE users SET is_profile_private = '$is_profile_private' WHERE id = '$session_userid'";
		$query = $this->db->query($sql);
	}

	function get_user_current_password($session_userid){
		$sql = "SELECT password FROM users WHERE id = '$session_userid'";
		$query = $this->db->query($sql);
		$result = $query->result_array();
		return $result;
	}

	function delete_account($session_userid){
		$this->db->query("DELETE FROM users WHERE id = '$session_userid'");
		$this->db->query("DELETE FROM messages WHERE sender_id = '$session_userid' OR receiver_id = '$session_userid'");
		$this->db->query("DELETE FROM favourites WHERE for_user_id = '$session_userid'");
		$this->db->query("DELETE FROM archived WHERE user_id = '$session_userid' OR for_user_id = '$session_userid'");
	}

	function update_user_status($session_userid, $time){
		$sql = "UPDATE users SET last_login = '$time' WHERE id = '$session_userid'";
		$this->db->query($sql);
	}
}