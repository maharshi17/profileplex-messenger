<?php 

use PHPMailer\PHPMailer\PHPMailer;

defined('BASEPATH') or exit('No direct script access allowed');

class Account extends CI_Controller{

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');

		require_once 'phpmailer-6/src/PHPMailer.php';
		require_once 'phpmailer-6/src/SMTP.php';
		require_once 'phpmailer-6/src/Exception.php';

		$this->load->library('session');

		$this->load->model('account_model');

	}

	public function verification(){

		$user_id = $this->session->userdata('user_id');
		$user_data = $this->account_model->get_user_data($user_id);

		if(empty($user_data)){
			show_404();
		}
		else{
			$username = $user_data[0]['username'];
			$email = $user_data[0]['email'];
			$token = $user_data[0]['token'];
			$is_verified = $user_data[0]['is_verified'];

			if(isset($_GET['token']) && !empty($_GET['token']) && isset($_GET['username']) && !empty($_GET['username'])){

				$url_token = $_GET['token'];
				$actual_token = $token;
				$url_username = $_GET['username'];
				$actual_username = $username;

				if($url_token == $actual_token && $url_username == $actual_username){
					$this->account_model->verify_user($user_id);
					redirect(base_url().'messages/');
				}
				else{
					redirect(base_url());
				}

			}
			else{
				if($is_verified == 0){
					$data['userdata'][] = (object)array('username'=>$username,'email'=>$email,'is_verified'=>$is_verified);
					$this->load->view('templates/email_verification.php',$data);
				}
				else{
					redirect(base_url());
				}
			}
		}

	}

	public function generate_token(){
		$token = "";
		$codeAlphabet = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
		$codeAlphabet.= "abcdefghijklmnopqrstuvwxyz";
		$codeAlphabet.= "0123456789";
		$max = strlen($codeAlphabet);

		for ($i=0; $i < 20; $i++) {
			$token .= $codeAlphabet[random_int(0, $max-1)];
		}

		return $token;
	} 

	public function send_email_verification_mail(){

		$user_id = $this->session->userdata('user_id');
		$user_data = $this->account_model->get_user_data($user_id);

		$username = $user_data[0]['username'];
		$email = $user_data[0]['email'];
		$token = $this->generate_token();

		$mail = new PHPMailer;

		$mail->isSMTP();

		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'kingmp5555@gmail.com';
		$mail->Password = 'king#005';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$mail->setFrom('kingmp5555@gmail.com', 'Profileplex Messenger');
		$mail->addAddress($email);
		$mail->isHTML(true);

		$mail->Subject = 'Profileplex Messenger - Email verification';
		$mail->Body    = '
			<div style="width: 600px; font-family: Arial,sans-serif; margin: 8px auto; padding: 30px;border: 1px solid #cecece;border-radius: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.4);">
				<div style="margin-bottom: 10px;">
					<img src="https://i.ibb.co/HVxgNBw/Profileplex-messenger-logo.png" width="300px" alt="Profileplex Messenger Logo">
				</div>
				<div style="margin-bottom: 12px;">
					<span style="font-size:24px; font-weight:500;">Verify your email address</span>
				</div>
				<div style="margin-bottom: 30px;">
			    	<span style="font-size:15px; color:#333;">Hey '.$username.', You have created account on Profileplex Messenger with this email address. Please verify your email address to activate your account.</span>
				</div>
				<div style="margin-bottom: 10px;">
			    	<a href="'.base_url().'account/verification/?token='.$token.'&username='.$username.'" target="_blank" style="padding: 10px 20px;  background-color:#127af1;font-size:1.2em; color: #fff;text-decoration: none;border-radius:5px; cursor: pointer;">Verify email address</a>
				</div>
			</div>
			';

		if(!$mail->send()) {
		    echo 'Message could not be sent. Please try again';
		} else {
		   	$this->account_model->update_token($user_id, $token);
		   	redirect(base_url().'account/verification');
		}

	}

}