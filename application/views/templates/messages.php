<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta charset="utf-8">
	<meta name="content-type" content="text/html, charset = utf-8">
	<meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, minimum-scale=1.0">

	<title>Profileplex messenger</title>

	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/favicon/favicon.ico">

	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/css/plex.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>Assets/Css/primary.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/Css/croppie.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>assets/css/emojionearea.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/Emojionearea.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/croppie.js" type="text/javascript"></script>
</head>
<body class="message-body">
	<div class="d-f w-100pr">
		<div class="sidebar-wrapper">
			<div class="sidebar-inner">
				<header class="sidebar-header pos-r p-16 d-f ai-c">
					<div class="sidebar-profile-photo-wrapper">
						<img src="<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg" class="w-100pr h-100pr img-circle img-bordered" id="sidebar_header_profile_photo" alt="Profile photo">
					</div>
					<div class="sidebar-name-wrapper">
						<div class="seach-result-username ov-h to-e ws-nw">
							<span class="fs-17 fw-500 c-black-900" id="sidebar_header_username"></span>
						</div>
						<div class="fs-16 c-black-700 ov-h to-e ws-nw">
							<span class="fs-15 c-black-700" id="sidebar_header_fullname"></span>
						</div>
					</div>
					<div class="sidebar-option-btn-wrapper pos-a mt-4">
						<div class="pos-r">
							<button class="btn-icon btn-icon-default" id="account_option_btn">
								<div class="icon-wrapper">	
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="center icon-btn icon-gray">
										<circle cx="256" cy="256" r="64"/>
										<circle cx="256" cy="448" r="64"/>
										<circle cx="256" cy="64" r="64"/>
									</svg>
								</div>	
							</button>
							<div class="options-listbox pos-a card card-shadow listbox without-icon" id="account_option_listbox">
								<ul class="list list-vertical">
									<li class="list-option">
										<div class="list-content" id="session_view_profile">
											<div class="list-text-wrapper">
												<div class="list-text">View profile</div>
											</div>
										</div>
									</li>
									<li class="list-option">
										<div class="list-content" id="session_edit_profile">
											<div class="list-text-wrapper">
												<div class="list-text">Edit profile</div>
											</div>
										</div>
									</li>
									<li class="list-option">
										<div class="list-content" id="session_settings">
											<div class="list-text-wrapper">
												<div class="list-text">Settings</div>
											</div>
										</div>
									</li>
									<li><div class="separator"></div></li>
									<li class="list-option">
										<form id="logout_form" action="<?php echo base_url(); ?>logout" method="post">
											<a href="#" role="submit" class="list-content" id="logout_link">
												<div class="list-text-wrapper">
													<div class="list-text">Log out</div>
												</div>
											</a>
										</form>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</header>
				<div class="sidebar-tab-wrapper w-100pr d-f">
					<button class="sidebar-tab-btn active-tab" id="chat_tab_btn" title="Chats" data-tabname="chats">
						<div class="mv-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 511.999 511.999" class="tab-icon">
								<path d="M510.156,401.843L480.419,315.3c14.334-29.302,21.909-61.89,21.96-94.679c0.088-57.013-21.97-110.92-62.112-151.79
									C400.117,27.953,346.615,4.942,289.615,4.039C230.51,3.105,174.954,25.587,133.187,67.353
									c-40.274,40.273-62.612,93.366-63.319,150.102C30.174,247.341,6.745,293.936,6.822,343.705
									c0.037,23.29,5.279,46.441,15.212,67.376L1.551,470.689c-3.521,10.247-0.949,21.373,6.713,29.035
									c5.392,5.393,12.501,8.264,19.812,8.264c3.076,0,6.188-0.508,9.223-1.551l59.609-20.483c20.935,9.933,44.086,15.175,67.376,15.212
									c0.084,0,0.164,0,0.248,0c50.51-0.002,97.46-24.035,127.237-64.702c30.987-0.816,61.646-8.317,89.363-21.876l86.544,29.738
									c3.606,1.239,7.304,1.843,10.959,1.843c8.688,0,17.136-3.412,23.545-9.822C511.284,427.242,514.34,414.021,510.156,401.843z
									 M164.53,470.69c-0.065,0-0.134,0-0.199,0c-20.614-0.031-41.085-5.113-59.196-14.695c-3.724-1.969-8.096-2.31-12.078-0.942
									l-61.123,21.003l21.003-61.122c1.368-3.983,1.028-8.355-0.942-12.078c-9.582-18.112-14.664-38.582-14.696-59.197
									c-0.051-33.159,12.848-64.588,35.405-88.122c7.368,44.916,28.775,86.306,61.957,118.898
									c32.937,32.351,74.339,52.949,119.011,59.683C230.084,457.367,198.288,470.69,164.53,470.69z M480.628,414.797
									c-0.867,0.867-1.895,1.103-3.051,0.705l-92.648-31.836c-1.609-0.553-3.283-0.827-4.951-0.827c-2.459,0-4.909,0.595-7.126,1.769
									c-26.453,13.994-56.345,21.416-86.447,21.462c-0.099,0-0.189,0-0.288,0c-100.863,0-184.176-81.934-185.774-182.773
									c-0.805-50.785,18.513-98.514,54.394-134.395c35.881-35.881,83.618-55.192,134.396-54.392
									c100.936,1.601,182.926,85.068,182.77,186.063c-0.047,30.102-7.468,59.995-21.461,86.446c-1.97,3.723-2.31,8.095-0.942,12.078
									l31.835,92.648C481.732,412.905,481.494,413.932,480.628,414.797z"/>
								<path d="M376.892,139.512h-181.56c-8.416,0-15.238,6.823-15.238,15.238c0,8.416,6.823,15.238,15.238,15.238h181.56
									c8.416,0,15.238-6.823,15.238-15.238C392.13,146.335,385.308,139.512,376.892,139.512z"/>
								<path d="M376.892,202.183h-181.56c-8.416,0-15.238,6.823-15.238,15.238s6.823,15.238,15.238,15.238h181.56
									c8.416,0,15.238-6.823,15.238-15.238S385.308,202.183,376.892,202.183z"/>
								<path d="M307.004,264.852H195.331c-8.416,0-15.238,6.823-15.238,15.238c0,8.416,6.823,15.238,15.238,15.238h111.672
									c8.416,0,15.238-6.823,15.238-15.238C322.241,271.675,315.42,264.852,307.004,264.852z"/>
							</svg>
						</div>
						<div class="mb-4 fs-15">Chats</div>
					</button>
					<button class="sidebar-tab-btn" id="favourites_tab_btn" title="Favourites" data-tabname="favourites">
						<div class="mv-2">	
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 -10 512.0002 512" class="tab-icon"><path d="m387.53125 491.144531c-8.816406 0-17.632812-2.792969-25.324219-8.382812l-98.507812-71.570313c-4.605469-3.34375-10.792969-3.34375-15.398438 0l-98.507812 71.570313c-15.386719 11.179687-35.265625 11.179687-50.652344 0-15.382813-11.179688-21.527344-30.085938-15.652344-48.175781l37.625-115.800782c1.761719-5.414062-.152343-11.296875-4.757812-14.644531l-98.503907-71.566406c-15.386718-11.179688-21.53125-30.089844-15.65625-48.175781 5.878907-18.085938 21.964844-29.773438 40.980469-29.773438h121.761719c5.691406 0 10.699219-3.636719 12.457031-9.050781l37.625-115.800781c5.878907-18.085938 21.964844-29.773438 40.980469-29.773438s35.101562 11.6875 40.980469 29.773438l37.625 115.800781c1.757812 5.414062 6.765625 9.050781 12.457031 9.050781h121.761719c19.015625 0 35.101562 11.6875 40.980469 29.773438 5.875 18.085937-.269532 36.996093-15.65625 48.175781l-98.503907 71.566406c-4.605469 3.347656-6.519531 9.230469-4.757812 14.644531l37.625 115.800782c5.875 18.089843-.269531 36.996093-15.652344 48.175781-7.691406 5.589843-16.511719 8.382812-25.328125 8.382812zm-131.53125-112.46875c8.875 0 17.753906 2.753907 25.328125 8.257813l98.503906 71.566406c7.148438 5.191406 13.59375 1.3125 15.398438 0 1.808593-1.3125 7.488281-6.246094 4.757812-14.644531l-37.625-115.800781c-5.785156-17.808594.503907-37.167969 15.652344-48.171876l98.507813-71.570312c7.144531-5.191406 5.445312-12.523438 4.757812-14.644531-.691406-2.125-3.628906-9.050781-12.457031-9.050781h-121.761719c-18.722656 0-35.191406-11.964844-40.976562-29.773438l-37.628907-115.804688c-2.726562-8.394531-10.222656-9.050781-12.457031-9.050781s-9.730469.65625-12.457031 9.050781l-37.628907 115.804688c-5.785156 17.808594-22.253906 29.773438-40.976562 29.773438h-121.761719c-8.828125 0-11.765625 6.925781-12.457031 9.050781-.691406 2.121093-2.386719 9.453125 4.757812 14.644531l98.507813 71.566406c15.148437 11.007813 21.4375 30.367188 15.652344 48.175782l-37.628907 115.800781c-2.726562 8.398437 2.953126 13.332031 4.761719 14.644531 1.804688 1.3125 8.253907 5.191406 15.398438 0l98.503906-71.566406c7.574219-5.503906 16.449219-8.257813 25.328125-8.257813zm0 0"/></svg>
							</svg>
						</div>
						<div class="mb-4 fs-15">Favourites</div>
					</button>
					<button class="sidebar-tab-btn" id="archived_tab_btn" title="Archived" data-tabname="archived">
						<div class="mv-2">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512.001 512.001" class="tab-icon">
								<path d="M454.122,180.501l55.296-81.584c2.637-3.89,3.298-8.791,1.785-13.241c-1.512-4.45-5.021-7.934-9.482-9.413l-181-60
									c-6.413-2.125-13.454,0.297-17.2,5.918l-47.52,71.279L208.482,22.18c-3.747-5.621-10.788-8.043-17.201-5.918l-181,60
									c-4.461,1.479-7.971,4.963-9.483,9.413s-0.851,9.351,1.786,13.242l55.296,81.584L2.585,262.085
									c-2.637,3.891-3.298,8.792-1.786,13.242c1.512,4.45,5.022,7.934,9.483,9.413l50.719,16.812v119.949
									c0,6.457,4.131,12.188,10.256,14.23l179.936,59.978c3.015,1.02,6.371,1.089,9.6,0.006l179.951-59.984
									c6.125-2.042,10.257-7.774,10.257-14.23V301.552l50.72-16.813c4.461-1.479,7.971-4.963,9.482-9.413
									c1.513-4.45,0.852-9.351-1.785-13.242L454.122,180.501z M322.138,48.339l151.321,50.162l-43.498,64.176l-150.586-50.195
									L322.138,48.339z M38.543,98.5l151.321-50.162l42.762,64.143L82.041,162.676L38.543,98.5z M38.544,262.501l43.497-64.176
									l150.586,50.195l-42.762,64.143C164.343,304.203,55.83,268.232,38.544,262.501z M241.001,460.689l-150-50v-99.192l100.28,33.242
									c6.372,2.112,13.43-0.261,17.201-5.918l32.519-48.778V460.689z M256.001,224.689l-132.566-44.189l132.566-44.188l132.566,44.188
									L256.001,224.689z M421.001,410.689l-150,50V290.042l32.52,48.779c3.773,5.66,10.832,8.029,17.2,5.918l100.28-33.242V410.689z
									 M322.138,312.664l-42.763-64.143l150.586-50.195l43.498,64.177C470.879,263.357,326.6,311.173,322.138,312.664z"/>
							</svg>
						</div>
						<div class="mb-4 fs-15">Archived</div>
					</button>
				</div>
				<div class="main-tab-wrapper" id="chats_tab_wrapper">
					<div class="p-16">
						<div class="fs-26 fw-700 c-black-800">Chats</div>
						<div class="pos-r mv-8">
							<input type="text" class="input input-normal search-input" id="chat_search" placeholder="Search chats">
							<div class="search-icon-wrapper">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56.966 56.966" class="search-icon">
									<path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23
										s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92
										c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17
										s-17-7.626-17-17S14.61,6,23.984,6z"/>
								</svg>
							</div>
							<div class="clear-icon-wrapper">
								<div class="clear-search-btn" id="clear_search_btn">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="clear-icon">
										<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88
											c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242
											C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879
											s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
									</svg>
								</div>
							</div>
						</div>
					</div>
					<div class="chat-wrapper pos-r ovy-auto scroll">
						<div class="w-100pr h-100pr" id="chat-list">
							<!-- Chat list shows here -->
						</div>
						<div class="search-result-overlay w-100pr h-100pr ovy-auto scroll" id="search_result_overlay">
							<ul class="list list-vertical" id="search_result_wrapper">
								<div class="pos-a t-50pr l-50pr tf-center">
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="loader" preserveAspectRatio="xMidYMid">
										<circle cx="50" cy="50" fill="none" stroke="#127af1" stroke-width="6" r="30" stroke-dasharray="141.37166941154067 49.12388980384689" transform="rotate(184.244 50 50)">
											<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.9900990099009901s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
										</circle>
									</svg>
								</div>
							</ul>
						</div>
					</div>
				</div>
				<div class="main-tab-wrapper d-n" id="favourites_tab_wrapper">
					<div class="p-16">
						<div class="fs-26 fw-700 c-black-800">Favourites</div>
					</div>
					<div class="favourites-wrapper pos-r ovy-auto scroll">
						<div class="w-100pr h-100pr" id="favourites-list">
							<!-- Favourites List shows here -->
						</div>
					</div>
				</div>
				<div class="main-tab-wrapper d-n" id="archived_tab_wrapper">
					<div class="p-16">
						<div class="fs-26 fw-700 c-black-800">Archived</div>
					</div>
					<div class="archived-wrapper pos-r ovy-auto scroll">
						<div class="w-100pr h-100pr" id="archived-list">
							<!-- archived list shows here -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="messages-wrapper">
			<div class="messages-inner pos-r" id="message_inner_wrapper">

				<div class="pos-a t-0 r-0 b-0 l-0 w-100pr h-100pr bgc-white z-8" id="loading_container">
					<div class="pos-a t-50pr l-50pr tf-center">
						<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="loader" preserveAspectRatio="xMidYMid">'+
							<circle cx="50" cy="50" fill="none" stroke="#127af1" stroke-width="6" r="30" stroke-dasharray="141.37166941154067 49.12388980384689" transform="rotate(184.244 50 50)">
							<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.9900990099009901s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>
						</circle>
						</svg>
					</div>
				</div>

				<div class="pos-a t-0 r-0 b-0 l-0 w-100pr h-100pr bgc-white z-10" id="welcome_message_container">
					<div class="messages-welcome-wrapper pos-r" id="welcome_messages_wrapper">
						<div class="messages-welcome-content ta-c">
							<div class="logo-wrapper message-welcome-logo">
								<div class="logo w-100pr h-100pr"></div>
							</div>
							<div class="fs-30 c-black-900 fw-700">Hey, Welcome !</div>
							<div class="c-black-700">Thanks for joining Profileplex Messenger. Search and add your friends and start chat with them.</div>
							<div class="mv-20">
								<button class="btn btn-success" id="search_chat_btn">Search chat</button>
							</div>
						</div>
					</div>
				</div>


				<div id="chat_messages_container">
					<div class="messages-user-header ph-16 pv-10 d-f ai-c" id="user_header_info">
						<div class="messages-header-profile-photo-wrapper">
							<img src="<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg" class="messages-header-profile-photo img-circle img-bordered" id="chat_profile_photo" width="50" height="50" alt="Profile photo">
						</div>
						<div class="messages-header-text-wrapper ph-16">
							<div class="messages-header-username ov-h ws-nw to-e">
								<span class="fs-18 fw-500 c-black-900" id="chat_username"></span>
							</div>
							<div class="messages-header-status ov-h ws-nw to-e">
								<span class="fs-15 c-black-700" id="chat_status"></span>
							</div>
						</div>
						<div class="messages-header-option-wrapper pos-r">
							<button class="btn-icon btn-icon-default btn-icon-large mt-10" id="chat_option_btn">
								<div class="icon-wrapper">	
									<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="center icon-btn icon-gray">
										<circle cx="256" cy="256" r="64"/>
										<circle cx="256" cy="448" r="64"/>
										<circle cx="256" cy="64" r="64"/>
									</svg>
								</div>	
							</button>
							<div class="chat-option pos-a card card-shadow listbox without-icon" id="chat_option" data-chat-userid="">
								<ul class="list list-vertical">
									<li class="list-option">
										<div class="list-content" id="user_view_profile">
											<div class="list-text-wrapper">
												<div class="list-text">View profile</div>
											</div>
										</div>
									</li>
									<li class="list-option">
										<div id="is_user_archived">

										</div>
									</li>
									<li class="list-option">
										<div class="list-content" id="delete_user">
											<div class="list-text-wrapper">
												<div class="list-text">Delete</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="messages-main-wrapper ov-auto scroll" id="messages_main_wrapper">
						<div class="messages-main-content pos-r pv-12 ph-12" id="messages_main_content">	
						
						</div>
					</div>
					<div class="messages-footer-wrapper" id="message_footer_wrapper">
						<div class="messages-footer-content p-16">
							<div class="pos-r d-f ai-c">
								<div class="pos-r w-100pr" id="footer_input_wrapper" style="max-width: 95.3%;">
									<textarea class="message-text-input textarea input input-solid scroll" name="" id="message_text_input" rows="1" placeholder="Type a message..."></textarea>
								</div>
								<div class="message-send-btn-wrapper">
									<button class="message-send-btn btn-icon btn-icon-primary btn-icon-large" id="message_send_btn" title="Send message">
										<div class="icon-wrapper" style="width: 45%; height: 45%;">	
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 485.725 485.725" class="center icon-btn icon-white">
													<path d="M459.835,196.758L73.531,9.826C48.085-2.507,17.46,8.123,5.126,33.569c-6.289,12.975-6.815,28-1.449,41.384
														l60.348,150.818h421.7C481.285,213.048,471.972,202.611,459.835,196.758z"/>
													<path d="M64.025,259.904L3.677,410.756c-10.472,26.337,2.389,56.177,28.726,66.65c5.963,2.371,12.319,3.603,18.736,3.631
														c7.754,0,15.408-1.75,22.391-5.12l386.304-187c12.137-5.854,21.451-16.291,25.89-29.013H64.025z"/>
											</svg>
										</div>	
									</button>
									<button class="message-speech-btn btn-icon btn-icon-primary btn-icon-large" id="message_speech_btn" title="Speech to text" data-isactive="false">
										<div class="icon-wrapper" style="width: 45%; height: 45%;">
											<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 475.085 475.085" class="center icon-btn icon-white">
												<path d="M237.541,328.897c25.128,0,46.632-8.946,64.523-26.83c17.888-17.884,26.833-39.399,26.833-64.525V91.365
													c0-25.126-8.938-46.632-26.833-64.525C284.173,8.951,262.669,0,237.541,0c-25.125,0-46.632,8.951-64.524,26.84
													c-17.893,17.89-26.838,39.399-26.838,64.525v146.177c0,25.125,8.949,46.641,26.838,64.525
													C190.906,319.951,212.416,328.897,237.541,328.897z"/>
												<path d="M396.563,188.15c-3.606-3.617-7.898-5.426-12.847-5.426c-4.944,0-9.226,1.809-12.847,5.426
													c-3.613,3.616-5.421,7.898-5.421,12.845v36.547c0,35.214-12.518,65.333-37.548,90.362c-25.022,25.03-55.145,37.545-90.36,37.545
													c-35.214,0-65.334-12.515-90.365-37.545c-25.028-25.022-37.541-55.147-37.541-90.362v-36.547c0-4.947-1.809-9.229-5.424-12.845
													c-3.617-3.617-7.895-5.426-12.847-5.426c-4.952,0-9.235,1.809-12.85,5.426c-3.618,3.616-5.426,7.898-5.426,12.845v36.547
													c0,42.065,14.04,78.659,42.112,109.776c28.073,31.118,62.762,48.961,104.068,53.526v37.691h-73.089
													c-4.949,0-9.231,1.811-12.847,5.428c-3.617,3.614-5.426,7.898-5.426,12.847c0,4.941,1.809,9.233,5.426,12.847
													c3.616,3.614,7.898,5.428,12.847,5.428h182.719c4.948,0,9.236-1.813,12.847-5.428c3.621-3.613,5.431-7.905,5.431-12.847
													c0-4.948-1.81-9.232-5.431-12.847c-3.61-3.617-7.898-5.428-12.847-5.428h-73.08v-37.691
													c41.299-4.565,75.985-22.408,104.061-53.526c28.076-31.117,42.12-67.711,42.12-109.776v-36.547
													C401.998,196.049,400.185,191.77,396.563,188.15z"/>
											</svg>
										</div>
									</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Profile markup start -->
		<div class="profile-wrapper d-n">
			<div class="profile-inner pos-r h-100pr pos-r">
				<!-- Private Profile markup start -->
				<div id="private_profile_content" style="display: none;">
					<div class="pos-r p-16">
						<span class="fs-22 fw-500 c-black-800">Profile</span>
						<button class="btn-icon btn-icon-default pos-a" style="right: 15px" id="profile_close_btn1">
						<div class="icon-wrapper">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="center icon-btn icon-gray">
								<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path>
							</svg>
						</div>
						</button>
					</div>
					<div class="private-profile-wrapper">
						<div class="private-profile-icon-wrapper">
							<svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" viewBox="0 0 486.733 486.733" class="pos-a t-50pr l-50pr tf-center"><path d="M403.88,196.563h-9.484v-44.388c0-82.099-65.151-150.681-146.582-152.145c-2.225-0.04-6.671-0.04-8.895,0C157.486,1.494,92.336,70.076,92.336,152.175v44.388h-9.485c-14.616,0-26.538,15.082-26.538,33.709v222.632c0,18.606,11.922,33.829,26.539,33.829h321.028c14.616,0,26.539-15.223,26.539-33.829V230.272C430.419,211.646,418.497,196.563,403.88,196.563z M273.442,341.362v67.271c0,7.703-6.449,14.222-14.158,14.222H227.45c-7.71,0-14.159-6.519-14.159-14.222v-67.271c-7.477-7.36-11.83-17.537-11.83-28.795c0-21.334,16.491-39.666,37.459-40.513c2.222-0.09,6.673-0.09,8.895,0c20.968,0.847,37.459,19.179,37.459,40.513C285.272,323.825,280.919,334.002,273.442,341.362z M331.886,196.563h-84.072h-8.895h-84.072v-44.388c0-48.905,39.744-89.342,88.519-89.342c48.775,0,88.521,40.437,88.521,89.342V196.563z" fill="#444"/></svg>
						</div>
						<div class="mt-20 ta-c">
							<span class="fs-22 fw-500">Private Profile</span>
						</div>
						<div class="mt-2 ta-c">
							<span class="c-black-800">This is a Private Profile. You can't see this.</span>
						</div>
					</div>
				</div>
				<!-- Private Profile markup end -->
				<!-- Public Profile markup start -->
				<div id="public_profile_content">
					<div class="profile-header">
						<div class="pos-r p-16">
							<span class="fs-22 fw-500 c-black-800">Profile</span>
							<button class="btn-icon btn-icon-default pos-a" style="right: 15px" id="profile_close_btn2">
							<div class="icon-wrapper">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="center icon-btn icon-gray">
									<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"></path>
								</svg>
							</div>
							</button>
						</div>
						<div class="profile-photo-wrapper mv-18">
							<img src="" class="w-100pr h-100pr img-circle img-bordered" id="profile_profile_photo" alt="Profile photo">
						</div>
						<div class="ta-c mb-18">
							<div class="">
								<span class="fs-24 fw-500 c-black-900" id="profile_username"></span>
							</div>
							<div>
								<span class="fs-16 c-black-700" id="profile_full_name"></span>
							</div>
						</div>
					</div>
					<div class="profile-content ovy-s scroll">
						<div class="p-16" id="tab_profile_content">
							<div class="mb-14">
								<div class="mv-4" id="profile_about"></div>
							</div>
							<div class="separator"></div>
							<div class="mv-16">
								<div class="d-f ai-c">
									<label class="fs-17 fw-500 c-black-700">Date of Birth</label>
								</div>
								<div>
									<span class="fs-16 c-black-800" id="profile_dob"></span>
								</div>
							</div>
							<div class="mv-16">
								<div class="d-f ai-c">
									<label class="fs-17 fw-500 c-black-700">Gender</label>
								</div>
								<div>
									<span class="fs-16 c-black-800" id="profile_gender"></span>
								</div>
							</div>
							<div class="mv-16">
								<div class="d-f ai-c">
									<label class="fs-17 fw-500 c-black-700">Joined</label>
								</div>
								<div>
									<span class="fs-16 c-black-800" id="profile_joined"></span>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Public Profile markup end -->
			</div>
		</div>
		<!-- Profile markup end -->
	</div>

	<!-- Edit profile markup start -->
	<div class="modal-overlay d-n" id="edit_profile_modal_overlay">
		<div class="modal-content">
			<div class="modal-box">
				<div class="modal-header">
					<div class="modal-title">Edit profile</div>
					<div class="modal-close">
						<button class="btn-icon btn-icon-default btn-icon-small" id="edit_profile_modal_close_btn" title="Close">
							<div class="icon-wrapper">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="center icon-btn icon-gray">
									<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242 C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879 s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
								</svg>
							</div>
						</button>
					</div>
				</div>
				<div class="modal-body">
					<div class="mv-10">
						<div class="edit-profile-profile-photo-wrapper br-50pr mb-10 mh-auto ov-h">
							<img src="" class="w-100pr h-100pr" id="edit_profile_profile_photo" data-ischanged="0" alt="Profile photo">
						</div>
						<div class="alert-wrapper" id="profile-photo-alert-wrapper"></div>
						<div class="mt-16 ta-c">
							<label class="btn btn-primary" for="profile-photo">Change Profile photo</label>
							<input type="file" class="d-n" id="profile-photo" accept=".png, .jpg, .jpeg">
							<input type="hidden" id="previous_profile_photo" value="">
							<button class="btn btn-danger-hollow" id="remove_profile_photo_btn">Remove</button>
						</div>
					</div>
					<div class="edit-profile-input-wrapper mt-16">
						<div class="w-100pr d-f">
							<div class="signup-left-col ta-r">
								<div class="fw-500 c-black-900 mt-18">
									<label for="gender">Gender</label>
								</div>
							</div>
							<div class="signup-right-col ta-l">
								<div class="form-input-wrapper">
									<div class="dropdown-wrapper">
										<select class="dropdown" id="edit_profile_gender" name="gender">
											<option value="">Select your gender</option>
											<option value="Male">Male</option>
											<option value="Female">Female</option>
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
										<select class="dropdown" id="edit_profile_dob_day" name="dob-day">
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
										<select class="dropdown" id="edit_profile_dob_month" name="dob-month">
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
										<select class="dropdown" id="edit_profile_dob_year" name="dob-year">
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
									<textarea class="input input-normal textarea" id="edit_profile_about" name="about" rows="3" maxlength="150" placeholder="Describe about yourself"></textarea>
									<div class="ta-r">
										<span class="fs-14 c-black-700"><span id="about-letter-count">0</span>/150</span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<div class="modal-footer-content">
						<div class="modal-footer-right-content">
							<div class="modal-footer-action">
								<button class="btn btn-primary" id="edit_profile_modal_save_btn">Save</button>
							</div>
							<div class="modal-footer-action">
								<button class="btn btn-default" id="edit_profile_modal_close_btn2">Close</button>
							</div>
						</div>
					</div>
				</div>	
			</div>
		</div>
	</div>
	<!-- Edit profile markup end -->

	<!-- Settings markup start -->
	<div class="modal-overlay d-n" id="settings_modal_overlay">
		<div class="modal-content" style="width: 700px;">
			<div class="modal-box">
				<div class="modal-header">
					<div class="modal-title">Settings</div>
					<div class="modal-close">
						<button class="btn-icon btn-icon-default btn-icon-small" id="settings_modal_close_btn" title="Close">
							<div class="icon-wrapper">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47.971 47.971" class="center icon-btn icon-gray">
									<path d="M28.228,23.986L47.092,5.122c1.172-1.171,1.172-3.071,0-4.242c-1.172-1.172-3.07-1.172-4.242,0L23.986,19.744L5.121,0.88 c-1.172-1.172-3.07-1.172-4.242,0c-1.172,1.171-1.172,3.071,0,4.242l18.865,18.864L0.879,42.85c-1.172,1.171-1.172,3.071,0,4.242 C1.465,47.677,2.233,47.97,3,47.97s1.535-0.293,2.121-0.879l18.865-18.864L42.85,47.091c0.586,0.586,1.354,0.879,2.121,0.879 s1.535-0.293,2.121-0.879c1.172-1.171,1.172-3.071,0-4.242L28.228,23.986z"/>
								</svg>
							</div>
						</button>
					</div>
				</div>
				<div class="settings-body d-f">
					<div class="settings-sidebar-wrapper">
						<div class="d-b w-100pr">
							<button class="settings-sidebar-tab w-100pr ta-l active-sidebar-tab" id="general_settings_tab" role="tab" data-tabname="general_settings">General settings</button>
						</div>
						<div class="d-b w-100pr">
							<button class="settings-sidebar-tab w-100pr ta-l" role="tab" id="change_password_tab" data-tabname="change_password">Change password</button>
						</div>
						<div class="d-b w-100pr">
							<button class="settings-sidebar-tab w-100pr ta-l" role="tab" id="privacy_tab" data-tabname="privacy">Privacy</button>
						</div>
						<div class="d-b w-100pr">
							<button class="settings-sidebar-tab w-100pr ta-l" role="tab" id="delete_account_tab" data-tabname="delete_account">Delete your account</button>
						</div>
					</div>
					<div class="settings-content-wrapper">
						<!-- General settings tab content -->
						<div class="settings-content p-12 h-100pr active-settings-content" id="general_settings_content">
							<div class="mb-12">
								<span class="fs-22 fw-700 c-black-900">General settings</span>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-18">
										<label for="settings_full_name">Full name</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<input type="text" class="input input-normal" id="settings_full_name">
										<div class="alert-wrapper" id="settings-full-name-alert-wrapper"></div>
									</div>
								</div>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-18">
										<label for="settings_username">Username</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<input type="text" class="input input-normal" id="settings_username">
										<div class="alert-wrapper" id="settings-username-alert-wrapper"></div>
									</div>
								</div>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-18">
										<label for="settings_email">Email</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<input type="text" class="input input-normal" id="settings_email">
										<div class="alert-wrapper" id="settings-email-alert-wrapper"></div>
									</div>
								</div>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r"></div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<button class="btn btn-primary" id="general_settings_save_btn">Save</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Change password tab content -->
						<div class="settings-content p-12 h-100pr" id="change_password_content">
							<div class="mb-12">
								<span class="fs-22 fw-700 c-black-900">Change Password</span>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-18">
										<label for="current_password">Current Password</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<input type="password" class="input input-normal" id="current_password">
										<div class="alert-wrapper" id="current-password-alert-wrapper"></div>
									</div>
								</div>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-18">
										<label for="new_password">New Password</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<input type="password" class="input input-normal" id="new_password">
										<div class="alert-wrapper" id="new-password-alert-wrapper"></div>
									</div>
								</div>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r">
									<div class="fw-500 c-black-900 mt-6">
										<label for="confirm_password">Confirm New Password</label>
									</div>
								</div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<input type="password" class="input input-normal" id="confirm_password">
										<div class="alert-wrapper" id="confirm-password-alert-wrapper"></div>
									</div>
								</div>
							</div>
							<div class="w-100pr d-f">
								<div class="signup-left-col ta-r"></div>
								<div class="signup-right-col ta-l">
									<div class="form-input-wrapper">
										<button class="btn btn-primary" id="change_password_save_btn">Change Password</button>
									</div>
								</div>
							</div>
						</div>
						<!-- Privacy tab content -->
						<div class="settings-content p-12 h-100pr" id="privacy_content">
							<div class="mb-12">
								<span class="fs-22 fw-700 c-black-900">Privacy</span>
							</div>
							<div class="d-f ai-c">
								<div class="privacy-text-wrapper">
									<div>
										<label for="private_profile_switch" class="fs-18 c-black-900 fw-500">Private Profile</label>
									</div>
									<div style="line-height: 1.2em;">
										<label for="private_profile_switch" class="fs-15 c-black-700">If you set your profile as a private profile, no one will able to see your profile except you.</label>
									</div>
								</div>
								<div class="privacy-switch-wrapper ta-r">
									<label class="switch" for="private_profile_switch">
										<input type="checkbox" id="private_profile_switch"/>
										<div class="slider round"></div>
									</label>
								</div>
							</div>
						</div>
						<!-- Delete account tab content -->
						<div class="settings-content p-12 h-100pr" id="delete_account_content">
							<div class="mb-12">
								<span class="fs-22 fw-700 c-black-900">Delete your account</span>
							</div>
							<div class="mv-10">
								<div class="mv-10">
									<span class="fs-15 c-black-700" style="line-height: 1.3em;">Once you delete your account, all your data from this site will be removed permanently.</span>
								</div>
								<div class="mv-10">
									<span class="fs-15 c-black-700" style="line-height: 1.3em;">You have to enter your current password to delete your account.</span>
								</div>
								<form id="delete_account_form" method="post" action="<?php echo base_url();?>messages/update_settings/delete_account">
									<div class="d-f">
										<div class="signup-left-col ta-r">
											<div class="fw-500 c-black-900 mt-20">
												<label for="delete_account_current_password">Current Password</label>
											</div>
										</div>
										<div class="signup-right-col ta-l">
											<div class="form-input-wrapper">
												<input type="password" class="input input-normal" id="delete_account_current_password">
												<div class="alert-wrapper" id="delete-account-confirm-password-alert-wrapper"></div>
											</div>
										</div>
									</div>
									<div class="mt-14">
										<button type="submit" class="btn btn-danger" id="delete_account_btn" name="delete_account_btn">Delete an account</button>
									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Settings markup end -->

	<!-- Snackbar markup start -->
	<div class="snackbar-wrapper" id="snackbar" style="display:none;">
		<div class="snackbar">
			<div class="snackbar-inner p-4">
				<div class="snackbar-text" id="snackbar_text"></div>
			</div>
		</div>
	</div>
	<!-- Snackbar markup end -->



	<script type="text/javascript">

		$(document).ready(function(){

			var session_id = "<?php echo $_SESSION['user_id'];?>";

			var date = new Date();

			var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
			var day = date.getDate();
			var month = monthNames[date.getMonth()];
			var year = date.getFullYear();

			var hours = date.getHours();
			var minutes = date.getMinutes();
			var ampm = hours >= 12 ? 'PM' : 'AM';
			hours = hours % 12;
			hours = hours ? hours : 12;
			minutes = minutes < 10 ? '0'+minutes : minutes;

			var currentDate = day+" "+month+", "+year;
			var currentTime = hours + ':' + minutes + ' ' + ampm;

			var unsend_message_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M256,0C114.498,0,0,114.509,0,256c0,141.502,114.509,256,256,256c141.502,0,256-114.509,256-256 C512,114.498,397.491,0,256,0z M256,467.478C139.39,467.478,44.522,372.61,44.522,256S139.39,44.522,256,44.522 S467.478,139.39,467.478,256S372.61,467.478,256,467.478z\" fill=\"#555\"/></svg>";

			var sent_message_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\"><path d=\"M437.019,74.98C388.667,26.629,324.38,0,256,0C187.619,0,123.332,26.629,74.98,74.98C26.629,123.332,0,187.62,0,256 s26.629,132.667,74.98,181.019C123.332,485.371,187.62,512,256,512s132.667-26.629,181.019-74.98 C485.371,388.667,512,324.38,512,256S485.371,123.333,437.019,74.98z M378.306,195.073L235.241,338.139 c-2.929,2.929-6.768,4.393-10.606,4.393c-3.839,0-7.678-1.464-10.607-4.393l-80.334-80.333c-5.858-5.857-5.858-15.354,0-21.213 c5.857-5.858,15.355-5.858,21.213,0l69.728,69.727l132.458-132.46c5.857-5.858,15.355-5.858,21.213,0 C384.164,179.718,384.164,189.215,378.306,195.073z\" fill=\"#555\"/></svg>";

			var seen_message_svg = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 469.333 469.333\"><path d=\"M234.667,170.667c-35.307,0-64,28.693-64,64s28.693,64,64,64s64-28.693,64-64S269.973,170.667,234.667,170.667z\" fill=\"#555\"/><path d=\"M234.667,74.667C128,74.667,36.907,141.013,0,234.667c36.907,93.653,128,160,234.667,160c106.773,0,197.76-66.347,234.667-160C432.427,141.013,341.44,74.667,234.667,74.667z M234.667,341.333c-58.88,0-106.667-47.787-106.667-106.667S175.787,128,234.667,128s106.667,47.787,106.667,106.667S293.547,341.333,234.667,341.333z\" fill=\"#555\"/></svg>";

			$.ajax({
				type: "post",
				url : "get_session_user_data",
				dataType: "json",
				success: function(data){
					$.each(data, function(index, element){
						if(element.profile_photo == ''){
							var profile_photo = "<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg";
						}
						else{
							var profile_photo = "<?php echo base_url(); ?>upload/profile_photo/p100x100/"+element.profile_photo;
						}

						$("#sidebar_header_profile_photo").attr("src",profile_photo);
						$("#sidebar_header_username").html(element.username);
						$("#sidebar_header_fullname").html(element.full_name);
			        });
				}
			});

			$.ajax({
				type: "post",
				url : "get_initial_chat",
				dataType: "json",
				success: function(data){
					$("#loading_container").css("display","none");
					if(data == 0){
						$("#welcome_message_container").css("display","block");
					}
					else{
						$("#welcome_message_container").css("display","none");
						$("#chat_messages_container").css("display","block");
						$("#messages_main_wrapper").scrollTop($("#messages_main_content").height());

						var user_id;
						var sender_id = data[0].sender_id;
						var receiver_id = data[0].receiver_id;

						if(sender_id == session_id){
							user_id = receiver_id;
						}
						else{
							user_id = sender_id;
						}

						get_user_chat_header(user_id);
						get_user_messages(user_id, "render");

					}
				}
			});

			get_chat_list();
			//setInterval(function get_chat_list(){
				// chat list
				
			// },1000);

			var account_option_listbox = $("#account_option_listbox");
			var loading_result = '<div class="pos-a t-50pr l-50pr tf-center">'+
					'								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" class="loader" preserveAspectRatio="xMidYMid">'+
					'									<circle cx="50" cy="50" fill="none" stroke="#127af1" stroke-width="6" r="30" stroke-dasharray="141.37166941154067 49.12388980384689" transform="rotate(184.244 50 50)">'+
					'										<animateTransform attributeName="transform" type="rotate" repeatCount="indefinite" dur="0.9900990099009901s" values="0 50 50;360 50 50" keyTimes="0;1"></animateTransform>'+
					'									</circle>'+
					'								</svg>'+
					'							</div>';

			$("#account_option_btn").on("click",function(){
				if(account_option_listbox.css("display") == "none"){
					account_option_listbox.css("display","block");
				}
				else{
					hide_listbox();
				}
			});

			$("#chat_option_btn").on("click",function(){
				if($("#chat_option").css("display") == "none"){
					$("#chat_option").css("display","block");
				}
				else{
					hide_chat_listbox();
				}
			});

			// Menu view profile click
			$("#session_view_profile").on("click",function(){

				var user_id = session_id;

				$("#account_option_listbox").css("display","none");
				view_profile(user_id);

			});	

			// User view profile click
			$("#user_view_profile").on("click",function(){

				var user_id = $("#user_header_info").attr("data-userid");
				
				$("#chat_option").css("display","none");
				view_profile(user_id);

			});

			// Delete user
			$("#delete_user").on("click", function(){
				
				var user_id = $("#user_header_info").attr("data-userid");
				
				$("#chat_option").css("display","none");
				delete_user_chat(user_id);

			});

			$("#is_user_archived").on("click", "#add_user_to_archive", function(){

				var user_id = $("#user_header_info").attr("data-userid");
				
				$("#chat_option").css("display","none");
				add_user_to_archive(user_id);
				
			});

			$("#is_user_archived").on("click", "#remove_user_from_archive", function(){

				var user_id = $("#user_header_info").attr("data-userid");

				$("#chat_option").css("display","none");
				remove_user_from_archive(user_id);

			});

			// Menu edit profile click
			$("#session_edit_profile").on("click",function(){

				$("#edit_profile_modal_overlay").removeClass("d-n");
				$("#edit_profile_modal_overlay").addClass("d-f");
				$("#account_option_listbox").css("display","none");
				edit_profile_data();
				
			});

			// Menu settings click
			$("#session_settings").on("click",function(){

				$("#settings_modal_overlay").removeClass("d-n");
				$("#settings_modal_overlay").addClass("d-f");
				$("#account_option_listbox").css("display","none");
				settings_data();
			});

			// Menu log out click
			$("#logout_link").on("click",function(){
				$("#logout_form").submit();
				return false;
			});

			/* Tab buttons eventlistners */
			$(".sidebar-tab-btn").on("click",function(){

				var tab_name = $(this).attr("data-tabname");

				$(".sidebar-tab-btn").removeClass("active-tab");
				$(this).addClass("active-tab");

				$(".main-tab-wrapper").addClass("d-n");
				$("#"+tab_name+"_tab_wrapper").removeClass("d-n");

			});

			$("#archived_tab_btn").on("click", function(){
				get_archived_users();
			});

			$("#favourites_tab_btn").on("click", function(){
				get_favourite_messages();
			});

			$("#chat_search").on("keyup",function(){
				var search_query = $(this).val().trim();
				var search_query_lengh = search_query.length;
				
				if(search_query_lengh > 0){
					$("#clear_search_btn").show();
					$("#search_result_overlay").show();
					$.ajax({
						type: "post",
						url : "search_chat",
						data: {query: search_query},
						dataType: "json",
						success: function(data){
							$("#search_result_wrapper").html("");
							if(data == 0){
								var result_not_found = '<div class="pos-a t-50pr l-50pr tf-center w-100pr ph-16 ta-c">'+
								'								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="medium-icon">'+
								'									<path d="M505.403,406.394L295.389,58.102c-8.274-13.721-23.367-22.245-39.39-22.245c-16.023,0-31.116,8.524-39.391,22.246'+
								'										L6.595,406.394c-8.551,14.182-8.804,31.95-0.661,46.37c8.145,14.42,23.491,23.378,40.051,23.378h420.028'+
								'										c16.56,0,31.907-8.958,40.052-23.379C514.208,438.342,513.955,420.574,505.403,406.394z M477.039,436.372'+
								'										c-2.242,3.969-6.467,6.436-11.026,6.436H45.985c-4.559,0-8.784-2.466-11.025-6.435c-2.242-3.97-2.172-8.862,0.181-12.765'+
								'										L245.156,75.316c2.278-3.777,6.433-6.124,10.844-6.124c4.41,0,8.565,2.347,10.843,6.124l210.013,348.292'+
								'										C479.211,427.512,479.281,432.403,477.039,436.372z"/>'+
								'									<path d="M256.154,173.005c-12.68,0-22.576,6.804-22.576,18.866c0,36.802,4.329,89.686,4.329,126.489'+
								'										c0.001,9.587,8.352,13.607,18.248,13.607c7.422,0,17.937-4.02,17.937-13.607c0-36.802,4.329-89.686,4.329-126.489'+
								'										C278.421,179.81,268.216,173.005,256.154,173.005z"/>'+
								'									<path d="M256.465,353.306c-13.607,0-23.814,10.824-23.814,23.814c0,12.68,10.206,23.814,23.814,23.814'+
								'										c12.68,0,23.505-11.134,23.505-23.814C279.97,364.13,269.144,353.306,256.465,353.306z"/>'+
								'								</svg>'+
								'								<div class="ta-c fs-24 c-black-900 fw-500">No results found</div>'+
								'								<div class="ta-c c-black-700">Please try different keyword and search.</div>'+
								'							</div>';
	

								$("#search_result_wrapper").html(result_not_found);
							}
							else{
								for(var i = 0; i < data.length; i++){

									if(data[i].profile_photo == ''){
										var profile_photo = "<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg";
									}
									else{
										var profile_photo = "<?php echo base_url(); ?>upload/profile_photo/p100x100/"+data[i].profile_photo;
									}
									
									var result_list = '<li class="search-result-list pos-r d-f ai-c" id="search_result_list" data-userid="'+data[i].id+'">'+
														'<div class="sidebar-profile-photo-wrapper search-result-profile-photo">'+
															'<img src="'+profile_photo+'" class="w-100pr h-100pr img-circle img-bordered" id="sidebar_header_profile_photo" alt="Profile photo">'+
														'</div>'+
														'<div class="search-result-text-wrapper">'+
															'<div class="seach-result-username ov-h to-e ws-nw">'+
																'<span class="fs-17 fw-500 c-black-900">'+data[i].username+'</span>'+
															'</div>'+
															'<div class="fs-16 c-black-700 ov-h to-e ws-nw">'+
																'<span class="fs-15 c-black-700">'+data[i].full_name+'</span>'+
															'</div>'+
														'</div>'+
													'</li>';

					  				$("#search_result_wrapper").append(result_list);					               
								}
							}
						}
					});
				}
				else{				
					$("#search_result_wrapper").html(loading_result);
					$("#clear_search_btn").hide();
					$("#search_result_overlay").hide();
				}
			});

			$("#clear_search_btn").on("click",function(){
				$("#search_result_wrapper").html(loading_result);
				$(this).hide();
				$("#chat_search").val("");
				$("#search_result_overlay").hide();
			});

			$("#search_result_wrapper, #chat-list, #archived-list").on("click","#search_result_list",function(){

				if($(this).hasClass("active-chat-list")){
					return false;
				}
				else{
					var userid = $(this).attr("data-userid");

					$(".search-result-list").removeClass("active-chat-list");
					$(this).addClass("active-chat-list");

					$.ajax({
						type: "post",
						url : "get_user_chat",
						data: {userid: userid},
						dataType: "json",
						beforeSend: function(){
							//$("#message_inner_wrapper").html(loading_result);
						},
						success: function(data){
							$("#welcome_message_container").css("display","none");
							$("#chat_messages_container").css("display","block");
							$("#messages_main_wrapper").scrollTop($("#messages_main_content").height());

							for(var i = 0; i < data.length; i++){

								var user_id = data[i].id;

								if(data[i].profile_photo == ''){
									var profile_photo = "<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg";
								}
								else{
									var profile_photo = "<?php echo base_url(); ?>upload/profile_photo/p100x100/"+data[i].profile_photo;
								}
								var username = data[i].username;
							
								$("#user_header_info").attr("data-userid",user_id);
								$("#chat_profile_photo").attr("src",profile_photo);
								$("#chat_username").html(username);
								$("#chat_option").attr("data-chat-userid",data[i].id);
							}

							get_user_chat_header(user_id);
							get_user_messages(user_id, "render");
						}
					});
				}

			});

			$("#search_chat_btn").on("click",function(){
				$("#chat_search").focus();
			});

			$("#message_text_input").emojioneArea({
				pickerPosition:"top"
			});

			$("#footer_input_wrapper").on("keydown keyup",".emojionearea-editor",function(e){
				
				var textMessage = $(this).html();
				var newTextMessage = textMessage.replace(/&nbsp;/g," ").trim();
				var textMessageLength = newTextMessage.length;

				var footerWrapperHeight = $("#message_footer_wrapper").height();

				if(footerWrapperHeight == "98.8"){
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 98.8px)");
				}
				else if(footerWrapperHeight == "121.2"){
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 121.2px)");
				}
				else if(footerWrapperHeight == "143.6"){
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 143.6px)");
				}
				else if(footerWrapperHeight == "166"){
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 166px)");
				}
				else if(footerWrapperHeight == "188.4"){
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 188.4px)");
				}
				else if(footerWrapperHeight == "194"){
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 194px)");
				}
				else{
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 76.4px)");
				}
				
				$("#messages_main_wrapper").scrollTop($("#messages_main_content").height());

				if (e.keyCode == 13 && !e.shiftKey){
					// Only enter is pressed.
					e.preventDefault();

					if(newTextMessage != "" && textMessageLength > 0){
						if(newTextMessage == "<br>"){
							console.log("message not sent");
						}
						else{
							send_message(newTextMessage);
						}
					}
				}
				if ((e.keyCode == 13 && e.shiftKey) || e.keyCode == 8 || e.keyCode == 46){
					// Both enter and shift are pressed.
					if(newTextMessage == "" && textMessageLength == 0){
						e.preventDefault();
					}
				}

				if(newTextMessage != "" && textMessageLength > 0){
					if(newTextMessage == "<br>"){
						$(".emojionearea-editor").html("");
						$("#attach_camera_btn").css("display","block");
						$(".emojionearea-editor").css("padding-right","95px");
						$("#message_speech_btn").css("display","block");
						$("#message_send_btn").css("display","none");
					}
					else{
						$("#attach_camera_btn").css("display","none");
						$(".emojionearea-editor").css("padding-right","50px");
						$("#message_speech_btn").css("display","none");
						$("#message_send_btn").css("display","block");
					}
				}
				else{
					$("#attach_camera_btn").css("display","block");
					$(".emojionearea-editor").css("padding-right","95px");
					$("#message_speech_btn").css("display","block");
					$("#message_send_btn").css("display","none");
				}

			});

			$("#message_footer_wrapper").on("click", ".emojibtn", function(){
				
				$("#attach_camera_btn").css("display","none");
				$(".emojionearea-editor").css("padding-right","50px");
				$("#message_speech_btn").css("display","none");
				$("#message_send_btn").css("display","block");
			});

			$("#message_send_btn").on("click",function(){

				var textMessage = $(".emojionearea-editor").html();
				var newTextMessage = textMessage.replace(/&nbsp;/g," ").trim();
				var textMessageLength = newTextMessage.length;

				if(newTextMessage != "" && textMessageLength > 0){
					if(newTextMessage == "<br>"){
						console.log("message not sent");
					}
					else{
						send_message(newTextMessage);
					}
				}
				else{
					console.log("message not sent");
				}

			});
		
			/* Voice recognition */
		    var SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
			var recognition = new SpeechRecognition();
			 
			var content = "";

			recognition.continuous = false;

			recognition.onresult = function(event) {

				var current = event.resultIndex;

				var transcript = event.results[current][0].transcript;
				
				var mobileRepeatBug = (current == 1 && transcript == event.results[0][0].transcript);

				if(!mobileRepeatBug) {
					content += transcript;
					$("#attach_camera_btn").css("display","none");
					$(".emojionearea-editor").css("padding-right","50px");
					$(".emojionearea-editor").html(content);
				}
			};

			recognition.onspeechend = function() {
				
			
				$("#attach_camera_btn").css("display","none");
				$(".emojionearea-editor").css("padding-right","50px");
				$("#message_speech_btn").css("display","none");
				$("#message_send_btn").css("display","block");
				
			}

			$("#message_speech_btn").on("click",function(){
	
				var microphone_svg_markup = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 475.085 475.085\" class=\"center icon-btn icon-white\"><path d=\"M237.541,328.897c25.128,0,46.632-8.946,64.523-26.83c17.888-17.884,26.833-39.399,26.833-64.525V91.365c0-25.126-8.938-46.632-26.833-64.525C284.173,8.951,262.669,0,237.541,0c-25.125,0-46.632,8.951-64.524,26.84c-17.893,17.89-26.838,39.399-26.838,64.525v146.177c0,25.125,8.949,46.641,26.838,64.525C190.906,319.951,212.416,328.897,237.541,328.897z\"/><path d=\"M396.563,188.15c-3.606-3.617-7.898-5.426-12.847-5.426c-4.944,0-9.226,1.809-12.847,5.426c-3.613,3.616-5.421,7.898-5.421,12.845v36.547c0,35.214-12.518,65.333-37.548,90.362c-25.022,25.03-55.145,37.545-90.36,37.545c-35.214,0-65.334-12.515-90.365-37.545c-25.028-25.022-37.541-55.147-37.541-90.362v-36.547c0-4.947-1.809-9.229-5.424-12.845c-3.617-3.617-7.895-5.426-12.847-5.426c-4.952,0-9.235,1.809-12.85,5.426c-3.618,3.616-5.426,7.898-5.426,12.845v36.547c0,42.065,14.04,78.659,42.112,109.776c28.073,31.118,62.762,48.961,104.068,53.526v37.691h-73.089c-4.949,0-9.231,1.811-12.847,5.428c-3.617,3.614-5.426,7.898-5.426,12.847c0,4.941,1.809,9.233,5.426,12.847c3.616,3.614,7.898,5.428,12.847,5.428h182.719c4.948,0,9.236-1.813,12.847-5.428c3.621-3.613,5.431-7.905,5.431-12.847c0-4.948-1.81-9.232-5.431-12.847c-3.61-3.617-7.898-5.428-12.847-5.428h-73.08v-37.691c41.299-4.565,75.985-22.408,104.061-53.526c28.076-31.117,42.12-67.711,42.12-109.776v-36.547C401.998,196.049,400.185,191.77,396.563,188.15z\"/></svg>";

				var stop_svg_markup = "<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 330 330\" class=\"center icon-btn icon-white\"><path id=\"XMLID_307_\" d=\"M315,0H15C6.716,0,0,6.716,0,15v300c0,8.284,6.716,15,15,15h300c8.284,0,15-6.716,15-15V15C330,6.716,323.284,0,315,0z\"/></svg>";

				var is_active = $(this).attr("data-isactive");

				if(is_active == "false"){
					// Start recording
					$(".emojionearea-editor").focus();
					$(this).removeClass("btn-icon-primary")
					   .addClass("btn-icon-danger")
					   .attr("data-isactive","true")
					   .attr("title","Stop")
					   .children().html(stop_svg_markup);

					if (content.length) {
						content += " ";
					}
					recognition.start();
				}
				else{
					// Stop recording
					$(".emojionearea-editor").focus();
					$(this).removeClass("btn-icon-danger")
					   .addClass("btn-icon-primary")
					   .attr("data-isactive","false")
					   .attr("title","Speech to text")
					   .children().html(microphone_svg_markup);
					
					content = "";
					recognition.stop();
				}
			});	

			$("#profile_close_btn1, #profile_close_btn2").on("click",function(){
				$(".profile-wrapper").addClass("d-n");
			});

			$("#messages_main_content").on("mouseenter",".message-wrapper",function(){
				$(this).find("#message_option_btn").css("display","block");
			});

			$("#messages_main_content").on("mouseleave",".message-wrapper",function(){
				if($(this).find("#message_option_btn").is(":focus")){
					$(this).find("#message_option_btn").css("display","block");
				}
				else if($(this).find(".message-options").css("display") == "block"){
					$(this).find("#message_option_btn").css("display","block");
				}
				else{
					$(this).find("#message_option_btn").css("display","none");
				}
			});

			$("#messages_main_content").on("click","#message_option_btn",function(){

				var message_option = $(this).parent().find(".message-options");
				var message_option_offset = $(this).offset();

				if(message_option_offset.top > 500){
					$(this).parent().find(".message-options").addClass("message-options-top");
				}

				$(".message-options").hide();

				if(message_option.css("display") == "none"){
					message_option.css("display","block");
				}
				else{
					message_option.hide();
					$(this).blur();
				}
				//$(this).parent().find(".message-options").css("display","block");
			});

			$("#messages_main_content").on("click", "#copy_message_option", function(){
				
				var messageText = $(this).parent().parent().parent().parent().find(".message-bubble").html();
				var dummy = $("<textarea>").val(messageText).appendTo("body").select();
				document.execCommand("copy");
				$(dummy).remove();
				$(this).parent().parent().css("display","none");

				$("#snackbar_text").html("Message copied to Clipboard");
				$("#snackbar").slideDown(100).queue(function () {
					$(this).delay(2000).slideUp(100);
					$(this).dequeue();
				});

			});

			$("#messages_main_content").on("click", "#favourite_message_option", function(){
				
				var message_id = $(this).parent().parent().parent().parent().find("#message_details").attr("data-message-id");
				$(this).parent().parent().css("display","none");
				
				add_message_to_favourites(message_id);

			});

			$("#messages_main_content").on("click", "#remove_favourite_message_option", function(){
				
				var message_id = $(this).parent().parent().parent().parent().find("#message_details").attr("data-message-id");
				$(this).parent().parent().css("display","none");
				
				remove_message_from_favourites(message_id);

			});

			$("#messages_main_content").on("click", "#delete_message_option", function(){
				
				var message_id = $(this).parent().parent().parent().parent().find("#message_details").attr("data-message-id");
				$(this).parent().parent().css("display","none");
				
				delete_message(message_id);

			});
			

			/* Functions */

			function get_chat_list(){

				$.ajax({
					type: "post",
					url : "get_chat_list",
					dataType: "json",
					success: function(data){
						if(data == 0){

							var no_chats_found_markup = "<div class=\"pos-a t-50pr l-50pr tf-center w-100pr ph-16\"><div class=\"ta-c fs-24 c-black-900 fw-500\">No chats found</div><div class=\"ta-c c-black-700\">Please add some users and start chat with them.</div></div>";

							$("#chat-list").html(no_chats_found_markup);

						}
						else{

							var final_markup = "";

							var notification_wrapper = '<div class="chat-list-notification"></div>';

							var message_markup_start = '</div>'+
												'<div class="d-f">'+
													'<div class="chat-list-message fs-16 c-black-700 ov-h to-e ws-nw">'+
														'<span class="fs-15 c-black-700">';

							var message_markup_bold_start = '</div>'+
												'<div class="d-f">'+
													'<div class="chat-list-message fs-16 c-black-700 ov-h to-e ws-nw">'+
														'<span class="fs-15 fw-700 c-black-900">';

							var message_markup_end = '</span>'+
													'</div>';

							var date_markup_start = '<div class="chat-list-time fs-14">';
							var date_markup_end = '</div>'+
												'</div>'+
											'</div>'+
										'</li>';

							var active_chat_user_id = $("#user_header_info").attr("data-userid");
							var final_active_user_id;	

							for(var i = 0; i < data.length; i++){
							
								var message_id = data[i].message_id;
								var user_id = data[i].user_id;
								var sender_id = data[i].sender_id;
								var receiver_id = data[i].receiver_id;
								var message = data[i].message;
								var is_read = data[i].is_read;
								var time = data[i].time;
								var date = data[i].date;
								var username = data[i].username;
								var profile_photo = data[i].profile_photo;
								var last_login = data[i].last_login;
								var current_timestamp = data[i].current_timestamp;
									
								var class_name = "";

								if(active_chat_user_id == null){
									final_active_user_id = data[0].user_id;
								}
								else{
									final_active_user_id = active_chat_user_id;
								}

								if(last_login > current_timestamp){
									class_name = " online-status";
								}

								if(profile_photo == ''){
									var profile_photo = "<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg";
								}
								else{
									var profile_photo = "<?php echo base_url(); ?>upload/profile_photo/p100x100/"+profile_photo;
								}

								if(sender_id == session_id){
									message = "You: "+message;
								}

								if(date == currentDate) {
									date = time;
								}

								if(final_active_user_id == user_id){
									var result_list = '<li class="search-result-list pos-r d-f ai-c active-chat-list" id="search_result_list" data-userid="'+user_id+'">'+
													'<div class="sidebar-profile-photo-wrapper search-result-profile-photo '+class_name+'">'+
														'<img src="'+profile_photo+'" class="w-100pr h-100pr img-circle img-bordered" id="sidebar_header_profile_photo" alt="Profile photo">'+
													'</div>'+
													'<div class="search-result-text-wrapper">'+
														'<div class="pos-r d-f">'+
															'<div class="chat-list-username ov-h to-e ws-nw">'+
																'<span class="fs-17 fw-500 c-black-900">'+username+'</span>'+
															'</div>';

									if(is_read == "0" && sender_id != session_id){
										final_markup += result_list + notification_wrapper + message_markup_bold_start + message + message_markup_end + date_markup_start + date + date_markup_end;
									}
									else{
										final_markup += result_list + message_markup_start + message + message_markup_end + date_markup_start + date + date_markup_end;
									}
								}
								else{
									var result_list = '<li class="search-result-list pos-r d-f ai-c" id="search_result_list" data-userid="'+user_id+'">'+
													'<div class="sidebar-profile-photo-wrapper search-result-profile-photo '+class_name+'">'+
														'<img src="'+profile_photo+'" class="w-100pr h-100pr img-circle img-bordered" id="sidebar_header_profile_photo" alt="Profile photo">'+
													'</div>'+
													'<div class="search-result-text-wrapper">'+
														'<div class="pos-r d-f">'+
															'<div class="chat-list-username ov-h to-e ws-nw">'+
																'<span class="fs-17 fw-500 c-black-900">'+username+'</span>'+
															'</div>';

									if(is_read == "0" && sender_id != session_id){
										final_markup += result_list + notification_wrapper + message_markup_bold_start + message + message_markup_end + date_markup_start + date + date_markup_end;
									}
									else{
										final_markup += result_list + message_markup_start + message + message_markup_end + date_markup_start + date + date_markup_end;
									}
								}
							}			
							$("#chat-list").html(final_markup);
						}
					}
				});
			}

			function add_message_to_favourites(message_id){
				$.ajax({
					type: "post",
					url: "add_message_to_favourites",
					data: {message_id: message_id},
					success: function(){
						var user_id = $("#user_header_info").attr("data-userid");
						get_user_messages(user_id, "update");

						get_favourite_messages();
						$("#snackbar_text").html("Message added to favourites");
						$("#snackbar").slideDown(100).queue(function () {
							$(this).delay(2000).slideUp(100);
							$(this).dequeue();
						});
					}
				});
			}

			function remove_message_from_favourites(message_id){
				$.ajax({
					type: "post",
					url: "remove_message_from_favourites",
					data: {message_id: message_id},
					success: function(){
						var user_id = $("#user_header_info").attr("data-userid");
						get_user_messages(user_id, "update");

						get_favourite_messages();
						$("#snackbar_text").html("Message removed from favourites");
						$("#snackbar").slideDown(100).queue(function () {
							$(this).delay(2000).slideUp(100);
							$(this).dequeue();
						});
					}
				});
			}

			function get_favourite_messages(){

				var loader_markup = "<div class=\"pos-a t-50pr l-50pr tf-center\"  id=\"favourites_list_loading\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" class=\"loader\" preserveAspectRatio=\"xMidYMid\"><circle cx=\"50\" cy=\"50\" fill=\"none\" stroke=\"#127af1\" stroke-width=\"6\" r=\"30\" stroke-dasharray=\"141.37166941154067 49.12388980384689\" transform=\"rotate(184.244 50 50)\"><animateTransform attributeName=\"transform\" type=\"rotate\" repeatCount=\"indefinite\" dur=\"0.9900990099009901s\" values=\"0 50 50;360 50 50\" keyTimes=\"0;1\"></animateTransform></circle></svg></div>";

				$.ajax({
					url: "get_favourite_messages",
					dataType: "json",
					beforeSend: function(){
						$("#favourites-list").html(loader_markup);
					},
					success: function(data){
						if(data == 0){
							var no_favourites_messages_found_markup = "<div class=\"pos-a t-50pr l-50pr tf-center w-100pr ph-16\"><div class=\"ta-c fs-24 c-black-900 fw-500\">No Favourite messages found</div><div class=\"ta-c c-black-700\">Please add a message to favourites and check again.</div></div>";

							$("#favourites-list").html(no_favourites_messages_found_markup);
						}
						else{
							$("#favourites_list_loading").remove();
							for(var i = 0; i < data.length; i++){
								var sender_id = data[i].sender_id;
								var sender_username = data[i].sender_username;
								var receiver_username = data[i].receiver_username;
								var message = data[i].message;
								var time = data[i].time;
								var date = data[i].date;

								if(sender_id == session_id){
									var class_name = "sender-message-bubble";
								}
								else{
									var class_name = "receiver-message-bubble";
								}

								var result_list = "<div class=\"mb-12\" style=\"border-bottom: 1px solid #999\"><div class=\"mh-16 c-black-700\">"+sender_username+" > "+receiver_username+"</div><div class=\"mh-16 p-12 "+class_name+"\"><div>"+message+"</div></div><div class=\"mh-16 mb-10 c-black-700\">"+date+" at "+time+"</div></?div>";

								$("#favourites-list").append(result_list);
							}
						}
					}
				});
			}

			function add_user_to_archive(user_id){
				
				$.ajax({
					type: "post",
					url: "add_user_to_archive",
					data: {user_id: user_id},
					success: function(){
						get_user_chat_header(user_id);
						get_archived_users();
						$("#snackbar_text").html("User added to archived");
						$("#snackbar").slideDown(100).queue(function () {
							$(this).delay(2000).slideUp(100);
							$(this).dequeue();
						});
					}
				});

			}

			function remove_user_from_archive(user_id){

				$.ajax({
					type: "post",
					url: "remove_user_from_archive",
					data: {user_id: user_id},
					success: function(){
						get_user_chat_header(user_id);
						get_archived_users();
						$("#snackbar_text").html("User removed from archived");
						$("#snackbar").slideDown(100).queue(function () {
							$(this).delay(2000).slideUp(100);
							$(this).dequeue();
						});
					}
				});

			}

			function get_archived_users(){

				var loader_markup = "<div class=\"pos-a t-50pr l-50pr tf-center\"  id=\"archive_list_loading\"><svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 100 100\" class=\"loader\" preserveAspectRatio=\"xMidYMid\"><circle cx=\"50\" cy=\"50\" fill=\"none\" stroke=\"#127af1\" stroke-width=\"6\" r=\"30\" stroke-dasharray=\"141.37166941154067 49.12388980384689\" transform=\"rotate(184.244 50 50)\"><animateTransform attributeName=\"transform\" type=\"rotate\" repeatCount=\"indefinite\" dur=\"0.9900990099009901s\" values=\"0 50 50;360 50 50\" keyTimes=\"0;1\"></animateTransform></circle></svg></div>";
				
				$.ajax({
					url: "get_archived_users",
					dataType: "json",
					beforeSend: function(){
						$("#archived-list").html(loader_markup);
					},
					success: function(data){
						if(data == 0){
							var no_archived_users_found_markup = "<div class=\"pos-a t-50pr l-50pr tf-center w-100pr ph-16\"><div class=\"ta-c fs-24 c-black-900 fw-500\">No archived users found</div><div class=\"ta-c c-black-700\">Please add a user to archive and check again.</div></div>";

							$("#archived-list").html(no_archived_users_found_markup);
						}
						else{
							$("#archive_list_loading").remove();
							for(var i = 0; i < data.length; i++){

								if(data[i].profile_photo == ''){
									var profile_photo = "<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg";
								}
								else{
									var profile_photo = "<?php echo base_url(); ?>upload/profile_photo/p100x100/"+data[i].profile_photo;
								}

								var result_list = '<li class="search-result-list pos-r d-f ai-c" id="search_result_list" data-userid="'+data[i].user_id+'">'+
													'<div class="sidebar-profile-photo-wrapper search-result-profile-photo">'+
														'<img src="'+profile_photo+'" class="w-100pr h-100pr img-circle img-bordered" id="sidebar_header_profile_photo" alt="Profile photo">'+
													'</div>'+
													'<div class="search-result-text-wrapper">'+
														'<div class="seach-result-username ov-h to-e ws-nw">'+
															'<span class="fs-17 fw-500 c-black-900">'+data[i].username+'</span>'+
														'</div>'+
														'<div class="fs-16 c-black-700 ov-h to-e ws-nw">'+
															'<span class="fs-15 c-black-700">'+data[i].full_name+'</span>'+
														'</div>'+
													'</div>'+
												'</li>';

								$("#archived-list").append(result_list);					               
							}
						}
					}
				});

			}

			function send_message(newTextMessage){

				var date = new Date();

				var monthNames = ["Jan", "Feb", "Mar", "Apr", "May", "Jun","Jul", "Aug", "Sept", "Oct", "Nov", "Dec"];
				var day = date.getDate();
				var month = monthNames[date.getMonth()];
				var year = date.getFullYear();

				var hours = date.getHours();
				var minutes = date.getMinutes();
				var ampm = hours >= 12 ? 'PM' : 'AM';
				hours = hours % 12;
				hours = hours ? hours : 12;
				minutes = minutes < 10 ? '0'+minutes : minutes;

				var currentDate = day+" "+month+", "+year;
				var currentTime = hours + ':' + minutes + ' ' + ampm;

				var last_chat_date = $(".messages-group-wrapper:nth-last-child(1) #message_group_date").html();

				var div_end = "</div>";
				
				var messages_group_start = "<div class=\"messages-group-wrapper mt-12 mb-12\">";

				var messages_date_start = "<div class=\"message-time-wrapper pos-r d-f ai-c\">"+
										"<div class=\"message-time-border\"></div>"+
										"<div class=\"message-time-content\">"+
											"<span class=\"fs-15 c-black-500\" id=\"message_group_date\">";

				var messages_date_end = "</span></div></div>";

				var sender_message_start = "<div class=\"message-wrapper sender-message d-f ai-fe\">";

				var sender_message_status;

				var sender_message_status_start = "<div class=\"sender-message-status-wrapper\">";

				var sender_message_status_end =  div_end;

				var sender_message_bubble_start = "<div class=\"message-bubble sender-message-bubble\">";

				var sender_message_time_start = "</div><div class=\"sender-time\">"+
													"<span class=\"fs-14 c-black-500\">";
												
				var sender_message_time_end = "</span></div>";

				var sender_message_option = "<div class=\"message-option-btn-wrapper pos-r\">"+
												"<button class=\"message-option-btn btn-icon btn-icon-default btn-icon-small\" id=\"message_option_btn\">"+
													"<div class=\"icon-wrapper\">"+
														"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"center icon-btn icon-gray\">"+
															"<circle cx=\"256\" cy=\"256\" r=\"64\"/>"+
															"<circle cx=\"256\" cy=\"448\" r=\"64\"/>"+
															"<circle cx=\"256\" cy=\"64\" r=\"64\"/>"+
														"</svg>"+
													"</div>"+
												"</button>"+
												"<div class=\"message-options pos-a card card-shadow listbox without-icon sender-message-option\" id=\"\">"+
													"<ul class=\"list list-vertical\">"+
														"<li class=\"list-option\" id=\"copy_message_option\">"+
															"<div class=\"list-content\">"+
																"<div class=\"list-text-wrapper\">"+
																	"<div class=\"list-text\">Copy</div>"+
																"</div>"+
															"</div>"+
														"</li>"+
														"<li class=\"list-option\" id=\"favourite_message_option\">"+
															"<div class=\"list-content\">"+
																"<div class=\"list-text-wrapper\">"+
																	"<div class=\"list-text\">Add to favourite</div>"+
																"</div>"+
															"</div>"+
														"</li>"+
														"<li class=\"list-option\" id=\"delete_message_option\">"+
															"<div class=\"list-content\">"+
																"<div class=\"list-text-wrapper\">"+
																	"<div class=\"list-text\">Delete</div>"+
																"</div>"+
															"</div>"+
														"</li>"+
													"</ul>"+
												"</div>"+
											"</div>";
				
				var sender_message_end = div_end;

				var messages_group_end = div_end;

				if($(".emojionearea-editor").html() != ""){

					var receiverId = $("#user_header_info").attr("data-userid");
					var finalTextMessage = newTextMessage;

					$(".emojionearea-editor").html("").focus();
					$("#messages_main_wrapper").css("height","calc(100vh - 77.4px - 76.4px)");
					$("#messages_main_wrapper").scrollTop($("#messages_main_wrapper").height());

					$("#attach_camera_btn").css("display","block");
					$(".emojionearea-editor").css("padding-right","95px");
					$("#message_speech_btn").css("display","block");
					$("#message_send_btn").css("display","none");

					if(last_chat_date == "Today"){
						var final_markup = sender_message_start+sender_message_status_start+unsend_message_svg+sender_message_status_end+sender_message_bubble_start+finalTextMessage+sender_message_time_start+currentTime+sender_message_time_end+sender_message_option+sender_message_end;
						$(".messages-group-wrapper:nth-last-child(1)").append(final_markup);
					}
					else{
						var final_markup = messages_group_start+messages_date_start+"Today"+messages_date_end+sender_message_start+sender_message_status_start+unsend_message_svg+sender_message_status_end+sender_message_bubble_start+finalTextMessage+sender_message_time_start+currentTime+sender_message_time_end+sender_message_option+sender_message_end;
						$(".messages-main-content").append(final_markup);
					}

					$.ajax({
						type: "post",
						url : "send_message",
						data: {receiverId: receiverId, finalTextMessage: finalTextMessage},
						dataType: "json",
						success: function(data){
							
							var message_id = data[0].id;
							var sender_id = data[0].sender_id;
							var receiver_id = data[0].receiver_id;
							var is_sent = data[0].is_sent;
							var is_read = data[0].is_read;
							var time = data[0].time;
							var date = data[0].date;

							var message_details = "<span id=\"message_details\" data-message-id=\""+message_id+"\" data-sender-id=\""+sender_id+"\" data-receiver-id=\""+receiver_id+"\" data-is-sent=\""+is_sent+"\" data-is-read=\""+is_read+"\" data-time=\""+time+"\" data-date=\""+date+"\" data-is-favourite=\"0\"></span>";

							$(".sender-message:nth-last-child(1) .sender-message-status-wrapper").html(sent_message_svg);
							$(".sender-message:nth-last-child(1)").append(message_details);
							get_chat_list();
						}
					});
				}
				else{
					return false;
				}
				
			}

			function get_user_chat_header(user_id){
				$.ajax({
					type: "post",
					url: "get_user_chat_header",
					data: {user_id: user_id},
					dataType: "json",
					success: function(data){

						var add_to_archive_markup = "<div class=\"list-content\" id=\"add_user_to_archive\"><div class=\"list-text-wrapper\"><div class=\"list-text\">Add to archive</div></div></div>";

						var remove_from_archive_markup = "<div class=\"list-content\" id=\"remove_user_from_archive\"><div class=\"list-text-wrapper\"><div class=\"list-text\">Remove from archive</div></div></div>";

						var user_id = data[0].id;
						var username = data[0].username;
						var profile_photo = data[0].profile_photo;
						var last_login = data[0].last_login;
						var current_timestamp = data.current_timestamp;
						var is_user_archived = data.is_user_archived;

						if(profile_photo == ""){
							var profile_photo = "<?php echo base_url(); ?>assets/profile_photo/p100x100/default-profile-photo.jpg";
						}
						else{
							var profile_photo = "<?php echo base_url(); ?>upload/profile_photo/p100x100/"+profile_photo;
						}

						if(last_login > current_timestamp){
							$("#chat_status").html("Online");
						}
						else{
							$("#chat_status").html("");
						}

						if(is_user_archived == 1){
							$("#is_user_archived").html(remove_from_archive_markup);
						}
						if(is_user_archived == 0){
							$("#is_user_archived").html(add_to_archive_markup);
						}
						
						$("#user_header_info").attr("data-userid",user_id);
						$("#message_footer_wrapper").attr("data-userid",user_id);

						$("#chat_profile_photo").attr("src",profile_photo);
						$("#chat_username").html(username);
						$("#chat_option").attr("data-chat-userid",user_id);
					}
				});
			}

			function get_user_messages(user_id, type){

				$.ajax({
					type: "post",
					url : "get_user_messages",
					data: {user_id: user_id},
					dataType: "json",
					success: function(data){
						if(data == 0){
							$("#messages_main_content").html("");
						}
						else{

							var div_end = "</div>";

							var messages_group_start = "<div class=\"messages-group-wrapper mt-12 mb-12\">";

							var messages_date_start = "<div class=\"message-time-wrapper pos-r d-f ai-c\">"+
													"<div class=\"message-time-border\"></div>"+
													"<div class=\"message-time-content\">"+
														"<span class=\"fs-15 c-black-500\" id=\"message_group_date\">";

							var messages_date_end = "</span></div></div>";

							var sender_message_start = "<div class=\"message-wrapper sender-message d-f ai-fe\">";

							var sender_message_status;

							var sender_message_status_start = "<div class=\"sender-message-status-wrapper\">";

							var sender_message_status_end =  div_end;

							var sender_message_bubble_start = "<div class=\"message-bubble sender-message-bubble\">";

							var sender_message_time_start = "</div><div class=\"sender-time\">"+
																"<span class=\"fs-14 c-black-500\">";
															
							var sender_message_time_end = "</span></div>";

							var sender_message_option_start = "<div class=\"message-option-btn-wrapper pos-r\">"+
															"<button class=\"message-option-btn btn-icon btn-icon-default btn-icon-small\" id=\"message_option_btn\">"+
																"<div class=\"icon-wrapper\">"+
																	"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"center icon-btn icon-gray\">"+
																		"<circle cx=\"256\" cy=\"256\" r=\"64\"/>"+
																		"<circle cx=\"256\" cy=\"448\" r=\"64\"/>"+
																		"<circle cx=\"256\" cy=\"64\" r=\"64\"/>"+
																	"</svg>"+
																"</div>"+
															"</button>"+
															"<div class=\"message-options pos-a card card-shadow listbox without-icon sender-message-option\" id=\"\">"+
																"<ul class=\"list list-vertical\">"+
																	"<li class=\"list-option\" id=\"copy_message_option\">"+
																		"<div class=\"list-content\">"+
																			"<div class=\"list-text-wrapper\">"+
																				"<div class=\"list-text\">Copy</div>"+
																			"</div>"+
																		"</div>"+
																	"</li>";

							var sender_message_option_end = "<li class=\"list-option\" id=\"delete_message_option\">"+
																		"<div class=\"list-content\">"+
																			"<div class=\"list-text-wrapper\">"+
																				"<div class=\"list-text\">Delete</div>"+
																			"</div>"+
																		"</div>"+
																	"</li>"+
																"</ul>"+
															"</div>"+
														"</div>";												
							var sender_message_end = div_end;
							
							var receiver_message_start = "<div class=\"message-wrapper receiver-message d-f ai-fe\">"+
															"<div class=\"message-bubble receiver-message-bubble\">";
							
							var receiver_message_time_start = "</div><div class=\"receiver-time\">"+
																"<span class=\"fs-14 c-black-500\">";

							var receiver_message_time_end = "</span></div>";
							
							var receiver_message_option_start = "<div class=\"message-option-btn-wrapper pos-r\">"+
															"<button class=\"message-option-btn btn-icon btn-icon-default btn-icon-small\" id=\"message_option_btn\">"+
																"<div class=\"icon-wrapper\">"+
																	"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"center icon-btn icon-gray\">"+
																		"<circle cx=\"256\" cy=\"256\" r=\"64\"/>"+
																		"<circle cx=\"256\" cy=\"448\" r=\"64\"/>"+
																		"<circle cx=\"256\" cy=\"64\" r=\"64\"/>"+
																	"</svg>"+
																"</div>	"+
															"</button>"+
															"<div class=\"message-options pos-a card card-shadow listbox without-icon receiver-message-option\" id=\"\">"+
																"<ul class=\"list list-vertical\">"+
																	"<li class=\"list-option\" id=\"copy_message_option\">"+
																		"<div class=\"list-content\">"+
																			"<div class=\"list-text-wrapper\">"+
																				"<div class=\"list-text\">Copy</div>"+
																			"</div>"+
																		"</div>"+
																	"</li>";
							var receiver_message_option_end = "</ul></div></div>";

							var receiver_message_end = div_end;

							var messages_group_end = div_end;

							var final_markup = messages_group_start;

							read_message(user_id);

							if(type == "render"){
								for(var i = 0; i < data.length; i++){

									var message_id = data[i].id;
									var sender_id = data[i].sender_id;
									var receiver_id = data[i].receiver_id;
									var message = data[i].message;
									var is_sent = data[i].is_sent;
									var is_read = data[i].is_read;
									var time = data[i].time;
									var date = data[i].date;
									var is_favourite = data[i].is_favourite;

									var add_to_favourites_markup = "<li class=\"list-option\" id=\"favourite_message_option\"><div class=\"list-content\"><div class=\"list-text-wrapper\"><div class=\"list-text\">Add to favourites</div></div></div></li>";

									var remove_from_favourites_markup = "<li class=\"list-option\" id=\"remove_favourite_message_option\"><div class=\"list-content\"><div class=\"list-text-wrapper\"><div class=\"list-text\">Remove from favourites</div></div></div></li>";

									var message_details = "<span id=\"message_details\" data-message-id=\""+message_id+"\" data-sender-id=\""+sender_id+"\" data-receiver-id=\""+receiver_id+"\" data-is-sent=\""+is_sent+"\" data-is-read=\""+is_read+"\" data-time=\""+time+"\" data-date=\""+date+"\" data-is-favourite=\""+is_favourite+"\"></span>";

									if(date == currentDate) {
										date = "Today";
									}

									if(is_favourite == 0){
										var sender_message_option = sender_message_option_start+add_to_favourites_markup+sender_message_option_end;

										var receiver_message_option = receiver_message_option_start+add_to_favourites_markup+receiver_message_option_end;
									}
									if(is_favourite == 1){
										var sender_message_option = sender_message_option_start+remove_from_favourites_markup+sender_message_option_end;

										var receiver_message_option = receiver_message_option_start+remove_from_favourites_markup+receiver_message_option_end;
									}

									if(is_sent == 0){
										sender_message_status = sender_message_status_start+unsend_message_svg+sender_message_status_end;
									}
									if(is_sent == 1){
										if(is_read == 0){
											sender_message_status = sender_message_status_start+sent_message_svg+sender_message_status_end;
										}
										if(is_read == 1){
											sender_message_status = sender_message_status_start+seen_message_svg+sender_message_status_end;
										}
									}

									if(i == 0){
										final_markup += messages_date_start+date+messages_date_end;
										if(data[i].sender_id == session_id){
											final_markup += sender_message_start+sender_message_status+sender_message_bubble_start+message+sender_message_time_start+time+sender_message_time_end+message_details+sender_message_option+sender_message_end;
										}
										if(data[i].sender_id != session_id && data[i].receiver_id == session_id){
											final_markup += receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
										}
									}
									else{
										if(data[i].date == data[i-1].date){
											if(data[i].sender_id == session_id){
												final_markup += sender_message_start+sender_message_status+sender_message_bubble_start+message+sender_message_time_start+time+sender_message_time_end+message_details+sender_message_option+sender_message_end;
											}
											if(data[i].sender_id != session_id && data[i].receiver_id == session_id){
												final_markup += receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
											}
										}
										else{
											final_markup += messages_group_end+messages_group_start+messages_date_start+date+messages_date_end;
											if(data[i].sender_id == session_id){
												final_markup += sender_message_start+sender_message_status+sender_message_bubble_start+message+sender_message_time_start+time+sender_message_time_end+message_details+sender_message_option+sender_message_end;
											}
											if(data[i].sender_id != session_id && data[i].receiver_id == session_id){
												final_markup += receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
											}

										}
									}
								}
								$("#messages_main_content").html(final_markup);
								$("#messages_main_wrapper").scrollTop($("#messages_main_content").height());
								$(".emojionearea-editor").html("").focus();
								$("#attach_camera_btn").css("display","block");
								$(".emojionearea-editor").css("padding-right","95px");
								$("#message_speech_btn").css("display","block");
								$("#message_send_btn").css("display","none");
							}
							if(type == "update"){
								for(var i = 0; i < data.length; i++){

									var message_id = data[i].id;
									var sender_id = data[i].sender_id;
									var receiver_id = data[i].receiver_id;
									var message = data[i].message;
									var is_sent = data[i].is_sent;
									var is_read = data[i].is_read;
									var time = data[i].time;
									var date = data[i].date;
									var is_favourite = data[i].is_favourite;

									var add_to_favourites_markup = "<li class=\"list-option\" id=\"favourite_message_option\"><div class=\"list-content\"><div class=\"list-text-wrapper\"><div class=\"list-text\">Add to favourites</div></div></div></li>";

									var remove_from_favourites_markup = "<li class=\"list-option\" id=\"remove_favourite_message_option\"><div class=\"list-content\"><div class=\"list-text-wrapper\"><div class=\"list-text\">Remove from favourites</div></div></div></li>";

									var message_details = "<span id=\"message_details\" data-message-id=\""+message_id+"\" data-sender-id=\""+sender_id+"\" data-receiver-id=\""+receiver_id+"\" data-is-sent=\""+is_sent+"\" data-is-read=\""+is_read+"\" data-time=\""+time+"\" data-date=\""+date+"\" data-is-favourite=\""+is_favourite+"\"></span>";

									if(date == currentDate) {
										date = "Today";
									}

									if(is_favourite == 0){
										var sender_message_option = sender_message_option_start+add_to_favourites_markup+sender_message_option_end;

										var receiver_message_option = receiver_message_option_start+add_to_favourites_markup+receiver_message_option_end;
									}
									if(is_favourite == 1){
										var sender_message_option = sender_message_option_start+remove_from_favourites_markup+sender_message_option_end;

										var receiver_message_option = receiver_message_option_start+remove_from_favourites_markup+receiver_message_option_end;
									}

									if(is_sent == 0){
										sender_message_status = sender_message_status_start+unsend_message_svg+sender_message_status_end;
									}
									if(is_sent == 1){
										if(is_read == 0){
											sender_message_status = sender_message_status_start+sent_message_svg+sender_message_status_end;
										}
										if(is_read == 1){
											sender_message_status = sender_message_status_start+seen_message_svg+sender_message_status_end;
										}
									}

									if(i == 0){
										final_markup += messages_date_start+date+messages_date_end;
										if(data[i].sender_id == session_id){
											final_markup += sender_message_start+sender_message_status+sender_message_bubble_start+message+sender_message_time_start+time+sender_message_time_end+message_details+sender_message_option+sender_message_end;
										}
										if(data[i].sender_id != session_id && data[i].receiver_id == session_id){
											final_markup += receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
										}
									}
									else{
										if(data[i].date == data[i-1].date){
											if(data[i].sender_id == session_id){
												final_markup += sender_message_start+sender_message_status+sender_message_bubble_start+message+sender_message_time_start+time+sender_message_time_end+message_details+sender_message_option+sender_message_end;
											}
											if(data[i].sender_id != session_id && data[i].receiver_id == session_id){
												final_markup += receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
											}
										}
										else{
											final_markup += messages_group_end+messages_group_start+messages_date_start+date+messages_date_end;
											if(data[i].sender_id == session_id){
												final_markup += sender_message_start+sender_message_status+sender_message_bubble_start+message+sender_message_time_start+time+sender_message_time_end+message_details+sender_message_option+sender_message_end;
											}
											if(data[i].sender_id != session_id && data[i].receiver_id == session_id){
												final_markup += receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
											}

										}
									}
								}
								$("#messages_main_content").html(final_markup);
							}
						}
					}
				})

			}

			function delete_message(message_id){
			
				$.ajax({
					type: "post",
					url : "delete_message",
					data: {message_id: message_id},
					success: function(){
						var user_id = $("#user_header_info").attr("data-userid");
						get_user_messages(user_id, "update");

						$("#snackbar_text").html("Message deleted successfully");
						$("#snackbar").slideDown(100).queue(function () {
							$(this).delay(2000).slideUp(100);
							$(this).dequeue();
						});
					}
				});

			}

			function hide_listbox(){
				account_option_listbox.hide();
				$("#account_option_btn").blur();
			}

			function hide_chat_listbox(){
				$("#chat_option").hide();
				$("#chat_option_btn").blur();
			}

			function view_profile(user_id){

				$.ajax({
					type: "post",
					url : "get_user_profile",
					data: {user_id: user_id},
					dataType: "json",
					success: function(data){

						$(".profile-wrapper").removeClass("d-n");

						var id = data[0];
						var full_name = data[1];
						var username = data[2];
						var profile_photo = data[3];
						var profile_photo_src;
						var gender = data[4];
						var dob = data[5];
						var about = data[6];
						var is_profile_private = data[7]
						var created_at = data[8];

						if(profile_photo == ""){
							profile_photo_src = "http://127.0.0.1/messenger.profileplex.com/assets/profile_photo/p200x200/default-profile-photo.jpg";
						}
						else{
							profile_photo_src = "http://127.0.0.1/messenger.profileplex.com/upload/profile_photo/p200x200/"+profile_photo;
						}

						if(user_id == session_id){
							$("#private_profile_content").css("display","none");
							$("#public_profile_content").css("display","block");

							$("#profile_profile_photo").attr("src", profile_photo_src);
							$("#profile_username").html(username);
							$("#profile_full_name").html(full_name);
							$("#profile_about").html(about);
							$("#profile_dob").html(dob);
							$("#profile_gender").html(gender);
							$("#profile_joined").html(created_at);
						}
						else{
							if(is_profile_private == 1){
								$("#public_profile_content").css("display","none");
								$("#private_profile_content").css("display","block");		
							}
							else{
								$("#private_profile_content").css("display","none");
								$("#public_profile_content").css("display","block");

								$("#profile_profile_photo").attr("src", profile_photo_src);
								$("#profile_username").html(username);
								$("#profile_full_name").html(full_name);
								$("#profile_about").html(about);
								$("#profile_dob").html(dob);
								$("#profile_gender").html(gender);
								$("#profile_joined").html(created_at);
							}
						}		
					}
				});
			}

			function delete_user_chat(user_id){

				$.ajax({
					type: "post",
					url : "delete_user_chat",
					data: {user_id: user_id},
					success: function(){
						location.reload(true);
					}
				});

			}

			function edit_profile_data() {

				$.ajax({
					type: "post",
					url : "get_user_edit_profile",
					dataType: "json",
					success: function(data){
						var profile_photo = data[0];
						var profile_photo_src;
						var gender = data[1];
						var dob_day = data[2];
						var dob_month = data[3];
						var dob_year = data[4];
						var about = data[5];
						var about_length = data[6];

						if(profile_photo == ""){
							profile_photo_src = "http://127.0.0.1/messenger.profileplex.com/assets/profile_photo/p200x200/default-profile-photo.jpg";
						}
						else{
							profile_photo_src = "http://127.0.0.1/messenger.profileplex.com/upload/profile_photo/p200x200/"+profile_photo;
						}

						$("#edit_profile_profile_photo").attr("src", profile_photo_src);
						$("#previous_profile_photo").val(profile_photo);
						
						$("#edit_profile_about").val(about);
						$("#edit_profile_gender").val(gender);
						$("#edit_profile_dob_day").val(dob_day);
						$("#edit_profile_dob_month").val(dob_month);
						$("#edit_profile_dob_year").val(dob_year);
						$("#about-letter-count").html(about_length);
					}
				});

			}

			function settings_data(){
				
				$.ajax({
					type: "post",
					url : "get_user_settings",
					dataType: "json",
					success: function(data){
						
						var full_name = data[0];
						var username = data[1];
						var email = data[2];
						var is_profile_private = data[3];

						$("#settings_full_name").val(full_name);
						$("#settings_username").val(username);
						$("#settings_email").val(email);

						if(is_profile_private == 1){
							$("#private_profile_switch").attr("checked","checked");
						}

					}
				});

			}

			function get_instant_messages(){

				var user_id = $("#user_header_info").attr("data-userid");
				
				if(user_id != null) {
					$.ajax({
						type: "POST",
						url : "get_instant_messages",
						data: {user_id: user_id}, 
						dataType: "json",
						success: function(data){
							var last_chat_date = $(".messages-group-wrapper:nth-last-child(1) #message_group_date").html();

							var div_end = "</div>";

							var messages_group_start = "<div class=\"messages-group-wrapper mt-12 mb-12\">";

							var messages_date_start = "<div class=\"message-time-wrapper pos-r d-f ai-c\">"+
													"<div class=\"message-time-border\"></div>"+
													"<div class=\"message-time-content\">"+
														"<span class=\"fs-15 c-black-500\" id=\"message_group_date\">";

							var messages_date_end = "</span></div></div>";
							
							var receiver_message_start = "<div class=\"message-wrapper receiver-message d-f ai-fe\">"+
															"<div class=\"message-bubble receiver-message-bubble\">";
							
							
							var receiver_message_time_start = "</div><div class=\"receiver-time\">"+
																"<span class=\"fs-14 c-black-500\">";

							var receiver_message_time_end = "</span></div>";
							
							var receiver_message_option = "<div class=\"message-option-btn-wrapper pos-r\">"+
															"<button class=\"message-option-btn btn-icon btn-icon-default btn-icon-small\" id=\"message_option_btn\">"+
																"<div class=\"icon-wrapper\">"+
																	"<svg xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 512 512\" class=\"center icon-btn icon-gray\">"+
																		"<circle cx=\"256\" cy=\"256\" r=\"64\"/>"+
																		"<circle cx=\"256\" cy=\"448\" r=\"64\"/>"+
																		"<circle cx=\"256\" cy=\"64\" r=\"64\"/>"+
																	"</svg>"+
																"</div>	"+
															"</button>"+
															"<div class=\"message-options pos-a card card-shadow listbox without-icon receiver-message-option\" id=\"\">"+
																"<ul class=\"list list-vertical\">"+
																	"<li class=\"list-option\" id=\"copy_message_option\">"+
																		"<div class=\"list-content\">"+
																			"<div class=\"list-text-wrapper\">"+
																				"<div class=\"list-text\">Copy</div>"+
																			"</div>"+
																		"</div>"+
																	"</li>"+
																	"<li class=\"list-option\" id=\"favourite_message_option\">"+
																		"<div class=\"list-content\">"+
																			"<div class=\"list-text-wrapper\">"+
																				"<div class=\"list-text\">Add to favourite</div>"+
																			"</div>"+
																		"</div>"+
																	"</li>"+
																"</ul>"+
															"</div>"+
														"</div>";

							var receiver_message_end = div_end;

							var messages_group_end = div_end;

							if(data != ''){

								var message_id = data[0].id;
								var sender_id = data[0].sender_id;
								var receiver_id = data[0].receiver_id;
								var message = data[0].message;
								var is_sent = data[0].is_sent;
								var is_read = data[0].is_read;
								var time = data[0].time;
								var date = data[0].date;

								var message_details = "<span id=\"message_details\" data-message-id=\""+message_id+"\" data-sender-id=\""+sender_id+"\" data-receiver-id=\""+receiver_id+"\" data-is-sent=\""+is_sent+"\" data-is-read=\""+is_read+"\" data-time=\""+time+"\" data-date=\""+date+"\" data-is-favourite=\"0\"></span>";

								if(last_chat_date == "Today"){
									var final_markup = receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end;
									$(".messages-group-wrapper:nth-last-child(1)").append(final_markup);
								}
								else{
									var final_markup = messages_group_start+messages_date_start+"Today"+messages_date_end+receiver_message_start+message+receiver_message_time_start+time+receiver_message_time_end+message_details+receiver_message_option+receiver_message_end+messages_group_end;
									$(".messages-main-content").append(final_markup);
								}
								$("#messages_main_wrapper").scrollTop($("#messages_main_content").height());
								get_chat_list();
							}
						}
					});
				}

			}

			function read_message(user_id){
				$.ajax({
					type: "post",
					url : "read_message",
					data: {user_id: user_id}
				});
			}

			// function linkify(message) {
			// 	var urlRegex =/(https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|www\.[a-zA-Z0-9][a-zA-Z0-9-]+[a-zA-Z0-9]\.[^\s]{2,}|https?:\/\/(?:www\.|(?!www))[a-zA-Z0-9]+\.[^\s]{2,}|www\.[a-zA-Z0-9]+\.[^\s]{2,})/gi;

			// 	return message.replace(urlRegex, function(url) {
			// 		return '<a href="https://'+url+'" target="blank">'+url+'</a>';
			// 	});
			// }

			function update_user_status(){
				$.ajax({
					url : "update_user_status",
					success: function(){
						
					}
				});
			}

			function get_chat_header_online_stutus(){
				var user_id = $("#user_header_info").attr("data-userid");
				
				if(user_id != null){
					$.ajax({
						type: "post",
						url : "get_user_chat_header",
						data: {user_id: user_id},
						dataType: "json",
						success: function(data){
							var last_login = data[0].last_login;
							var current_timestamp = data.current_timestamp;

							if(last_login > current_timestamp){
								$("#chat_status").html("Online");
							}
							else{
								$("#chat_status").html("");
							}
							
						}
					});
				}
			}

			/* setInterval functions */
			setInterval(function(){
				get_instant_messages();
			},1000);

			setInterval(function(){
				update_user_status();
			},5000);
			
			setInterval(function(){
				get_chat_list();
				get_chat_header_online_stutus();			
			},6000);

			/* Keyboard interactions */
			$(document).on("mousedown",function(e){

				if ($(e.target).closest("#account_option_listbox").length === 0 && $(e.target).closest("#account_option_btn").length === 0){
					hide_listbox();
				}

				if ($(e.target).closest("#chat_option").length === 0 && $(e.target).closest("#chat_option_btn").length === 0){
					hide_chat_listbox();
				}

				if ($(e.target).closest(".message-options").length === 0 && $(e.target).closest("#message_option_btn").length === 0){
					$(".message-options").hide();
				}

			});

			$(document).keydown(function(e) {
			    if (e.key === "Escape") {
			    	if(account_option_listbox.css("display") == "block"){
			    		hide_listbox();
					}
					if($("#chat_option").css("display") == "block"){
						hide_chat_listbox();
					}
			    }
			});

		});

	</script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/edit_profile.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/Js/settings.js"></script>
</body>
</html>