<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8">
	<meta name="content-type" content="text/html, charset = utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	<title>Sign up | Profileplex messenger</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.ico">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/Plex.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/primary.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/croppie.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://www.google.com/recaptcha/api.js" type="text/javascript" async defer></script>
	<script src="<?php echo base_url(); ?>assets/js/croppie.js" type="text/javascript"></script>
</head>
<body>
	<?php include_once('includes/header.inc.php'); ?>
	<div class="container">
		<div class="container-inner">
			<div class="signup-wrapper mv-20 mh-auto">
				<h1 class="c-black-900 fw-500">Create your account</h1>
				<p class="join-label c-black-700">Join Profileplex messenger today. It's free.</p>
				<form id="signup-form" class="mv-20" action="<?php echo base_url();?>signup/validation" method="post">
					<div class="mv-20">
						<div class="ta-l fs-18 fw-500">1. Account details</div>
						<div class="separator"></div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="username">Full name</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<input type="text" class="input input-normal" id="fullname" name="fullname" placeholder="Enter your full name">
									<div class="alert-wrapper" id="fullname-alert-wrapper"></div>
								</div>
							</div>
						</div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="username">Username</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<input type="text" class="input input-normal" id="username" name="username" placeholder="Enter your username">
									<div class="alert-wrapper" id="username-alert-wrapper"></div>
								</div>
							</div>
						</div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="email">Email address</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<input type="text" class="input input-normal" id="email" name="email" placeholder="Enter your email address">
									<div class="alert-wrapper" id="email-alert-wrapper"></div>
								</div>
							</div>
						</div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="password">Password</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<input type="password" class="input input-normal" id="password" name="password" placeholder="Enter your password">
									<div class="alert-wrapper" id="password-alert-wrapper"></div>
								</div>
							</div>
						</div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="confirm-password">Confirm password</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<input type="password" class="input input-normal" id="confirm-password" name="confirm-password" placeholder="Confirm your password">
									<div class="alert-wrapper" id="confirm-password-alert-wrapper"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mv-20">
						<div class="ta-l fs-18 fw-500">2. Profile details (Optional)</div>
						<div class="separator"></div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="gender">Gender</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<div class="dropdown-wrapper">
										<select class="dropdown" id="gender" name="gender">
											<option value="">Select your gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
											<option value="male1">Male1</option>
											<option value="Other">Other</option>
										</select>
										<div class="icon-dropdown-wrapper">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="icon-dropdown"><polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093"/></svg>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="dob-day">Date of birth</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper d-f">
									<div class="dropdown-wrapper mr-8 dob-day-dropdown-wrapper">
										<select class="dropdown" id="dob-day" name="dob-day">
											<option value="">Day</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
											<option value="7">7</option>
											<option value="8">8</option>
											<option value="9">9</option>
											<option value="10">10</option>
											<option value="11">11</option>
											<option value="12">12</option>
											<option value="13">13</option>
											<option value="14">14</option>
											<option value="15">15</option>
											<option value="16">16</option>
											<option value="17">17</option>
											<option value="18">18</option>
											<option value="19">19</option>
											<option value="20">20</option>
											<option value="21">21</option>
											<option value="22">22</option>
											<option value="23">23</option>
											<option value="24">24</option>
											<option value="25">25</option>
											<option value="26">26</option>
											<option value="27">27</option>
											<option value="28">28</option>
											<option value="29">29</option>
											<option value="30">30</option>
											<option value="31">31</option>
										</select>
										<div class="icon-dropdown-wrapper">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="icon-dropdown"><polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093"/></svg>
										</div>
									</div>
									<div class="dropdown-wrapper mh-8 dob-month-dropdown-wrapper">
										<select class="dropdown" id="dob-month" name="dob-month">
											<option value="">Month</option>
											<option value="Jan">January</option>
											<option value="Feb">February</option>
											<option value="Mar">March</option>
											<option value="Apr">April</option>
											<option value="May">May</option>
											<option value="Jun">June</option>
											<option value="Jul">July</option>
											<option value="Aug">August</option>
											<option value="Sept">September</option>
											<option value="Oct">October</option>
											<option value="Nov">November</option>
											<option value="Dec">December</option>
										</select>
										<div class="icon-dropdown-wrapper">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="icon-dropdown"><polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093"/></svg>
										</div>
									</div>
									<div class="dropdown-wrapper ml-8 dob-year-dropdown-wrapper">
										<select class="dropdown" id="dob-year" name="dob-year">
											<option value="">Year</option>
											<option value="2019">2019</option>
											<option value="2018">2018</option>
											<option value="2017">2017</option>
											<option value="2016">2016</option>
											<option value="2015">2015</option>
											<option value="2014">2014</option>
											<option value="2013">2013</option>
											<option value="2012">2012</option>
											<option value="2011">2011</option>
											<option value="2010">2010</option>
											<option value="2009">2009</option>
											<option value="2008">2008</option>
											<option value="2007">2007</option>
											<option value="2006">2006</option>
											<option value="2005">2005</option>
											<option value="2004">2004</option>
											<option value="2003">2003</option>
											<option value="2002">2002</option>
											<option value="2001">2001</option>
											<option value="2000">2000</option>
											<option value="1999">1999</option>
											<option value="1998">1998</option>
											<option value="1997">1997</option>
											<option value="1996">1996</option>
											<option value="1995">1995</option>
											<option value="1994">1994</option>
											<option value="1993">1993</option>
											<option value="1992">1992</option>
											<option value="1991">1991</option>
											<option value="1990">1990</option>
											<option value="1989">1989</option>
											<option value="1988">1988</option>
											<option value="1987">1987</option>
											<option value="1986">1986</option>
											<option value="1985">1985</option>
											<option value="1984">1984</option>
											<option value="1983">1983</option>
											<option value="1982">1982</option>
											<option value="1981">1981</option>
											<option value="1980">1980</option>
											<option value="1979">1979</option>
											<option value="1978">1978</option>
											<option value="1977">1977</option>
											<option value="1976">1976</option>
											<option value="1975">1975</option>
											<option value="1974">1974</option>
											<option value="1973">1973</option>
											<option value="1972">1972</option>
											<option value="1971">1971</option>
											<option value="1970">1970</option>
											<option value="1969">1969</option>
											<option value="1968">1968</option>
											<option value="1967">1967</option>
											<option value="1966">1966</option>
											<option value="1965">1965</option>
											<option value="1964">1964</option>
											<option value="1963">1963</option>
											<option value="1962">1962</option>
											<option value="1961">1961</option>
											<option value="1960">1960</option>
											<option value="1959">1959</option>
											<option value="1958">1958</option>
											<option value="1957">1957</option>
											<option value="1956">1956</option>
											<option value="1955">1955</option>
											<option value="1954">1954</option>
											<option value="1953">1953</option>
											<option value="1952">1952</option>
											<option value="1951">1951</option>
											<option value="1950">1950</option>
											<option value="1949">1949</option>
											<option value="1948">1948</option>
											<option value="1947">1947</option>
											<option value="1946">1946</option>
											<option value="1945">1945</option>
											<option value="1944">1944</option>
											<option value="1943">1943</option>
											<option value="1942">1942</option>
											<option value="1941">1941</option>
											<option value="1940">1940</option>
											<option value="1939">1939</option>
											<option value="1938">1938</option>
											<option value="1937">1937</option>
											<option value="1936">1936</option>
											<option value="1935">1935</option>
											<option value="1934">1934</option>
											<option value="1933">1933</option>
											<option value="1932">1932</option>
											<option value="1931">1931</option>
											<option value="1930">1930</option>
											<option value="1929">1929</option>
											<option value="1928">1928</option>
											<option value="1927">1927</option>
											<option value="1926">1926</option>
											<option value="1925">1925</option>
											<option value="1924">1924</option>
											<option value="1923">1923</option>
											<option value="1922">1922</option>
											<option value="1921">1921</option>
											<option value="1920">1920</option>
										</select>
										<div class="icon-dropdown-wrapper">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 256" class="icon-dropdown"><polygon points="225.813,48.907 128,146.72 30.187,48.907 0,79.093 128,207.093 256,79.093"/></svg>
										</div>
									</div>
								</div>
								<div class="alert-wrapper" id="dob-alert-wrapper"></div>
							</div>
						</div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="about">About you</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<textarea class="input input-normal textarea" id="about" name="about" rows="3" maxlength="150" placeholder="Describe about yourself"></textarea>
									<div class="ta-r">
										<span class="fs-14 c-black-700"><span id="about-letter-count">0</span>/150</span>
									</div>
									<div class="alert-wrapper" id="about-alert-wrapper"></div>
								</div>
							</div>
						</div>
					</div>
					<div class="mv-20">
						<div class="ta-l fs-18 fw-500">3. Profile photo (Optional)</div>
						<div class="separator"></div>
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-30">
									<label for="profile-photo">Profile photo</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="d-f ai-c">
									<img src="<?php echo base_url(); ?>assets/profile_photo/p200x200/default-profile-photo.jpg" width="200" height="200" class="img-circle img-bordered" id="cropped-profile-photo" alt="Profile photo">
									<div class="form-input-wrapper">
										<label class="btn btn-primary ml-16" for="profile-photo">Upload</label>
										<input type="file" class="d-n" id="profile-photo" accept=".png, .jpg, .jpeg">
										<input type="hidden" id="profile-photo-final" name="profile-photo">
									</div>
								</div>
								<div class="alert-wrapper" id="profile-photo-alert-wrapper"></div>
							</div>
						</div>
					<div class="mv-20">
						<div class="ta-l fs-18 fw-500">4. Human verification</div>
							<div class="separator"></div>
							<div class="w-100pr d-f mt-18">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-30">
										<label for="">Human verification</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="g-recaptcha" id="recaptcha" data-sitekey="6LdAVNQUAAAAABqQVjbWya1rceRQzDv8nBOugrav" data-callback="verify_captcha"></div>
									<div class="alert-wrapper" id="recaptcha-alert-wrapper"></div>
								</div>
							</div>
						</div>
					</div>	
					<div class="form-input-wrapper mv-10">
						<input type="submit" class="btn btn-success btn-expanded pv-12 fs-17" id="signup" name="signup" value="Sign up">
					</div>
					<div class="c-black-800  ta-c">Already have an account? <a href="<?php echo base_url(); ?>login" class="link fw-500" tabindex="0">Log in</a>.</div>
				</form>
			</div>
		</div>
	</div>
	
	<?php include_once('includes/footer.inc.php'); ?>

	<script type="text/javascript">
		$(document).ready(function(){

			var is_valid_fullname = false;
			var is_valid_username = false;
			var is_valid_email = false;
			var is_valid_password = false;
			var is_valid_confirm_password = false;
			var is_valid_dob = false;
			var is_valid_about = false;
			var is_valid_profile_photo = false;
			var is_valid_recaptcha = false;

			var fullname_errors = ["Please enter your full name.",
								   "Full name only contains letters."];
			var username_errors = ["Please enter your username.",
								   "Username should not contain space.",
								   "Username only contains letters, numbers, hyphens, underscores and periods.",
								   "This username isn't available. Please try another one."];

			var email_errors = ["Please enter your email.",
								"Please enter a valid email.",
								"This email is already in use. Please try another one."];

			var password_errors = ["Please enter your password.",
								   "Password must be 6 characters or more.",
								   "Both passwords do not match."];

			var dob_errors = ["Please select a valid Date of Birth."];

			var about_errors = ["It must be 150 characters or less."];

			var profile_photo_errors = ["Please choose jpg, jpeg or png image format."];

			var recaptcha_errors = ["Please fill the reCAPTCHA. It's required"];

			var error_icon_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 24 24\" class=\"alert-icon\"><path d=\"M12,0C5.373,0,0,5.373,0,12s5.373,12,12,12s12-5.373,12-12S18.627,0,12,0z M12,19.66 c-0.938,0-1.58-0.723-1.58-1.66c0-0.964,0.669-1.66,1.58-1.66c0.963,0,1.58,0.696,1.58,1.66C13.58,18.938,12.963,19.66,12,19.66z M12.622,13.321c-0.239,0.815-0.992,0.829-1.243,0c-0.289-0.956-1.316-4.585-1.316-6.942c0-3.11,3.891-3.125,3.891,0C13.953,8.75,12.871,12.473,12.622,13.321z\"></path></svg>";

			var crop_profile_photo_modal = '<div class="modal-overlay crop-profile-photo-overlay" tabindex="0">'+
												'<div class="modal-content crop-profile-photo-content">'+
													'<div class="modal-box">'+
														'<div class="modal-header">'+
															'<div class="modal-title">Crop Profile photo</div>'+
															'<div class="modal-close">'+
																'<button class="btn-icon btn-icon-default btn-icon-small" id="modal-close-btn" title="Close">'+
																	'<div class="icon-wrapper">'+
																		'<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="center icon-btn icon-gray">'+
																			'<g>'+
																				'<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242 C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879 s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>'+
																			'</g>'+
																		'</svg>'+
																	'</div>	'+
																'</button>'+
															'</div>'+
														'</div>'+
														'<div class="modal-body">'+
															'<div id="profile-photo-crop-viewer">'+
															'</div>'+
														'</div>'+
														'<div class="modal-footer">'+
															'<div class="modal-footer-content">'+
																'<div class="modal-footer-right-content">'+
																	'<div class="modal-footer-action">'+
																		'<button class="btn btn-primary"'+
																			'id="crop-done-btn">Done</button>'+
																	'</div>'+
																'<div class="modal-footer-action">'+
																	'<button class="btn btn-default"'+ 
																	'id="modal-close-btn">Close</button>'+
																'</div>'+
															'</div>'+
														'</div>'+
													'</div>'+
												'</div>'+
											'</div>'+
										'</div>'+
										'<script type="text/javascript">'+
											'$image_crop = $("#profile-photo-crop-viewer").croppie({'+
												'enableExif: true,'+
												'viewport: {'+
													'width: 200,'+
													'height: 200,'+
													'type: "square"'+
												'},'+
												'boundary: {'+
													'width: 300,'+
													'height: 300'+
												'}'+
											'});'+
										'<\/script>';

			function validate_fullname(){
				var fullname = $("#fullname").val().trim();
				var fullnameRegex = /^[a-zA-Z ]{1,30}$/;

				if(fullname == ""){
					$("#fullname").addClass("input-error");
					$("#fullname-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+fullname_errors[0]+"</span>\
															</div>\
														</div>");
					is_valid_fullname = false;
				}
				else if(!fullnameRegex.test(fullname)){
					$("#fullname").addClass("input-error");
					$("#fullname-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+fullname_errors[1]+"</span>\
															</div>\
														</div>");
					is_valid_fullname = false;
				}
				else{
					$("#fullname").removeClass("input-error");
					$("#fullname-alert-wrapper").html("");
					is_valid_fullname = true;
				}
			}	

			function validate_username(){
				var username = $("#username").val().trim();
				var usernameRegex = /^[a-z0-9._-]{1,30}$/;

				if(username == ""){
					$("#username").addClass("input-error");
					$("#username-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+username_errors[0]+"</span>\
															</div>\
														</div>");
					is_valid_username = false;
				}
				else if(username.indexOf(" ") >= 0){
					$("#username").addClass("input-error");
					$("#username-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+username_errors[1]+"</span>\
															</div>\
														</div>");
					is_valid_username = false;
				}
				else if(!usernameRegex.test(username)){
					$("#username").addClass("input-error");
					$("#username-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+username_errors[2]+"</span>\
															</div>\
														</div>");
					is_valid_username = false;
				}
				else{
					// $("#username").removeClass("input-error");
					// $("#username-alert-wrapper").html("");
					// is_valid_username = true;

					$.ajax({
						type: "post",
						url: "<?php echo base_url(); ?>signup/check_username",
						dataType: "text",
						data: {username:username},
						success: function(response){
							if(response == 1){
								$("#username").addClass("input-error");
								$("#username-alert-wrapper").html("<div class=\"d-f\">\
																	<div class=\"alert-icon-wrapper\">\
																		"+error_icon_svg+"\
																		</div>\
																		<div class=\"alert-text-wrapper\">\
																			<span class=\"alert-text\">"+username_errors[3]+"</span>\
																		</div>\
																	</div>");
								is_valid_username = false;
							}
							else{
								$("#username").removeClass("input-error");
								$("#username-alert-wrapper").html("");
								is_valid_username = true;
							}
						}
					});
				}

			}

			function validate_email(){
				var email = $("#email").val().trim();
				var emailRegex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

				if(email == ""){
					$("#email").addClass("input-error");
					$("#email-alert-wrapper").html("<div class=\"d-f\">\
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
					$("#email-alert-wrapper").html("<div class=\"d-f\">\
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
							if(response == 1){
								$("#email").addClass("input-error");
								$("#email-alert-wrapper").html("<div class=\"d-f\">\
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
								$("#email-alert-wrapper").html("");
								is_valid_email = true;
							}
						}
					});
				}
			}

			function validate_password(){
				var password = $("#password").val().trim();

				if(password == ""){
					$("#password").addClass("input-error");
					$("#password-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[0]+"</span>\
															</div>\
														</div>");
					is_valid_password = false;
				}
				else if($("#password").val().length < 6){
					$("#password").addClass("input-error");
					$("#password-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[1]+"</span>\
															</div>\
														</div>");
					is_valid_password = false;
				}
				else{
					$("#password").removeClass("input-error");
					$("#password-alert-wrapper").html("");
					is_valid_password = true;
				}

			}

			function validate_confirm_password(){
				var password = $("#password").val().trim();
				var confirm_password = $("#confirm-password").val().trim();

				if(confirm_password == "" || password != confirm_password){
					$("#confirm-password").addClass("input-error");
					$("#confirm-password-alert-wrapper").html("<div class=\"d-f\">\
														<div class=\"alert-icon-wrapper\">\
															"+error_icon_svg+"\
															</div>\
															<div class=\"alert-text-wrapper\">\
																<span class=\"alert-text\">"+password_errors[2]+"</span>\
															</div>\
														</div>");
					is_valid_confirm_password = false;
				}
				else{
					$("#confirm-password").removeClass("input-error");
					$("#confirm-password-alert-wrapper").html("");
					is_valid_confirm_password = true;
				}
			}

			function validate_dob(){
				var dob_day = $("#dob-day").val();
				var dob_month = $("#dob-month").val();
				var dob_year = $("#dob-year").val();

				if(dob_day == "" && dob_month == "" && dob_year == ""){
					$("#dob-alert-wrapper").html("");
					is_valid_dob = true;
				}
				else if(dob_day != "" && dob_month != "" && dob_year != ""){
					$("#dob-alert-wrapper").html("");
					is_valid_dob = true;
				}
				else{
					$("#dob-alert-wrapper").html("<div class=\"d-f\">\
													<div class=\"alert-icon-wrapper\">\
														"+error_icon_svg+"\
														</div>\
														<div class=\"alert-text-wrapper\">\
															<span class=\"alert-text\">"+dob_errors[0]+"</span>\
														</div>\
													</div>");
					is_valid_dob = false;
				}
			}

			function validate_about(){
				var aboutLength = $("#about").val().length;

				if(aboutLength <= 150) {
					$("#about").removeClass("input-error");
					$("#about-alert-wrapper").html("");
					is_valid_about = true;
				}
				else {
					$("#about").addClass("input-error");
					$("#about-alert-wrapper").html("<div class=\"d-f\">\
													<div class=\"alert-icon-wrapper\">\
														"+error_icon_svg+"\
														</div>\
														<div class=\"alert-text-wrapper\">\
															<span class=\"alert-text\">"+about_errors[0]+"</span>\
														</div>\
													</div>");
					is_valid_about = false;
				}
			}

			$("#about").on("keydown keyup",function(){
				var about = $(this).val();
				var aboutLength = about.length;

				$("#about-letter-count").html(aboutLength);
			});

			function validate_profile_photo(){

				var filePath = $("#profile-photo").val();
				var fileExtension = filePath.split('.')[1];

				if(fileExtension == "jpg" || fileExtension == "jpeg" || fileExtension == "png"){
					$("#profile-photo-alert-wrapper").html("");
					is_valid_profile_photo = true;
				}
				else{
					$("#profile-photo-alert-wrapper").html("<div class=\"d-f\">\
													<div class=\"alert-icon-wrapper\">\
														"+error_icon_svg+"\
														</div>\
														<div class=\"alert-text-wrapper\">\
															<span class=\"alert-text\">"+profile_photo_errors[0]+"</span>\
														</div>\
													</div>");
					is_valid_profile_photo = false;
				}

			}

			function validate_recaptcha(){
				var response = grecaptcha.getResponse();

				if(response.length == 0){
					$("#recaptcha").addClass("input-error");
					$("#recaptcha-alert-wrapper").html("<div class=\"d-f\">\
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
					$("#recaptcha-alert-wrapper").html("");
					is_valid_recaptcha = true;
				}
			}

			/* Profile photo */
			
			$("#profile-photo").on("change",function(){

				validate_profile_photo();

				if(is_valid_profile_photo == true){
					var reader = new FileReader();
					reader.onload = function(event){
						$image_crop.croppie("bind",{
							url: event.target.result
						})
					}
					reader.readAsDataURL(this.files[0]);

					$("body").css("overflow","hidden");
					$("body").append(crop_profile_photo_modal);
					$(".crop-profile-photo-overlay").fadeIn(100).css("display","flex").focus();
				}

			});

			$("body").on("click","#crop-done-btn",function(){

				$image_crop.croppie("result", {
			    	type: "canvas",
			    	size: "viewport"
				}).then(function(response){

					$("#cropped-profile-photo").attr("src",response);
			    	$("#profile-photo-final").attr("value",response);

					close_modal();
			    	
			    })
			});

			/* Close modal */
			$("body").on("click","#modal-close-btn",function(){
				close_modal();
			});

			function close_modal(){
				$("#profile-photo").val("");
				$(".crop-profile-photo-overlay").css("display","none");
				$(".crop-profile-photo-overlay").remove();
				$("body").css("overflow","auto");
			}

			$(window).on("click",function(e){
				if($(e.target).is($(".crop-profile-photo-overlay"))){
			   		close_modal();
			  	}
			});

			$(document).keydown(function(e) {
			    if (e.key === "Escape") {
			    	if($(".crop-profile-photo-overlay").css("display") == "flex"){
			    		close_modal();
			    	}
			    }
			});

			/* On blur validation */
			$("#fullname").on("blur",function(){
				validate_fullname();
			});
			$("#username").on("blur",function(){
				validate_username();
			});

			$("#email").on("blur",function(){
				validate_email();
			});

			$("#password").on("blur",function(){
				validate_password();
			});

			$("#confirm-password").on("blur",function(){
				validate_confirm_password();
			});

			$("#signup-form").on("submit",function(){

				validate_fullname();
				validate_username();
				validate_email();
				validate_password();
				validate_confirm_password();
				validate_dob();
				validate_about();
				validate_recaptcha();

				if(is_valid_fullname === true && is_valid_username === true && is_valid_email === true && is_valid_password === true && is_valid_confirm_password === true && is_valid_dob === true && is_valid_about === true && is_valid_recaptcha === true){
					$("#signup").attr("disabled","disabled");
					return true;
				}
				else{
					if(is_valid_fullname === false){
						$("#fullname").focus();
					}
					else if(is_valid_username === false){
						$("#username").focus();
					}
					else if(is_valid_email === false){
						$("#email").focus();
					}
					else if(is_valid_password === false){
						$("#password").focus();
					}
					else if(is_valid_confirm_password === false){
						$("#confirm-password").focus();
					}
					else if(is_valid_about === false){
						$("#about").focus();
					}
					
					return false;
				}
			});
		});
	</script>
</body>
</html>