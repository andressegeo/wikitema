<?php
// include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/class.upload.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/models/inc/config.php';
// include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/TableManager.class.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/classes/user.class.php';
?>

<!doctype html>
<html class="fixed">
	<head>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js" type="text/javascript">
	</script>
		
		<!-- Basic -->
		<meta charset="UTF-8">

		<title>WikHitema</title>
		<meta name="keywords" content="HTML5 Admin Template" />
		<meta name="description" content="Porto Admin - Responsive HTML5 Template">
		<meta name="author" content="okler.net">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

		<!-- Web Fonts  -->
		<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="../../assets/vendor/bootstrap/css/bootstrap.css" />

		<link rel="stylesheet" href="../../assets/vendor/font-awesome/css/font-awesome.css" />
		<link rel="stylesheet" href="../../assets/vendor/magnific-popup/magnific-popup.css" />
		<link rel="stylesheet" href="../../assets/vendor/bootstrap-datepicker/css/bootstrap-datepicker3.css" />

		<!-- Specific Page Vendor CSS -->
		<link rel="stylesheet" href="../../assets/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="../../assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
		<link rel="stylesheet" href="../../assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="../../assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.css" />
		<link rel="stylesheet" href="../../assets/vendor/jquery-ui/jquery-ui.css" />
		<link rel="stylesheet" href="../../assets/vendor/jquery-ui/jquery-ui.theme.css" />
		<link rel="stylesheet" href="../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
		<link rel="stylesheet" href="../../assets/vendor/morris.js/morris.css" />
		<link rel="stylesheet" href="../../assets/vendor/select2/css/select2.css" />
		<link rel="stylesheet" href="../../assets/vendor/select2-bootstrap-theme/select2-bootstrap.css" />
		<link rel="stylesheet" href="../../assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
		<link rel="stylesheet" href="../../assets/vendor/pnotify/pnotify.custom.css" />

		<!-- Theme CSS -->
		<link rel="stylesheet" href="../../assets/stylesheets/theme.css" />

		<!-- Skin CSS -->
		<link rel="stylesheet" href="../../assets/stylesheets/skins/default.css" />

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="../../assets/stylesheets/theme-custom.css">

		<!-- Head Libs -->
		<script src="../../assets/vendor/modernizr/modernizr.js"></script>
	</head>
	<body>
		<section class="body">

			<!-- start: header -->
			<header class="header">
				<div class="logo-container">
					<a href="../" class="logo">
						<img src="../../assets/images/lodgo.png" height="55" width="105" />
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
						<!-- tous ce ki concerne les msg! -->
							<a href="#" class="dropdown-toggle notification-icon" data-toggle="dropdown">
								<i class="fa fa-envelope"></i>
								<span class="badge">
								<?php echo $_SESSION['msgno']?>		
								</span>
							</a>
			
							<div class="dropdown-menu notification-menu">
								<div class="notification-title">
									Messages <span class="pull-right label label-"><?php echo $_SESSION['msgall']?></span><br>
									 
									<!-- <div class="panel-body"> -->
									<a class="modal-with-form btn btn-default" href="#modalForm"><b>NOUVEAU MESSAGE</b></a>

									<!-- Modal Form -->
									<div  id="modalForm" class="modal-block modal-block-primary mfp-hide">
										<section class="panel">
											<header class="panel-heading">
												<h2 class="panel-title"><b>Nouveau message</b></h2>
											</header>
											<div class="panel-body">
												<div id="retourAnswr">
								
								
												</div>
												<form action="../../assets/php/ajax.php" method="post" id="demoform" enctype="multipart/form-data">
													<div class="form-group">
														<label class="col-sm-3 control-label">À:</label>
														<div class="col-sm-9">
															<select data-plugin-selectTwo class="form-control populate" required>
																<optgroup label="Alaskan/Hawaiian Time Zone">
																	<option value="AK">Alaska</option>
																</optgroup>
															</select>
														</div>
													</div>
													<div class="form-group">
														<label class="col-sm-3 control-label">Contenu:<span class="required"></span></label>
														<div class="col-sm-9">
															<textarea rows="3" class="form-control" name="txtarea" data-plugin-maxlength maxlength="140" placeholder="Type your comment..." required></textarea>
															<p><code>Caractères-Max</code> jusque 140.</p>
														</div>
													</div>
													<div class="form-group">
														<label class="col-md-3 control-label">Fichier Joint:<span class="required"></span></label>
														<div class="col-md-9">
															<div class="fileupload fileupload-new" data-provides="fileupload">
																<div class="input-append">
																	<div class="uneditable-input">
																		<i class="fa fa-file fileupload-exists"></i>
																		<span class="fileupload-preview"></span>
																	</div>
																	<span class="btn btn-default btn-file">
																		<span class="fileupload-exists">Change</span>
																		<span class="fileupload-new">Select file</span>
																		<input type="file"  value="fich" name="fichier"/>
																	</span>
																	<a href="#" class="btn btn-default fileupload-exists" data-dismiss="fileupload">Remove</a>
																</div>
															</div>
														</div>
													</div><br>
											<footer class="panel-footer">
													<div class="row">
														<div class="col-md-12 text-right">
															<button type="submit" name ="submit" class="btn btn-primary hidden-xs">Valider</button>
															<!-- <button class="btn btn-primary modal-confirm">Envoyer</button> -->
															<button class="btn btn-default modal-dismiss">Annuler</button>
														</div>
													</div>
											</footer>
												</form>
											</div>
											
										</section>
									</div>

								<!-- </div> -->
								</div>
			
								<div class="content">
									
												<?php 
												$obj=new User();
												echo $obj->afichMessageTruncate();	
												?>
										
									<div class="text-right">
										<a href="mailbox-folder.php" class="view-more">View All</a>
									</div>
								</div>
							</div>
						</li>
						
					</ul>
			
					<span class="separator"></span>
			
					<div id="userbox" class="userbox">
						<a href="#" data-toggle="dropdown">
							<figure class="profile-picture">
								<img src="../../assets/images/lol.jpg" alt="Joseph Doe" class="img-circle" data-lock-picture="../../assets/images/lol.jpg" />
							</figure>
							<div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@okler.com">
								<span class="name"><b><font color="#0088cc"><?php echo $_SESSION['nomComplet']?></b></font></span>
								<span class="role"><font color="red"><?php echo $_SESSION['levelUser']?></font></span>
							</div>
			
							<i class="fa custom-caret"></i>
						</a>
			
						<div class="dropdown-menu">
							<ul class="list-unstyled">
								<li class="divider"></li>
								
								
								<li>
									<a role="menuitem" tabindex="-1" href="../logout.php"><i class="fa fa-power-off"></i> Logout</a>
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
									<li class="nav-active">
										<a href="accueil_admin.php">
											<i class="fa fa-home" aria-hidden="true"></i>
											<span>ACCUEIL</span>
										</a>
									</li>
									<li>
										<a href="mailbox-folder.php">
											<span class="pull-right label label-primary"><?php echo $_SESSION['msgno']?></span>
											<i class="fa fa-envelope" aria-hidden="true"></i>
											<span>Messagerie</span>
										</a>
									</li>
									<li>
										<a href="thematique.php">
											<i class="fa fa-copy" aria-hidden="true"></i>
											<span>Thématiques</span>
										</a>
										
									</li>
									<li>
										<a href="multimedia.php">
											<i class="fa fa-tasks" aria-hidden="true"></i>
											<span>Multimedia</span>
										</a>
										
									</li>
																								
								</ul>
							</nav>
				
							<hr class="separator" />
				
							
				</aside>
				<!-- end: sidebar -->

				<section role="main" class="content-body">
					<header class="page-header">
						<h2 style='align:center'>WikHitema Articles</h2>
					
						<div class="right-wrapper pull-right">
							<ol class="breadcrumbs">
								<li>
									<a href="accueil.php">
										<i class="fa fa-home"></i>
									</a>
								</li>
								<li><span>Dashboard</span></li>
							</ol>
					
							<a class="sidebar-right-toggle" data-open="sidebar-right"><i class="fa fa-chevron-left"></i></a>
						</div>
					</header>
					<!-- end: page -->
						
						<section class="panel">
							<header class="panel-heading">
								<div class="panel-actions">
									<a href="#" class="panel-action panel-action-toggle" data-panel-toggle></a>
									<a href="#" class="panel-action panel-action-dismiss" data-panel-dismiss></a>
								</div>
						
								<h2 class="panel-title">Articles crées</h2>
							</header>
							<div class="panel-body">
								<?php
								
									$tablo= new User();									
									$skl="SELECT * FROM bo_articles";
									// echo $skl;
									echo $tablo->afficheTableDefault($skl,1);
							 ?>	
							</div>
						</section>	

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
							</div>
			
							<div class="sidebar-widget widget-friends">
								<h6>Amis</h6>
								<ul>
									<li class="status-online">
										<figure class="profile-picture">
											<img src="../../assets/images/!sample-user.jpg" alt="Joseph Doe" class="img-circle">
										</figure>
										<div class="profile-info">
											<span class="name">Andresse Geo</span>
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
		<script src="../../assets/vendor/jquery/jquery.js"></script>
		<script src="../../assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
		<script src="../../assets/vendor/bootstrap/js/bootstrap.js"></script>
		<script src="../../assets/vendor/nanoscroller/nanoscroller.js"></script>
		<script src="../../assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
		<script src="../../assets/vendor/magnific-popup/jquery.magnific-popup.js"></script>
		<script src="../../assets/vendor/jquery-placeholder/jquery-placeholder.js"></script>
		
		<!-- Specific Page Vendor -->
		<script src="../../assets/vendor/select2/js/select2.js"></script>
		<script src="../../assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="../../assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="../../assets/vendor/jquery-validation/jquery.validate.js"></script>
		<script src="../../assets/vendor/bootstrap-fileupload/bootstrap-fileupload.min.js"></script>
		<script src="../../assets/vendor/jquery-ui/jquery-ui.js"></script>
		<script src="../../assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
		<script src="../../assets/vendor/jqueryui-touch-punch/jqueryui-touch-punch.js"></script>
		<script src="../../assets/vendor/jquery-appear/jquery-appear.js"></script>
		<script src="../../assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
		<script src="../../assets/vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.js"></script>
		<script src="../../assets/vendor/flot/jquery.flot.js"></script>
		<script src="../../assets/vendor/flot.tooltip/flot.tooltip.js"></script>
		<script src="../../assets/vendor/flot/jquery.flot.pie.js"></script>
		<script src="../../assets/vendor/flot/jquery.flot.categories.js"></script>
		<script src="../../assets/vendor/flot/jquery.flot.resize.js"></script>
		<script src="../../assets/vendor/jquery-sparkline/jquery-sparkline.js"></script>
		<script src="../../assets/vendor/raphael/raphael.js"></script>
		<script src="../../assets/vendor/morris.js/morris.js"></script>
		<script src="../../assets/vendor/gauge/gauge.js"></script>
		<script src="../../assets/vendor/snap.svg/snap.svg.js"></script>
		<script src="../../assets/vendor/liquid-meter/liquid.meter.js"></script>
		<script src="../../assets/vendor/jqvmap/jquery.vmap.js"></script>
		<script src="../../assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
		<script src="../../assets/vendor/jqvmap/maps/continents/jquery.vmap.south-america.js"></script>
		<script src="../../assets/vendor/select2/js/select2.js"></script>
		<script src="../../assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
		<script src="../../assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
		<script src="../../assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
		<script src="../../assets/vendor/pnotify/pnotify.custom.js"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="../../assets/javascripts/theme.js"></script>
		
		<!-- Theme Custom -->
		<script src="../../assets/javascripts/theme.custom.js"></script>
		
		<!-- Theme Initialization Files -->
		<script src="../../assets/javascripts/theme.init.js"></script>

		<!-- Examples -->
		<script src="../../assets/javascripts/dashboard/examples.dashboard.js"></script>
		<script src="../../assets/javascripts/tables/examples.datatables.default.js"></script>
		<script src="../../assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
		<script src="../../assets/javascripts/tables/examples.datatables.tabletools.js"></script>
		<script src="../../assets/javascripts/ui-elements/examples.modals.js"></script>
		<script src="../../assets/javascripts/forms/examples.validation.js"></script>

		<script language="javascript" type="text/javascript">
         $( document ).ready(function() {
         	$( "#demoform" ).submit(function(event){

         		// soumettre un form contenant fichier 
         			var form_data = new FormData($("#demoform")[0]);
                    // var form_data=$("#demoform").serialize();                                                    
                    
                $.ajax({
                        url: $(this).attr("action"),
                        type: 'POST',  
                        data: form_data,
                        processData: false,
                        contentType: false,
						// contentType: false,
                        dataType:'html',
                        success : function(retour, statut) {
                            $("#retourAnswr").html(retour);
                            // $("#retourAnswr").show();
                        },
                        error: function() {
                            $("#retourAnswr").html("<div class='alert alert-danger'>Un problème est survenu, veuillez réessayez.</div>");
                            $("#retourAnswr").show();
                        }
                        
                            
                        });
                    return false;    
                });


		});
		</script>
				
	</body>
</html>