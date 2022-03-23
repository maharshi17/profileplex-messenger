<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Messages extends CI_Controller{

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');

		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('messages_model');

	}

	public function index(){

		if($this->session->has_userdata('user_id')){
			$this->load->view('templates/messages');
		}
		else{
			redirect(base_url());
		}

	}

	public function get_session_user_data(){

		$session_userid = $this->session->userdata('user_id');
		$session_user_data = $this->messages_model->get_session_user_data($session_userid);

		echo json_encode($session_user_data);

	}

	public function get_favourite_messages(){

		$session_userid = $this->session->userdata('user_id');
		
		$favourite_messages = $this->messages_model->get_favourite_messages($session_userid);
		$final_favourite_messages = array();

		if(empty($favourite_messages)){
			echo 0;
		}
		else{
			for($i = 0; $i < count($favourite_messages); $i++){
				$message_id = $favourite_messages[$i]['message_id'];
				$favourite_message_info = $this->messages_model->get_favourite_message_info($message_id);
				$sender_id = $favourite_message_info[0]['sender_id'];
				$sender_info = $this->messages_model->get_archived_user_info($sender_id);
				$sender_username = $sender_info[0]['username'];
				$receiver_id = $favourite_message_info[0]['receiver_id'];
				$receiver_info = $this->messages_model->get_archived_user_info($receiver_id);
				$receiver_username = $receiver_info[0]['username'];
				$message = base64_decode($favourite_message_info[0]['message']);
				$time = $favourite_message_info[0]['time'];
				$date = $favourite_message_info[0]['date'];

				$new_array = array('sender_id' => $sender_id, 'sender_username' => $sender_username, 'receiver_username' => $receiver_username, 'message' => $message, 'time' => $time, 'date' => $date);
				array_push($final_favourite_messages, $new_array);
			}
			echo json_encode($final_favourite_messages);
		}

	}

	public function add_message_to_favourites(){

		$session_userid = $this->session->userdata('user_id');
		$message_id = $_POST['message_id'];

		$is_message_favourite = $this->messages_model->is_message_favourite($session_userid, $message_id);

		if(empty($is_message_favourite)){
			$this->messages_model->add_messsage_to_favourites($session_userid, $message_id);
		}

	}

	public function remove_message_from_favourites(){

		$session_userid = $this->session->userdata('user_id');
		$message_id = $_POST['message_id'];

		$is_message_favourite = $this->messages_model->is_message_favourite($session_userid, $message_id);

		if(!empty($is_message_favourite)){
			$this->messages_model->remove_message_from_favourites($session_userid, $message_id);
		}

	}

	public function delete_message(){

		$session_userid = $this->session->userdata('user_id');
		$message_id = $_POST['message_id'];

		$this->messages_model->delete_message($message_id, $session_userid);

	}

	public function get_archived_users(){

		$session_userid = $this->session->userdata('user_id');

		$archived_users = $this->messages_model->get_archived_users($session_userid);
		$final_archived_users = array();

		if(empty($archived_users)){
			echo 0;
		}
		else{
			for($i = 0; $i < count($archived_users); $i++){
				$user_id = $archived_users[$i]['user_id'];
				$archived_user_info = $this->messages_model->get_archived_user_info($user_id);
				$full_name = $archived_user_info[0]['full_name'];
				$username = $archived_user_info[0]['username'];
				$profile_photo = $archived_user_info[0]['profile_photo'];

				$new_array = array('user_id' => $user_id, 'full_name' => $full_name, 'username' => $username, 'profile_photo' => $profile_photo);
				array_push($final_archived_users, $new_array);
			}
			echo json_encode($final_archived_users);
		}

	}

	public function add_user_to_archive(){
		
		$session_userid = $this->session->userdata('user_id');
		$user_id = $_POST['user_id'];

		$is_user_archived = $this->messages_model->is_user_archived($session_userid, $user_id);

		if(empty($is_user_archived)){
			$this->messages_model->add_user_to_archive($session_userid, $user_id);
		}

	}

	public function remove_user_from_archive(){
		$session_userid = $this->session->userdata('user_id');
		$user_id = $_POST['user_id'];

		$is_user_archived = $this->messages_model->is_user_archived($session_userid, $user_id);

		if(!empty($is_user_archived)){
			$this->messages_model->remove_user_from_archive($session_userid, $user_id);
		}
	}

	public function get_chat_list(){

		$session_userid = $this->session->userdata('user_id');
		$chat_list = $this->messages_model->get_chat_list($session_userid);

		$final_chat_list = array();
		$current_timestamp = time();
		
		for($i = 0; $i < count($chat_list); $i++){

			$message_id = $chat_list[$i]['id'];
			$sender_id = $chat_list[$i]['sender_id'];
			$receiver_id = $chat_list[$i]['receiver_id'];
			$message = base64_decode($chat_list[$i]['message']);
			$is_read = $chat_list[$i]['is_read'];
			$time = $chat_list[$i]['time'];
			$date = $chat_list[$i]['date'];

			if(empty($final_chat_list)){
				if($sender_id == $session_userid){

					$chat_user_info = $this->messages_model->get_chat_user_info($session_userid, $receiver_id);
					$username = $chat_user_info[0]['username'];
					$profile_photo = $chat_user_info[0]['profile_photo'];
					$last_login = $chat_user_info[0]['last_login'];

					$new_array = array('message_id' => $message_id,'user_id' => $receiver_id, 'sender_id' => $sender_id, 'receiver_id' => $receiver_id,'message' => $message, 'is_read' => $is_read, 'time' => $time, 'date'=>$date, 'username' => $username, 'profile_photo' => $profile_photo, 'last_login' => $last_login, 'current_timestamp' => $current_timestamp);
					array_push($final_chat_list, $new_array);
				}
				if($receiver_id == $session_userid){

					$chat_user_info = $this->messages_model->get_chat_user_info($session_userid, $sender_id);
					$username = $chat_user_info[0]['username'];
					$profile_photo = $chat_user_info[0]['profile_photo'];
					$last_login = $chat_user_info[0]['last_login'];

					$new_array = array('message_id' => $message_id,'user_id' => $sender_id, 'sender_id' => $sender_id, 'receiver_id' => $receiver_id,'message' => $message, 'is_read' => $is_read, 'time' => $time, 'date'=>$date, 'username' => $username, 'profile_photo' => $profile_photo, 'last_login' => $last_login, 'current_timestamp' => $current_timestamp);
					array_push($final_chat_list, $new_array);
				}
			}
			else{
				if($sender_id == $session_userid){
					if(array_search($receiver_id, array_column($final_chat_list, 'user_id')) !== false){
						// Do nothing
					}
					else{

						$chat_user_info = $this->messages_model->get_chat_user_info($session_userid, $receiver_id);
						$username = $chat_user_info[0]['username'];
						$profile_photo = $chat_user_info[0]['profile_photo'];
						$last_login = $chat_user_info[0]['last_login'];

						$new_array = array('message_id' => $message_id,'user_id' => $receiver_id, 'sender_id' => $sender_id, 'receiver_id' => $receiver_id,'message' => $message, 'is_read' => $is_read, 'time' => $time, 'date'=>$date, 'username' => $username, 'profile_photo' => $profile_photo, 'last_login' => $last_login, 'current_timestamp' => $current_timestamp);
						array_push($final_chat_list, $new_array);
					}	
				}
				if($receiver_id == $session_userid){
					if(array_search($sender_id, array_column($final_chat_list, 'user_id')) !== false){
						// Do nothing
					}
					else{

						$chat_user_info = $this->messages_model->get_chat_user_info($session_userid, $sender_id);
						$username = $chat_user_info[0]['username'];
						$profile_photo = $chat_user_info[0]['profile_photo'];
						$last_login = $chat_user_info[0]['last_login'];

						$new_array = array('message_id' => $message_id,'user_id' => $sender_id, 'sender_id' => $sender_id, 'receiver_id' => $receiver_id,'message' => $message, 'is_read' => $is_read, 'time' => $time, 'date'=>$date, 'username' => $username, 'profile_photo' => $profile_photo, 'last_login' => $last_login, 'current_timestamp' => $current_timestamp);
						array_push($final_chat_list, $new_array);
					}
				}
			}
		}

		echo json_encode($final_chat_list);

	}

	public function get_user_profile(){
		
		$user_id = $_POST['user_id'];
		$profile_data = $this->messages_model->get_profile_data($user_id);

		$final_profile_data = array();

		$id = $profile_data[0]['id'];
		$full_name = $profile_data[0]['full_name'];
		$username = $profile_data[0]['username'];
		$profile_photo = $profile_data[0]['profile_photo'];
		$gender = $profile_data[0]['gender'];
		$dob = $profile_data[0]['dob'];
		$about = $profile_data[0]['about'];
		$is_profile_private = $profile_data[0]['is_profile_private'];
		$created_at = $profile_data[0]['created_at'];

		array_push($final_profile_data,$id, $full_name, $username, $profile_photo, $gender, $dob, $about, $is_profile_private, $created_at);
		
		echo json_encode($final_profile_data);
	}

	public function delete_user_chat(){

		$session_userid = $this->session->userdata('user_id');
		$user_id = $_POST['user_id'];

		$this->messages_model->delete_user_chat($session_userid, $user_id);

	}

	public function get_user_edit_profile(){

		$session_userid = $this->session->userdata('user_id');
		$edit_profile_data = $this->messages_model->get_edit_profile_data($session_userid);

		$final_profile_data = array();

		$profile_photo = $edit_profile_data[0]['profile_photo'];
		$gender = $edit_profile_data[0]['gender'];

		$dob = $edit_profile_data[0]['dob'];
		$dob_array = explode(" ", $dob);

		$dob_day = $dob_array[0];
		$dob_month = $dob_array[1];
		$dob_year = $dob_array[2];

		$about = $edit_profile_data[0]['about'];
		$about_length = strval(strlen($about));

		array_push($final_profile_data, $profile_photo, $gender, $dob_day, $dob_month, $dob_year, $about, $about_length);

		echo json_encode($final_profile_data);

	}

	public function get_user_settings(){
		
		$session_userid = $this->session->userdata('user_id');
		$settings_data = $this->messages_model->get_settings_data($session_userid);

		$final_settings_data = array();

		$full_name = $settings_data[0]['full_name'];
		$username = $settings_data[0]['username'];
		$email = $settings_data[0]['email'];
		$is_profile_private = $settings_data[0]['is_profile_private'];

		array_push($final_settings_data, $full_name, $username, $email, $is_profile_private);

		echo json_encode($final_settings_data);
	
	}

	public function get_user_chat_header(){

		$session_userid = $this->session->userdata('user_id');
		$user_id = $_POST['user_id'];
		$current_timestamp = time();

		$user_chat_header_info = $this->messages_model->user_chat_header_info($user_id);
		$is_user_archived = $this->messages_model->is_user_archived($session_userid, $user_id);

		if(empty($is_user_archived)){
			$is_user_archived = 0;
		}
		else{
			$is_user_archived = 1;
		}

		$timestamp_array = array('current_timestamp' => $current_timestamp);
		$user_archived_array = array('is_user_archived' => $is_user_archived);
		
		$final_array = array_merge($user_chat_header_info, $timestamp_array, $user_archived_array);

		echo json_encode($final_array);

	}

	public function get_initial_chat(){

		$session_userid = $this->session->userdata('user_id');
		$initial_chat = $this->messages_model->get_initial_chat($session_userid);
		$initial_chat_count = count($initial_chat);

		if($initial_chat_count == 0){
			echo '0';
		}
		else{
			echo json_encode($initial_chat);
		}

	}

	public function search_chat(){

		$query = $_POST['query'];
		$session_userid = $this->session->userdata('user_id');

		$chat_result = $this->messages_model->search_chat($query, $session_userid);
		$chat_result_count = count($chat_result);

		if($chat_result_count == 0){
			echo '0';
		}
		else{
			echo json_encode($chat_result);
		}

	}

	public function get_user_chat(){

		$user_id = $_POST['userid'];

		$get_chat = $this->messages_model->get_chat($user_id);
		echo json_encode($get_chat);

	}

	public function get_user_messages(){

		$session_userid = $this->session->userdata('user_id');
		$userid = $_POST['user_id'];

		$get_messages = $this->messages_model->get_messages($session_userid, $userid);
		$messages_count = count($get_messages);

		for($i = 0; $i < $messages_count; $i++){
			$message = $get_messages[$i]['message'];
			$get_messages[$i]['message'] = base64_decode($message);
		}

		for($j = 0; $j < $messages_count; $j++){
			$message_id = $get_messages[$j]['id'];
			$is_message_favourite = $this->messages_model->is_message_favourite($session_userid, $message_id);

			if(empty($is_message_favourite)){
				$get_messages[$j]['is_favourite'] = '0';
			}
			else{
				$get_messages[$j]['is_favourite'] = '1';
			}
		}

		if($messages_count == 0){
			echo '0';
		}
		else{
			echo json_encode($get_messages);
		}
	}

	// Store message to DB
	public function send_message(){

		$sender_id = $this->session->userdata('user_id');
		$receiver_id = $_POST['receiverId'];
		$message = base64_encode($_POST['finalTextMessage']);
		$time = date('g:i A');
		$date = date('j M, Y');
		
		$this->messages_model->insert_message($sender_id, $receiver_id, $message, $time, $date);
		$last_sent_message = $this->messages_model->get_last_sent_message($sender_id, $receiver_id);

		echo json_encode($last_sent_message);

	}

	// Get instant messages
	public function get_instant_messages(){

		$session_userid = $this->session->userdata('user_id');
		$userid = $_POST['user_id'];

		$last_message = $this->messages_model->get_instant_message($session_userid, $userid);
		$last_message_count = count($last_message);

		if($last_message_count == 1){
			$last_message_id = $last_message[0]['id'];
			$this->messages_model->read_last_message($last_message_id);
		}

		if(!empty($last_message)){
			$message = $last_message[0]['message'];
			$last_message[0]['message'] = base64_decode($message);
			echo json_encode($last_message);
		}

	}

	public function read_message(){

		$session_userid = $this->session->userdata('user_id');
		$user_id = $_POST['user_id'];
		
		$this->messages_model->read_message($session_userid, $user_id);

	}

	public function update_user_profile(){

		/* User data */
		$session_userid = $this->session->userdata('user_id');
		$profile_photo = $_POST['profile_photo'];
		$is_photo_changed = $_POST['is_photo_changed'];
		$previous_profile_photo = $_POST['previous_profile_photo'];
		$gender = $_POST['gender'];
		$dob = $_POST['final_dob'];
		$about = htmlentities($_POST['about']);

		if($profile_photo != ''){
			$profile_photo_name = uniqid().uniqid().'.jpg';

			$split = explode('/', $profile_photo);
			$split2 = explode(':', $split[0]);
			// $fileType = $split2[1];
			$split3 = explode(';', $split[1]);
			$fileExtension = $split3[0];

			$photo_array_1 = explode(";",$profile_photo);
			$photo_array_2 = explode(",",$photo_array_1[1]);

			$finalPhoto = base64_decode($photo_array_2[1]);

			if($is_photo_changed == 1){
				file_put_contents('upload/profile_photo/p200x200/'.$profile_photo_name.'', $finalPhoto);
				$this->resize_and_upload_photo($profile_photo, $fileExtension, $profile_photo_name);
				unlink('upload/profile_photo/p100x100/'.$previous_profile_photo);
				unlink('upload/profile_photo/p200x200/'.$previous_profile_photo);
			}	
		}
		else{
			if($profile_photo == '' && $is_photo_changed == 1){
				$profile_photo_name = '';
				unlink('upload/profile_photo/p100x100/'.$previous_profile_photo);
				unlink('upload/profile_photo/p200x200/'.$previous_profile_photo);
			}
			else{
				$profile_photo_name = '';
			}
		}

		$this->messages_model->update_user_profile($session_userid, $is_photo_changed, $profile_photo_name, $gender, $dob, $about);
	}

	public function resize_and_upload_photo($profile_photo, $fileExtension, $profile_photo_name){

		$source_img = $profile_photo;
		$img_extension = $fileExtension;
		$new_w = 100;
		$new_h = 100;

		if($img_extension == "jpg" || $img_extension == "jpeg"){
			$src = imagecreatefromjpeg($source_img);
		}
		if($img_extension == "png"){
			$src = imagecreatefrompng($source_img);
		}
		    
		$orig_w = imagesx($src);
		$orig_h = imagesy($src);
		    
	    $crop_w = $new_w;
	    $crop_h = $new_h;
	    $src_x = 0;
	    $src_y = 0; 

		$dest_img = imagecreatetruecolor($new_w,$new_h);
		imagecopyresampled($dest_img, $src, 0 , 0 , $src_x, $src_y, $crop_w, $crop_h, $orig_w, $orig_h);
		imagejpeg($dest_img , 'upload/profile_photo/p100x100/'.$profile_photo_name);

	}

	/* Settings */

	public function update_settings($type){

		$session_userid = $this->session->userdata('user_id');

		if($type == "general_settings"){
			// Update general settings
			$fullname = htmlentities($_POST['fullname']);
			$username = htmlentities($_POST['username']);
			$email = htmlentities($_POST['email']);

			$this->messages_model->update_general_settings($session_userid, $fullname, $username, $email);

		}
		if($type == "change_password"){
			// Change password
			$new_password = htmlentities($_POST['new_password']);
			$confirm_password = htmlentities($_POST['confirm_password']);

			if($new_password == $confirm_password) {
				$final_password = md5($new_password);
				
				$this->messages_model->update_password($session_userid, $final_password);
			}
		}
		if($type == "change_profile_privacy"){
			// Change profile privacy
			$is_profile_private = $_POST['is_profile_private'];
			
			$this->messages_model->update_profile_privacy($session_userid, $is_profile_private);
		}
		if($type == "delete_account"){
			// Delete account

			$this->session->unset_userdata('user_id');
			$this->messages_model->delete_account($session_userid);

			echo '<!DOCTYPE html><html><head><meta http-equiv="refresh" content="3;url='.base_url().'"/>';
			echo '</head><body>Deleting your account...</body></html>';
		}
	}


	public function check_user_current_password(){
		
		$session_userid = $this->session->userdata('user_id');

		$entered_password = md5($_POST['current_password']);
		$current_password_array = $this->messages_model->get_user_current_password($session_userid);
		$current_password = $current_password_array[0]['password'];

		if($entered_password == $current_password){
			echo 1;
		}
		else{
			echo 0;
		}

	}

	public function update_user_status(){

		$session_userid = $this->session->userdata('user_id');
		$time = time() + 10;

		$this->messages_model->update_user_status($session_userid, $time);

	}

	// public function get_sidebar_header_data(){
	// 	$userdata = $this->get_session_user_data();

	// 	$profile_photo = $userdata[0]['profile_photo'];
	// 	$username = $userdata[0]['username'];
	// 	$full_name = $userdata[0]['full_name'];
	// 	$data_str = $profile_photo.','.$username.','.$full_name;

	// 	echo $data_str;

	// 	//$sidabar_header_data = explode(','$data_str);
	// }



}