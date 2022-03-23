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
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/Primary.css">

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
			<div class="change-password-wrapper mh-auto">
				<div class="c-black-900 fs-24 fw-500">Reset password</div>
				<form id="reset_pass_form" class="mv-16" method="post" action="<?php echo base_url(); ?>password_reset/set_password">
					<input type="hidden" name="username" value="<?php echo $_GET['username']; ?>">
					<div class="mv-14">
						<input type="password" class="input input-normal" id="password" name="password" placeholder="Enter a new password" autofocus="true">
					</div>
					<div class="mv-14">
						<input type="password" class="input input-normal" id="confirm_password" name="confirm_password" placeholder="Confirm a new password">
						<div class="alert-wrapper" id="password_alert_wrapper"></div>
					</div>
					<div class="form-input-wrapper mt-20">
						<input type="submit" class="btn btn-primary btn-expanded pv-10" id="change_pass_btn" name="change_pass_btn" value="Reset password">
					</div>
				</form>
			</div>
		</div>
	</div>
	<script type="text/javascript">

		$(document).ready(function(){

			$("#reset_pass_form").on("submit",function(){

				var password = $("#password").val().trim();
				var confirm_password = $("#confirm_password").val().trim();

				var password_errors = ["Please enter your password.",
									"Password must be 6 characters or more.",
									"Please confirm your password.",
								   	"Both passwords do not match."];

				var error_icon_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"alert-icon\"><path d=\"M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z M12,19.66 c-0.938,0-1.58-0.723-1.58-1.66c0-0.964,0.669-1.66,1.58-1.66c0.963,0,1.58,0.696,1.58,1.66C13.58,18.938,12.963,19.66,12,19.66z M12.622,13.321c-0.239,0.815-0.992,0.829-1.243,0c-0.289-0.956-1.316-4.585-1.316-6.942c0-3.11,3.891-3.125,3.891,0C13.953,8.75,12.871,12.473,12.622,13.321z\"></path></svg>";

				if(password == ""){
					$("#password").focus();
					$("#password").addClass("input-error");
					$("#password_alert_wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[0]+"</span>\
															</div>\
														</div>");
					return false;
				}
				else if($("#password").val().length < 6){
					$("#password").focus();
					$("#password").addClass("input-error");
					$("#password_alert_wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[1]+"</span>\
															</div>\
														</div>");
					return false;
				}
				else if(confirm_password == ""){
					$("#confirm_password").focus();
					$("#confirm_password").addClass("input-error");
					$("#password_alert_wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[2]+"</span>\
															</div>\
														</div>");
					return false;
				}
				else if(confirm_password != password){
					$("#password").select();
					$("#confirm_password").val("");
					$("#confirm_password").addClass("input-error");
					$("#password_alert_wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[3]+"</span>\
															</div>\
														</div>");
					return false;
				}
				else{
					$("#change_pass_btn").attr("disabled","disabled");
					$("#password_alert_wrapper").html("");
					$("#password").removeClass("input-error");
					$("#password").blur();
					$("#confirm_password").removeClass("input-error");
					$("#confirm_password").blur();
					return true;
				}

				return false;				
			});

		});

	</script>
	<?php include_once('includes/footer.inc.php'); ?>
</body>
</html>