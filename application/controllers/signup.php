<?php 

use PHPMailer\PHPMailer\PHPMailer;

defined('BASEPATH') or exit('No direct script access allowed');

class Signup extends CI_Controller{

	function __construct(){

		parent::__construct();
		date_default_timezone_set('Asia/Kolkata');

		require_once 'phpmailer-6/src/PHPMailer.php';
		require_once 'phpmailer-6/src/SMTP.php';
		require_once 'phpmailer-6/src/Exception.php';

		$this->load->library('form_validation');
		$this->load->library('session');

		$this->load->model('signup_model');

	}

	public function check_username(){

		$username = $this->input->post('username');
		$exists = $this->signup_model->check_username($username);
		$count = count($exists);

		echo $count;

	}

	public function check_email(){

		$email = $this->input->post('email');
		$exists = $this->signup_model->check_email($email);
		$count = count($exists);

		echo $count;

	}

	public function validation(){
	
		$this->form_validation->set_rules('fullname','Full name','required');
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('email','Email address','required');
		$this->form_validation->set_rules('password','Password','required');
		$this->form_validation->set_rules('confirm-password','Confirm password','required');

		if($this->form_validation->run()){
			$this->insert_user_record();
		}
		else{
			$this->load->view('templates/signup');
		}

	}

	public function insert_user_record(){

		/* User data */
		$fullname = htmlentities($this->input->post("fullname"));
		$username = htmlentities($this->input->post("username"));
		$email = htmlentities($this->input->post("email"));
		$password = htmlentities(md5($this->input->post("password")));

		$gender = htmlentities($this->input->post("gender"));

		$dob_day = htmlentities($this->input->post("dob-day"));
		$dob_month = htmlentities($this->input->post("dob-month"));
		$dob_year = htmlentities($this->input->post("dob-year"));
		$dob = $dob_day." ".$dob_month." ".$dob_year;

		$about = htmlentities($this->input->post("about"));

		if (isset($_POST['profile-photo']) && !empty($_POST['profile-photo'])){
			$profile_photo = $this->input->post("profile-photo");
			$profile_photo_name = uniqid().uniqid().'.jpg';

			$split = explode('/', $profile_photo);
			$split2 = explode(':', $split[0]);
			// $fileType = $split2[1];
			$split3 = explode(';', $split[1]);
			$fileExtension = $split3[0];

			$photo_array_1 = explode(";",$profile_photo);
			$photo_array_2 = explode(",",$photo_array_1[1]);

			$finalPhoto = base64_decode($photo_array_2[1]);
			file_put_contents('upload/profile_photo/p200x200/'.$profile_photo_name.'', $finalPhoto);
			
			$this->resize_and_upload_photo($profile_photo, $fileExtension, $profile_photo_name);
		}
		else{
			$profile_photo_name = '';
		}

		$token = $this->generate_token();
		$created_at = date('j M Y');

		$userData = array(
			"full_name"		=> $fullname,
			"username"		=> $username,
			"email"			=> $email,
			"password"		=> $password,
			"profile_photo" => $profile_photo_name,
			"gender"		=> $gender,
			"dob"			=> $dob,
			"about"			=> $about,
			"token"			=> $token,
			"created_at"	=> $created_at
		);

		$this->signup_model->insert_user_record($userData);
		$userid = $this->db->insert_id();

		/* Set session */
		$sess_data = array(
					'user_id' => $userid
					);
		$this->session->set_userdata($sess_data);
		$this->send_email_verification_mail($username,$email,$token);

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

	public function send_email_verification_mail($username,$email,$token){

		$mail = new PHPMailer;

		//$mail->SMTPDebug = 3;                               // Enable verbose debug output

		$mail->isSMTP();                                      // Set mailer to use SMTP
		$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
		$mail->SMTPAuth = true;                               // Enable SMTP authentication
		$mail->Username = 'kingmp5555@gmail.com';                 // SMTP username
		$mail->Password = 'king#005';                           // SMTP password
		$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
		$mail->Port = 587;                                    // TCP port to connect to

		$mail->setFrom('kingmp5555@gmail.com', 'Profileplex Messenger');
		$mail->addAddress($email);     // Add a recipient
		// $mail->addAddress('ellen@example.com');               // Name is optional
		// $mail->addReplyTo('info@example.com', 'Information');
		// $mail->addCC('cc@example.com');
		// $mail->addBCC('bcc@example.com');

		//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
		$mail->isHTML(true);                                  // Set email format to HTML

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
		// $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

		if(!$mail->send()) {
		    echo 'Mail could not be sent. Please try again.';
		} else {
			redirect(base_url().'account/verification');
		}

	}

} 