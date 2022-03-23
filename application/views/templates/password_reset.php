<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8">
	<meta name="content-type" content="text/html, charset = utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	<title>Password reset | Profileplex messenger</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.ico">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/plex.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/Primary.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<?php include_once('includes/header.inc.php'); ?>
	<div class="container">
		<div class="container-inner">
			<div class="password-reset-wrapper mv-30 mh-auto">
				<div class="c-black-900 fs-24 fw-500">Reset your password</div>
				<p class="password-reset-desc mt-6 fs-15 c-black-700">Enter your user account's verified email address and we will send you a password reset link.</p>
				<form id="forgot_pass_form" class="mv-16" method="post" action="<?php base_url(); ?>password_reset/validation">
					<div class="mt-14">
						<input type="text" class="input input-normal" id="email" name="email" placeholder="Enter your email address">
					</div>
					<div class="alert-wrapper" id="email_alert_wrapper"></div>
					<div class="mt-8">
						<div class="g-recaptcha" id="recaptcha" data-sitekey="6LdAVNQUAAAAABqQVjbWya1rceRQzDv8nBOugrav" data-callback="verify_captcha"></div>
					</div>
					<div class="alert-wrapper" id="recaptcha_alert_wrapper"></div>
					<div class="form-input-wrapper mt-20">
						<input type="submit" class="btn btn-primary pv-10" id="reset_pass_btn" value="Reset password">
					</div>
				</form>
			</div>
		</div>
		<?php if($this->session->flashdata('email_sent_message')){ ?>
		<div class="snackbar-wrapper">
			<div class="snackbar">
				<div class="snackbar-inner" style="width: 1000px;">
					<div class="snackbar-text"><?php echo $this->session->flashdata('email_sent_message'); ?></div>
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
	<script type="text/javascript">

		var is_valid_email = false;
		var is_valid_recaptcha = false;

		var email_errors = ["Please enter your email.",
								"Please enter a valid email.",
								"We couldn't find your account with that email."];
		var recaptcha_errors = ["Please fill the reCAPTCHA. It's required"];

		var error_icon_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"alert-icon\"><path d=\"M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z M12,19.66 c-0.938,0-1.58-0.723-1.58-1.66c0-0.964,0.669-1.66,1.58-1.66c0.963,0,1.58,0.696,1.58,1.66C13.58,18.938,12.963,19.66,12,19.66z M12.622,13.321c-0.239,0.815-0.992,0.829-1.243,0c-0.289-0.956-1.316-4.585-1.316-6.942c0-3.11,3.891-3.125,3.891,0C13.953,8.75,12.871,12.473,12.622,13.321z\"></path></svg>";

		function validate_email(){

			var email = $("#email").val().trim();
			var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

			if(email == ""){
				$("#email").addClass("input-error");
				$("#email_alert_wrapper").html("<div class=\"d-f\">\
													<div class=\"alert-icon-wrapper\">\
														"+error_icon_svg+"\
														</div>\
														<div class=\"alert-text-wrapper\">\
															<span class=\"alert-text\">"+email_errors[0]+"</span>\
														</div>\
													</div>");
				is_valid_email = false;
			}
			else if(!emailRegex.test(email)){
				$("#email").addClass("input-error");
				$("#email_alert_wrapper").html("<div class=\"d-f\">\
													<div class=\"alert-icon-wrapper\">\
														"+error_icon_svg+"\
														</div>\
														<div class=\"alert-text-wrapper\">\
															<span class=\"alert-text\">"+email_errors[1]+"</span>\
														</div>\
													</div>");
				is_valid_email = false;
			}
			else{
				$.ajax({
					type: "post",
					url: "<?php echo base_url(); ?>signup/check_email",
					dataType: "text",
					data: {email:email},
					success: function(response){
						if(response == 0){
							$("#email").addClass("input-error");
							$("#email_alert_wrapper").html("<div class=\"d-f\">\
																<div class=\"alert-icon-wrapper\">\
																	"+error_icon_svg+"\
																	</div>\
																	<div class=\"alert-text-wrapper\">\
																	<span class=\"alert-text\">"+email_errors[2]+"\
																	</span>\
																	</div>\
																</div>");
							is_valid_email = false;
						}
						else{
							$("#email").removeClass("input-error");
							$("#email_alert_wrapper").html("");
							is_valid_email = true;
						}
					}
				});
			}
		}

		function validate_recaptcha(){
			var response = grecaptcha.getResponse();

			if(response.length == 0){
				$("#recaptcha").addClass("input-error");
				$("#recaptcha_alert_wrapper").html("<div class=\"d-f\">\
												<div class=\"alert-icon-wrapper\">\
													"+error_icon_svg+"\
													</div>\
													<div class=\"alert-text-wrapper\">\
														<span class=\"alert-text\">"+recaptcha_errors[0]+"</span>\
													</div>\
												</div>");
				is_valid_recaptcha = false;
			}
			else{
				$("#recaptcha").removeClass("input-error");
				$("#recaptcha_alert_wrapper").html("");
				is_valid_recaptcha = true;
			}
		}

		$("#email").on("blur",function(){
			validate_email();
		});

		$("#forgot_pass_form").on("submit",function(){

			is_valid_recaptcha = false;

			validate_email();
			validate_recaptcha();

			if(is_valid_email === true && is_valid_recaptcha === true){
				$("#reset_pass_btn").attr("disabled","disabled");
				return true;
			}
			else{
				if(is_valid_email === false){
					$("#email").focus();
				}
				return false;
			}

		});

	</script>
	<?php include_once('includes/footer.inc.php'); ?>
</body>
</html>