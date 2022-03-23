<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8">
	<meta name="content-type" content="text/html, charset = utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	<title>Log in | Profileplex messenger</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.ico">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/plex.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/Primary.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<?php include_once('includes/header.inc.php'); ?>
	<div class="container">
		<div class="container-inner">
			<div class="login-wrapper mv-30 mh-auto">
				<div class="c-black-900 fs-24 fw-500">Log in</div>
				<form id="login_form" class="mv-16 ta-c" method="post" action="<?php echo base_url();?>login/validation">
					<div class="mv-14">
						<input type="text" class="input input-normal" id="username_email" name="username_email" placeholder="Username or email address" value="<?php echo $this->session->flashdata('username_email'); ?>">
					</div>
					<div class="mv-14">
						<input type="password" class="input input-normal" id="password" name="password" placeholder="Password">
					</div>
					<?php if($this->session->flashdata('login_error_message')){ ?>
						<div class="alert-wrapper d-f" id="login-alert-wrapper">
							<div class="alert-icon-wrapper">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="alert-icon">
									<path d="M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z M12,19.66 c-0.938,0-1.58-0.723-1.58-1.66c0-0.964,0.669-1.66,1.58-1.66c0.963,0,1.58,0.696,1.58,1.66C13.58,18.938,12.963,19.66,12,19.66z M12.622,13.321c-0.239,0.815-0.992,0.829-1.243,0c-0.289-0.956-1.316-4.585-1.316-6.942c0-3.11,3.891-3.125,3.891,0C13.953,8.75,12.871,12.473,12.622,13.321z"></path>
								</svg>
							</div>
							<div class="alert-text-wrapper">
								<span class="alert-text"><?php echo $this->session->flashdata('login_error_message'); ?></span>
							</div>
						</div>
					<?php } ?>
					<div class="form-input-wrapper mt-20">
						<input type="submit" class="btn btn-primary btn-expanded pv-10" id="login_btn" name="login_btn" value="Log in" disabled>
					</div>
					<div><a href="<?php echo base_url(); ?>password_reset" class="link fw-500">Forgot password?</a></div>
					<div class="mv-10">Or</div>
					<div class="c-black-800">Don't have an account? <a href="<?php echo base_url() ?>signup" class="link fw-500" tabindex="0">Sign up</a>.</div>
				</form>
			</div>
		</div>
		<?php if($this->session->flashdata('password_set_message')){ ?>
		<div class="snackbar-wrapper">
			<div class="snackbar">
				<div class="snackbar-inner" style="width: 1000px;">
					<div class="snackbar-text"><?php echo $this->session->flashdata('password_set_message'); ?></div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<script type="text/javascript">
		
		$(document).ready(function(){

			var is_valid_username = false;
			var is_valid_password = false;

			function check_username(){
				if($("#username_email").val().length > 0){
					if($("#password").val().length > 6){
						$("#login_btn").removeAttr("disabled");
						is_valid_username = true;
						is_valid_password = true;
					}
					else{
						$("#login_btn").attr("disabled","disabled");
						is_valid_username = true;
						is_valid_password = false;
					}
				}
				else{
					$("#login_btn").attr("disabled","disabled");
					is_valid_username = false;
				}
			}

			function check_password(){
				if($("#password").val().length > 6){
					if($("#username_email").val().length > 0){
						$("#login_btn").removeAttr("disabled");
						is_valid_username = true;
						is_valid_password = true;
					}
					else{
						$("#login_btn").attr("disabled","disabled");
						is_valid_username = false;
						is_valid_password = true;
					}
				}
				else{
					$("#login_btn").attr("disabled","disabled");
					is_valid_password = false;
				}
			}

			$("#username_email").on("keydown keyup",function(){
				check_username();
			});

			$("#password").on("keydown keyup",function(){
				check_password();
			});

			$("#login_form").on("submit",function(){

				is_valid_username = false;
				is_valid_password = false;

				check_username();
				check_password();

				if(is_valid_username === true && is_valid_password === true){	
					return true;
				}
				else{
					return false;
				}

			});

		});

	</script>
	<?php include_once('includes/footer.inc.php'); ?>
</body>
</html>