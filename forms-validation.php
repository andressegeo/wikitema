<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/a-/HTML/class.upload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/a-/HTML/assets/inc/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/a-/HTML/FormManager.class.php';
?>
<!doctype html>
<html class="fixed">
	<head>

		<!-- Basic -->
		<meta charset="UTF-8">

		<title>Form Validation | Porto Admin - Responsive HTML5 Template 1.4.2</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="assets/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
		<link rel="stylesheet" href="assets/vendor/dropzone/basic.css" />
		<link rel="stylesheet" href="assets/vendor/dropzone/dropzone.css" />
		<link rel="stylesheet" href="assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote.css" />
		<link rel="stylesheet" href="assets/vendor/summernote/summernote-bs3.css" />
		<link rel="stylesheet" href="assets/vendor/codemirror/lib/codemirror.css" />
		<link rel="stylesheet" href="assets/vendor/codemirror/theme/monokai.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="assets/images/logo.png" height="35" alt="Porto Admin" />
					</a>
					<div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
						<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
					</div>
				</div>
			
				<!-- start: search & user box -->
				<div class="header-right">
			
					<form action="pages-search-results.html" class="search nav-form">
						<div class="input-group input-search">
							<input type="text" class="form-control" name="q" id="q" placeholder="Search...">
							<span class="input-group-btn">
								<button class="btn btn-default" type="submit"><i class="fa fa-search"></i></button>
							</span>
						</div>
					</form>
			
					<span class="separator"></span>
			
					<ul class="notifications">
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-tasks"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu large">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Tasks
								</div>
			
								<div class="content">
									<ul>
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Generating Sales Report</span>
												<span class="message pull-right text-dark">60%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Importing Contacts</span>
												<span class="message pull-right text-dark">98%</span>
											</p>
											<div class="progress progress-xs light">
												<div class="progress-bar" role="progressbar" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100" style="width: 98%;"></div>
											</div>
										</li>
			
										<li>
											<p class="clearfix mb-xs">
												<span class="message pull-left">Uploading something big</span>
												<span class="message pull-right text-dark">33%</span>
											</p>
											<div class="progress progress-xs light mb-xs">
												<div class="progress-bar" role="progressbar" aria-valuenow="33" aria-valuemin="0" aria-valuemax="100" style="width: 33%;"></div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">4</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">230</span>
									Messages
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Doe Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Doe</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message truncate">Truncated message. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam, nec venenatis risus. Vestibulum blandit faucibus est et malesuada. Sed interdum cursus dui nec venenatis. Pellentesque non nisi lobortis, rutrum eros ut, convallis nisi. Sed tellus turpis, dignissim sit amet tristique quis, pretium id est. Sed aliquam diam diam, sit amet faucibus tellus ultricies eu. Aliquam lacinia nibh a metus bibendum, eu commodo eros commodo. Sed commodo molestie elit, a molestie lacus porttitor id. Donec facilisis varius sapien, ac fringilla velit porttitor et. Nam tincidunt gravida dui, sed pharetra odio pharetra nec. Duis consectetur venenatis pharetra. Vestibulum egestas nisi quis elementum elementum.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joe Junior" class="img-circle" />
												</figure>
												<span class="title">Joe Junior</span>
												<span class="message">Lorem ipsum dolor sit.</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<figure class="image">
													<img src="assets/images/!sample-user.jpg" alt="Joseph Junior" class="img-circle" />
												</figure>
												<span class="title">Joseph Junior</span>
												<span class="message">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sit amet lacinia orci. Proin vestibulum eget risus non luctus. Nunc cursus lacinia lacinia. Nulla molestie malesuada est ac tincidunt. Quisque eget convallis diam.</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						<li>
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-bell"></i>
								<span class="badge">3</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									<span class="pull-right label label-default">3</span>
									Alerts
								</div>
			
								<div class="content">
									<ul>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-thumbs-down bg-danger"></i>
												</div>
												<span class="title">Server is Down!</span>
												<span class="message">Just now</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-lock bg-warning"></i>
												</div>
												<span class="title">User Locked</span>
												<span class="message">15 minutes ago</span>
											</a>
										</li>
										<li>
											<a href="#" class="clearfix">
												<div class="image">
													<i class="fa fa-signal bg-success"></i>
												</div>
												<span class="title">Connection Restaured</span>
												<span class="message">10/10/2014</span>
											</a>
										</li>
									</ul>
			
									<hr />
			
									<div class="text-right">
										<a href="#" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="assets/images/!logged-user.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="assets/images/!logged-user.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name">John Doe Junior</span>
								<span class="role">administrator</span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-user-profile.html"><i class="fa fa-user"></i> My Profile</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="#" data-lock-screen="true"><i class="fa fa-lock"></i> Lock Screen</a>
								</li>
								<li>
									<a role="menuitem" tabindex="-1" href="pages-signin.html"><i class="fa fa-power-off"></i> Logout</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- end: search & user box -->
			</header>
			<!-- end: header -->

			<div class="inner-wrapper">
				<!-- start: sidebar -->
				<aside id="sidebar-left" class="sidebar-left">
				
					<div class="sidebar-header">
						<div class="sidebar-title">
							Navigation
						</div>
						<div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
							<i class="fa fa-bars" aria-label="Toggle sidebar"></i>
						</div>
					</div>
				
					<div class="nano">
						<div class="nano-content">
							<nav id="menu" class="nav-main" role="navigation">
								<ul class="nav nav-main">
									<li>
										<a href="index.html">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>Dashboard</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.html">
											<span class="pull-right label label-primary">182</span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Mailbox</span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Pages</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="pages-signup.html">
													 Sign Up
												</a>
											</li>
											<li>
												<a href="pages-signin.html">
													 Sign In
												</a>
											</li>
											<li>
												<a href="pages-recover-password.html">
													 Recover Password
												</a>
											</li>
											<li>
												<a href="pages-lock-screen.html">
													 Locked Screen
												</a>
											</li>
											<li>
												<a href="pages-user-profile.html">
													 User Profile
												</a>
											</li>
											<li>
												<a href="pages-session-timeout.html">
													 Session Timeout
												</a>
											</li>
											<li>
												<a href="pages-calendar.html">
													 Calendar
												</a>
											</li>
											<li>
												<a href="pages-timeline.html">
													 Timeline
												</a>
											</li>
											<li>
												<a href="pages-media-gallery.html">
													 Media Gallery
												</a>
											</li>
											<li>
												<a href="pages-invoice.html">
													 Invoice
												</a>
											</li>
											<li>
												<a href="pages-blank.html">
													 Blank Page
												</a>
											</li>
											<li>
												<a href="pages-404.html">
													 404
												</a>
											</li>
											<li>
												<a href="pages-500.html">
													 500
												</a>
											</li>
											<li>
												<a href="pages-log-viewer.html">
													 Log Viewer
												</a>
											</li>
											<li>
												<a href="pages-search-results.html">
													 Search Results
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>UI Elements</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="ui-elements-typography.html">
													 Typography
												</a>
											</li>
											<li class="nav-parent">
												<a>
													Icons
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="ui-elements-icons-elusive.html">
															Elusive
														</a>
													</li>
													<li>
														<a href="ui-elements-icons-font-awesome.html">
															Font Awesome
														</a>
													</li>
													<li>
														<a href="ui-elements-icons-glyphicons.html">
															Glyphicons
														</a>
													</li>
													<li>
														<a href="ui-elements-icons-line-icons.html">
															Line Icons
														</a>
													</li>
													<li>
														<a href="ui-elements-icons-meteocons.html">
															Meteocons
														</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="ui-elements-tabs.html">
													 Tabs
												</a>
											</li>
											<li>
												<a href="ui-elements-panels.html">
													 Panels
												</a>
											</li>
											<li>
												<a href="ui-elements-widgets.html">
													 Widgets
												</a>
											</li>
											<li>
												<a href="ui-elements-portlets.html">
													 Portlets
												</a>
											</li>
											<li>
												<a href="ui-elements-buttons.html">
													 Buttons
												</a>
											</li>
											<li>
												<a href="ui-elements-alerts.html">
													 Alerts
												</a>
											</li>
											<li>
												<a href="ui-elements-notifications.html">
													 Notifications
												</a>
											</li>
											<li>
												<a href="ui-elements-modals.html">
													 Modals
												</a>
											</li>
											<li>
												<a href="ui-elements-lightbox.html">
													 Lightbox
												</a>
											</li>
											<li>
												<a href="ui-elements-progressbars.html">
													 Progress Bars
												</a>
											</li>
											<li>
												<a href="ui-elements-sliders.html">
													 Sliders
												</a>
											</li>
											<li>
												<a href="ui-elements-carousels.html">
													 Carousels
												</a>
											</li>
											<li>
												<a href="ui-elements-accordions.html">
													 Accordions
												</a>
											</li>
											<li>
												<a href="ui-elements-nestable.html">
													 Nestable
												</a>
											</li>
											<li>
												<a href="ui-elements-tree-view.html">
													 Tree View
												</a>
											</li>
											<li>
												<a href="ui-elements-scrollable.html">
													 Scrollable
												</a>
											</li>
											<li>
												<a href="ui-elements-grid-system.html">
													 Grid System
												</a>
											</li>
											<li>
												<a href="ui-elements-charts.html">
													 Charts
												</a>
											</li>
											<li class="nav-parent">
												<a>
													Animations
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="ui-elements-animations-appear.html">
															Appear
														</a>
													</li>
													<li>
														<a href="ui-elements-animations-hover.html">
															Hover
														</a>
													</li>
												</ul>
											</li>
											<li class="nav-parent">
												<a>
													Loading
												</a>
												<ul class="nav nav-children">
													<li>
														<a href="ui-elements-loading-overlay.html">
															Overlay
														</a>
													</li>
													<li>
														<a href="ui-elements-loading-progress.html">
															Progress
														</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="ui-elements-extra.html">
													 Extra
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent nav-expanded nav-active">
										<a>
											<i class="fa fa-list-alt" aria-hidden="true"></i>
											<span>Forms</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="forms-basic.html">
													 Basic
												</a>
											</li>
											<li>
												<a href="forms-advanced.html">
													 Advanced
												</a>
											</li>
											<li class="nav-active">
												<a href="forms-validation.html">
													 Validation
												</a>
											</li>
											<li>
												<a href="forms-layouts.html">
													 Layouts
												</a>
											</li>
											<li>
												<a href="forms-wizard.html">
													 Wizard
												</a>
											</li>
											<li>
												<a href="forms-code-editor.html">
													 Code Editor
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-table" aria-hidden="true"></i>
											<span>Tables</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="tables-basic.html">
													 Basic
												</a>
											</li>
											<li>
												<a href="tables-advanced.html">
													 Advanced
												</a>
											</li>
											<li>
												<a href="tables-responsive.html">
													 Responsive
												</a>
											</li>
											<li>
												<a href="tables-editable.html">
													 Editable
												</a>
											</li>
											<li>
												<a href="tables-ajax.html">
													 Ajax
												</a>
											</li>
											<li>
												<a href="tables-pricing.html">
													 Pricing
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-map-marker" aria-hidden="true"></i>
											<span>Maps</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="maps-google-maps.html">
													 Basic
												</a>
											</li>
											<li>
												<a href="maps-google-maps-builder.html">
													 Map Builder
												</a>
											</li>
											<li>
												<a href="maps-vector.html">
													 Vector
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-columns" aria-hidden="true"></i>
											<span>Layouts</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="layouts-default.html">
													 Default
												</a>
											</li>
											<li>
												<a href="layouts-boxed.html">
													 Boxed
												</a>
											</li>
											<li>
												<a href="layouts-menu-collapsed.html">
													 Menu Collapsed
												</a>
											</li>
											<li>
												<a href="layouts-scroll.html">
													 Scroll
												</a>
											</li>
										</ul>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-asterisk" aria-hidden="true"></i>
											<span>Extra</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a href="extra-changelog.html">
													 Changelog
												</a>
											</li>
											<li>
												<a href="extra-ajax-made-easy.html">
													 Ajax Made Easy
												</a>
											</li>
										</ul>
									</li>
									<li>
										<a href="http://themeforest.net/item/porto-responsive-html5-template/4106987?ref=Okler" target="_blank">
											<i class="fa fa-external-link" aria-hidden="true"></i>
											<span>Front-End <em class="not-included">(Not Included)</em></span>
										</a>
									</li>
									<li class="nav-parent">
										<a>
											<i class="fa fa-align-left" aria-hidden="true"></i>
											<span>Menu Levels</span>
										</a>
										<ul class="nav nav-children">
											<li>
												<a>First Level</a>
											</li>
											<li class="nav-parent">
												<a>Second Level</a>
												<ul class="nav nav-children">
													<li class="nav-parent">
														<a>Third Level</a>
														<ul class="nav nav-children">
															<li>
																<a>Third Level Link #1</a>
															</li>
															<li>
																<a>Third Level Link #2</a>
															</li>
														</ul>
													</li>
													<li>
														<a>Second Level Link #1</a>
													</li>
													<li>
														<a>Second Level Link #2</a>
													</li>
												</ul>
											</li>
										</ul>
									</li>
								</ul>
							</nav>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-tasks">
								<div class="widget-header">
									<h6>Projects</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul class="list-unstyled m-none">
										<li><a href="#">Porto HTML5 Template</a></li>
										<li><a href="#">Tucson Template</a></li>
										<li><a href="#">Porto Admin</a></li>
									</ul>
								</div>
							</div>
				
							<hr class="separator" />
				
							<div class="sidebar-widget widget-stats">
								<div class="widget-header">
									<h6>Company Stats</h6>
									<div class="widget-toggle">+</div>
								</div>
								<div class="widget-content">
									<ul>
										<li>
											<span class="stats-title">Stat 1</span>
											<span class="stats-complete">85%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%;">
													<span class="sr-only">85% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 2</span>
											<span class="stats-complete">70%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
													<span class="sr-only">70% Complete</span>
												</div>
											</div>
										</li>
										<li>
											<span class="stats-title">Stat 3</span>
											<span class="stats-complete">2%</span>
											<div class="progress">
												<div class="progress-bar progress-bar-primary progress-without-number" role="progressbar" aria-valuenow="2" aria-valuemin="0" aria-valuemax="100" style="width: 2%;">
													<span class="sr-only">2% Complete</span>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
						</div>
				
					</div>
				
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2>Form Validation</h2>
					<!-- menu calendrier caché de droite -->
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="index.html">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Forms</span></li>
								<li><span>Validation</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>

					<!-- start: page -->
					<div class="row">
						<div class="col-md-7">
							<!-- <form id="form" action="forms-validation.html" class="form-horizontal"> -->
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>

										<h2 class="panel-title">Basic Form Validation</h2>
										<p class="panel-subtitle">
											Tous les champs marqués d'un astérix(*) sont obligatoire
											<!-- Basic validation will display a label with the error after the form control. -->
										</p>
									</header>
									<div class="panel-body">
									<?php 
										if (isset($_GET['table']) AND isset($_GET['id']))
										{
										$form1=new FormManager;
										echo $form1->ReturnForm($_GET['table'],$_GET['id'],"test2.php",3,70);
										}else
										{
											echo "pas de table et d'identifiant definis en url";
										}
									?>
									</div>
								</section>
							<!-- </form> -->
						</div>
						<!-- col-md-6 -->
						<!-- <div class="col-md-6">
							<form id="chk-radios-form" action="forms-validation.html">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>

										<h2 class="panel-title">Validating Checkbox and Radios</h2>

										<p class="panel-subtitle">
											Easily validate checkboxes and radios tags.
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Porto Admin is <span class="required">*</span></label>
											<div class="col-sm-9">
												<div class="radio-custom radio-primary">
													<input id="awesome" name="porto_is" type="radio" value="awesome" required />
													<label for="awesome">Awesome</label>
												</div>
												<div class="radio-custom radio-primary">
													<input id="very-awesome" name="porto_is" type="radio" value="very-awesome" />
													<label for="very-awesome">Very Awesome</label>
												</div>
												<div class="radio-custom radio-primary">
													<input id="ultra-awesome" name="porto_is" type="radio" value="ultra-awesome" />
													<label for="ultra-awesome">Ultra Awesome</label>
												</div>
												<label class="error" for="porto_is"></label>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">I will use it for <span class="required">*</span></label>
											<div class="col-sm-9">
												<div class="checkbox-custom chekbox-primary">
													<input id="for-project" value="project" type="checkbox" name="for[]" required />
													<label for="for-project">My Project</label>
												</div>
												<div class="checkbox-custom chekbox-primary">
													<input id="for-website" value="website" type="checkbox" name="for[]" />
													<label for="for-website">My Website</label>
												</div>
												<div class="checkbox-custom chekbox-primary">
													<input id="for-all" value="all" type="checkbox" name="for[]" />
													<label for="for-all">All things I do</label>
												</div>
												<label class="error" for="for[]"></label>
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-3">
												<button class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>
					</div> -->
					<!-- <div class="row">
						<div class="col-md-6">
							<form id="summary-form" action="forms-validation.html" class="form-horizontal">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>

										<h2 class="panel-title">Validation Summary</h2>
										<p class="panel-subtitle">
											Validation summary will display an error list above the form.
										</p>
									</header>
									<div class="panel-body">
										<div class="validation-message">
											<ul></ul>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Full Name <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="text" name="fullname" class="form-control" title="Plase enter a name." placeholder="eg.: John Doe" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Email <span class="required">*</span></label>
											<div class="col-sm-9">
												<input type="email" name="email" class="form-control" title="Please enter an email address." placeholder="eg.: john@doe.com" required/>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">GitHub</label>
											<div class="col-sm-9">
												<input type="url" name="url" title="Please enter a valid url." class="form-control" placeholder="eg.: https://github.com/johndoe" />
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Resume <span class="required">*</span></label>
											<div class="col-sm-9">
												<textarea name="resume" rows="5" title="Your resume is too short." class="form-control" placeholder="Enter your resume" required></textarea>
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-3">
												<button class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>
						<div class="col-md-6">
							<form id="selects-form" action="forms-validation.html">
								<section class="panel">
									<header class="panel-heading">
										<div class="panel-actions">
											<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
											<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
										</div>

										<h2 class="panel-title">Validation Selects</h2>
										<p class="panel-subtitle">
											Easily validate select tags, does not matter if is single or multiple.
										</p>
									</header>
									<div class="panel-body">
										<div class="form-group">
											<label class="col-sm-3 control-label">Company</label>
											<div class="col-sm-9">
												<select id="company" class="form-control" required>
													<option value="">Choose a Company</option>
													<option value="apple">Apple</option>
													<option value="google">Google</option>
													<option value="microsoft">Microsoft</option>
													<option value="yahoo">Yahoo</option>
												</select>
												<label class="error" for="company"></label>
											</div>
										</div>
										<div class="form-group">
											<label class="col-sm-3 control-label">Browsers</label>
											<div class="col-sm-9">
												<select id="browsers" name="browsers" title="Please select at least one browser" class="form-control" size="5" multiple="multiple" required>
													<option value="chrome">Chrome / Safari</option>
													<option value="ff">Firefox</option>
													<option value="ie">Internet Explorer</option>
													<option value="opera">Opera</option>
												</select>
												<label class="error" for="browsers"></label>
											</div>
										</div>
									</div>
									<footer class="panel-footer">
										<div class="row">
											<div class="col-sm-9 col-sm-offset-3">
												<button class="btn btn-primary">Submit</button>
												<button type="reset" class="btn btn-default">Reset</button>
											</div>
										</div>
									</footer>
								</section>
							</form>
						</div>
					</div> -->
					<!-- end: page -->
				</section>
			</div>

			<aside id="sidebar-right" class="sidebar-right">
				<div class="nano">
					<div class="nano-content">
						<a href="#" class="mobile-close visible-xs">
							Collapse <i class="fa fa-chevron-right"></i>
						</a>
			
						<div class="sidebar-right-wrapper">
			
							<div class="sidebar-widget widget-calendar">
								<h6>Upcoming Tasks</h6>
								<div data-plugin-datepicker data-plugin-skin="dark" ></div>
			
								<ul>
									<li>
										<time datetime="2014-04-19T00:00+00:00">04/19/2014</time>
										<span>Company Meeting</span>
									</li>
								</ul>
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Friends</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
									<li class="status-offline">
										<figure class="profile-picture">
											<img src="assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Joseph Doe Junior</span>
											<span class="title">Hey, how are you?</span>
										</div>
									</li>
								</ul>
							</div>
			
						</div>
					</div>
				</div>
			</aside>
		</section>

		<!-- Vendor -->
		<script src="assets/vendor/jquery/jquery.js"></script>
		<script src="assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="assets/vendor/bootstrap-datepicker/locales/bootstrap-datepicker.fr.min.js"></script>
		<script src="assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>

		<script src="assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="assets/vendor/summernote/summernote.js"></script>
		<script src="assets/vendor/autosize/autosize.js"></script>
		<script src="assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="assets/vendor/select2/js/select2.js"></script>
		<script src="assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
		<script src="assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
		<script src="assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
		<script src="assets/vendor/bootstrap-timepicker/bootstrap-timepicker.js"></script>
		<script src="assets/vendor/fuelux/js/spinner.js"></script>
		<script src="assets/vendor/dropzone/dropzone.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/markdown.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
		<script src="assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
		<script src="assets/vendor/codemirror/lib/codemirror.js"></script>
		<script src="assets/vendor/codemirror/addon/selection/active-line.js"></script>
		<script src="assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
		<script src="assets/vendor/codemirror/mode/javascript/javascript.js"></script>
		<script src="assets/vendor/codemirror/mode/xml/xml.js"></script>
		<script src="assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
		<script src="assets/vendor/codemirror/mode/css/css.js"></script>
		<script src="assets/vendor/summernote/summernote.js"></script>
		<script src="assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="assets/vendor/ios7-switch/ios7-switch.js"></script>
		<script src="assets/vendor/bootstrap-confirmation/bootstrap-confirmation.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="assets/javascripts/forms/examples.validation.js"></script>
	</body>
</html>