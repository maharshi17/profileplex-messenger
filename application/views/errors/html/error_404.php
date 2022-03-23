<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8">
	<meta name="content-type" content="text/html, charset = utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	<title>Error 404 - Page not found</title>

	<link rel="shortcut icon" href="assets/favicon/favicon.ico">

	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/messenger.profileplex.com/assets/Css/plex.css">
	<link rel="stylesheet" type="text/css" href="http://127.0.0.1/messenger.profileplex.com/assets/css/primary.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
	<div class="container">
		<div class="container-inner">
			<div class="logo-wrapper mv-16">
				<a href="http://127.0.0.1/messenger.profileplex.com" title="Profileplex Messenger">
					<div class="logo w-100pr h-100pr">
						<span>Profileplex Messenger</span>
					</div>
				</a>
			</div>				
			<div class="error-page-wrapper mh-auto ta-c">
				<div class="error-svg-wrapper">
					<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" width="100px" height="100px">
					<path style="fill:#A8AFF1;" d="M512,45v286l-30,30H30L0,331V45C0,20.099,20.099,0,45,0h422C491.901,0,512,20.099,512,45z"/>
					<path style="fill:#8A93E6;" d="M512,45v286l-30,30H256V0h211C491.901,0,512,20.099,512,45z"/>
					<path style="fill:#004A7B;" d="M482,45v316H30V45c0-8.401,6.599-15,15-15h422C475.401,30,482,36.599,482,45z"/>
					<path style="fill:#00345B;" d="M482,45v316H256V30h211C475.401,30,482,36.599,482,45z"/>
					<path style="fill:#A8AFF1;" d="M328.9,368.2c-2.999-4.499-7.8,22.8-12.9,22.8H196c-5.099,0-9.901-27.299-12.9-22.8
						c-2.701,4.2-2.701,9.901-0.601,14.399l30,91C215.2,478.7,220.3,482,226,482h60c5.7,0,10.8-3.3,13.5-8.401l30-91
						C331.601,378.1,331.601,372.4,328.9,368.2z"/>
					<path style="fill:#8A93E6;" d="M328.9,368.2c2.701,4.2,2.701,9.901,0.601,14.399l-30,91C296.8,478.7,291.7,482,286,482h-30v-91h60
						C321.099,391,325.901,363.701,328.9,368.2z"/>
					<path style="fill:#E1E4FB;" d="M512,331v15c0,24.901-20.099,45-45,45H45c-24.901,0-45-20.099-45-45v-15H512z"/>
					<path style="fill:#C5C9F7;" d="M512,331v15c0,24.901-20.099,45-45,45H256v-60H512z"/>
					<path style="fill:#E1E4FB;" d="M391,497c0,8.401-6.599,15-15,15H136c-8.401,0-15-6.599-15-15c0-24.901,20.099-45,45-45h180
						C370.901,452,391,472.099,391,497z"/>
					<path style="fill:#C5C9F7;" d="M391,497c0,8.401-6.599,15-15,15H256v-60h90C370.901,452,391,472.099,391,497z"/>
					<path style="fill:#FD3C65;" d="M166,151c-8.291,0-15,6.709-15,15v15h-24.185l23.408-70.254c2.622-7.866-1.626-16.362-9.478-18.97
						c-7.954-2.651-16.348,1.611-18.97,9.478l-30,90c-1.538,4.57-0.762,9.609,2.051,13.521C96.654,208.686,101.181,211,106,211h45v15
						c0,8.291,6.709,15,15,15s15-6.709,15-15v-60C181,157.709,174.291,151,166,151z"/>
					<path style="fill:#FD003A;" d="M406,151c-8.291,0-15,6.709-15,15v15h-24.185l23.408-70.254c2.622-7.866-1.626-16.362-9.478-18.97
						c-7.939-2.651-16.362,1.611-18.97,9.478l-30,90c-1.538,4.57-0.762,9.609,2.051,13.521C336.654,208.686,341.181,211,346,211h45v15
						c0,8.291,6.709,15,15,15s15-6.709,15-15v-60C421,157.709,414.291,151,406,151z"/>
					<path style="fill:#FD3C65;" d="M256,91c-24.901,0-45,20.099-45,45v60c0,24.899,20.099,45,45,45s45-20.101,45-45v-60
						C301,111.099,280.901,91,256,91z M271,196c0,8.399-6.599,15-15,15s-15-6.601-15-15v-60c0-8.401,6.599-15,15-15s15,6.599,15,15V196z"
						/>
					<path style="fill:#FD003A;" d="M301,136v60c0,24.899-20.099,45-45,45v-30c8.401,0,15-6.601,15-15v-60c0-8.401-6.599-15-15-15V91
						C280.901,91,301,111.099,301,136z"/>
					</svg>
				</div>	
				<h3 class="fs-28">Oops! This page could not be found</h3>
				<p class="c-black-700">Sorry but the page you are looking for does not exists, have been removed. name changed or is temporarily unavailable.</p>
				<div class="mv-30">
					<button class="btn btn-primary-hollow td-n mr-6" onclick="window.history.back();">Go back</button>
					<a href="http://127.0.0.1/messenger.profileplex.com" class="btn btn-primary td-n ml-6">Go to home</a>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
