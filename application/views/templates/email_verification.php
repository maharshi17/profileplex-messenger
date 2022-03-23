<?php 
	
if(isset($userdata)){
	foreach($userdata as $key){
		$username = $key->username;
		$email = $key->email;
		$is_verified = $key->is_verified;
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8">
	<meta name="content-type" content="text/html, charset = utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	<title>Email verification | Profileplex messenger</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.ico">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Plex.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/primary.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="container-inner">
			<div class="logo-wrapper mv-16">
				<a href="<?php echo base_url(); ?>" title="Profileplex Messenger">
					<div class="logo w-100pr h-100pr">
						<span>Profileplex Messenger</span>
					</div>
				</a>
			</div>				
			<div class="email-verification-wrapper mh-auto ta-c">
				<div class="email-icon-wrapper">	
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="50" height="50">
						<path d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106 C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787 L338.213,256L482,112.212V399.787z"/>
					</svg>
				</div>
				<div class="c-black-900 fs-24 fw-500">Verify your email address</div>
				<div class="c-black-900 mv-20">Hey <?php echo $username; ?>, We have sent email verification link to <strong><div><?php echo $email; ?></div></strong></div>
				<div class="c-black-900 mv-20">Please go to your email and click on the verification link we sent. After clicking on that link, your Profileplex Messenger account will be activated and you will able to use all the features.</div>
				<div class="c-black-900 mt-30">Didn't get an email?</div>
				<form id="resend_email_form" action="<?php echo base_url(); ?>account/send_email_verification_mail" method="post">
					<button class="btn btn-primary mt-8" id="resend_email_btn">Resend email</button>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">
		$(document).ready(function(){
			$("#resend_email_form").on("submit",function(){
				$("#resend_email_btn").attr("disabled","disabled");
			});
		});
	</script>
</body>
</html>