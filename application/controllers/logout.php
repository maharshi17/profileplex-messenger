<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Logout extends CI_Controller{

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');
		$this->load->library('session');

	}

	public function index(){

		if($this->session->has_userdata('user_id')){
			$this->session->unset_userdata('user_id');
			redirect(base_url());
		}
		else{
			redirect(base_url());
		}

	}
}