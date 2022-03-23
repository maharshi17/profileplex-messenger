<?php 

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller{

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');

		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('login_model');

	}

	public function validation(){
	
		$this->form_validation->set_rules('username_email','Username or email','required');
		$this->form_validation->set_rules('password','Password','required');

		if($this->form_validation->run()){
			$this->login_user();
		}
		else{
			redirect(base_url().'/login');
		}

	}

	public function login_user(){

		$username_email = htmlentities($this->input->post("username_email"));
		$password = htmlentities(md5($this->input->post("password")));

		$login_response = $this->login_model->login($username_email, $password);

		$count = count($login_response);
		
		if($count == 0){
			$this->session->set_flashdata('username_email',$username_email);
			$this->session->set_flashdata('login_error_message', 'Invalid username/email or password.');
			redirect(base_url().'login');
		}
		if($count == 1){
			$userid = $login_response[0]['id'];
			$sess_data = array(
					'user_id' => $userid
					);
			$this->session->set_userdata($sess_data);

			$time = time()+10;
			$this->login_model->update_last_login($userid, $time);

			redirect(base_url());
		}

	}

}