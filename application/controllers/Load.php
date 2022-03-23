<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Load extends CI_Controller {

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		$this->load->library('session');

	}

	public function index(){

		if($this->session->has_userdata('user_id')){
			redirect(base_url().'messages/');
		}
		else{
			$this->load->view('templates/landing');
		}

	}

	public function login(){

		if($this->session->has_userdata('user_id')){
			redirect(base_url().'messages/');
		}
		else{
			$this->load->view('templates/login');
		}

	}

	public function signup(){

		if($this->session->has_userdata('user_id')){
			redirect(base_url().'messages/');
		}
		else{
			$this->load->view('templates/signup');
		}

	}

	public function password_reset(){

		if($this->session->has_userdata('user_id')){
			redirect(base_url().'messages/');
		}
		else{
			$this->load->view('templates/password_reset');
		}

	}

}