<?php 

use PHPMailer\PHPMailer\PHPMailer;

defined('BASEPATH') or exit('No direct script access allowed');

class Password_reset extends CI_Controller{

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');

		require_once 'phpmailer-6/src/PHPMailer.php';
		require_once 'phpmailer-6/src/SMTP.php';
		require_once 'phpmailer-6/src/Exception.php';

		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('password_reset_model');

	}

	public function validation(){

		$this->form_validation->set_rules('email','Email','required');
		if($this->form_validation->run()){

			$email = htmlentities($this->input->post("email"));
			$user_data = $this->password_reset_model->get_user_data($email);
			$token = $this->generate_token();

			if(empty($user_data)){
				show_404();
			}
			else{
				$username = $user_data[0]['username'];
				$is_verified = $user_data[0]['is_verified'];

				if($is_verified == 1){
					$this->send_email($username, $email, $token);
				}
				else{
					redirect(base_url().'password_reset');
				}
			}
		}
		else{
			redirect(base_url().'password_reset');
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

	public function send_email($username, $email, $token){

		$mail = new PHPMailer;

		$mail->isSMTP();
		$mail->Host = 'smtp.gmail.com';
		$mail->SMTPAuth = true;
		$mail->Username = 'kingmp5555@gmail.com';
		$mail->Password = 'king#005';
		$mail->SMTPSecure = 'tls';
		$mail->Port = 587;

		$mail->setFrom('kingmp5555@gmail.com', 'Profileplex Messenger');
		$mail->addAddress($email);     // Add a recipient
		$mail->isHTML(true);

		$mail->Subject = 'Profileplex Messenger - Reset password request';
		$mail->Body    = '
			<div style="width: 600px; font-family: Arial,sans-serif; margin: 8px auto; padding: 30px;border: 1px solid #cecece;border-radius: 10px; box-shadow: 0 1px 3px rgba(0,0,0,0.4);">
				<div style="margin-bottom: 10px;">
					<img src="https://i.ibb.co/HVxgNBw/Profileplex-messenger-logo.png" width="300px" alt="Profileplex Messenger Logo">
				</div>
				<div style="margin-bottom: 12px;">
					<span style="font-size:24px; font-weight:500;">Reset your password</span>
				</div>
				<div style="margin-bottom: 30px;">
			    	<span style="font-size:15px; color:#333;">Hey '.$username.', We found that you forgot your password of account linked with '.$email.'. To reset your password please click on the link below.</span>
				</div>
				<div style="margin-bottom: 10px;">
			    	<a href="'.base_url().'password_reset/change_password/?token='.$token.'&username='.$username.'" target="_blank" style="padding: 10px 20px;  background-color:#127af1;font-size:1.2em; color: #fff;text-decoration: none;border-radius:5px; cursor: pointer;">Reset password</a>
				</div>
			</div>
			';

		if(!$mail->send()) {
		    echo 'Mail could not be sent. Please try again.';
		} else {
			$this->password_reset_model->update_token($email,$token);
			$this->session->set_flashdata('email_sent_message','We have sent an email with reset password link to '.$email.'. Please check your email.');
			redirect(base_url().'password_reset');
		}

	}

	public function change_password(){

		$username = $_GET['username'];

		$url_token = $_GET['token'];
		$actual_token = $this->password_reset_model->get_token($username);

		if(empty($actual_token)){
			show_404();
		}
		else{
			if($url_token == $actual_token){
				$this->load->view('templates/change_password');
			}
			else{
				redirect(base_url());
			}
		}

	}

	public function set_password(){

		$username = htmlentities($this->input->post("username"));
		$password = htmlentities(md5($this->input->post("password")));
		$confirm_password = md5($this->input->post("confirm_password"));

		if($password == $confirm_password){
			$this->password_reset_model->set_password($username,$password);
			$this->session->set_flashdata('password_set_message','Your password has been changed successfully.');
			redirect(base_url().'login');
		}

	}
}