<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/models/inc/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/classes/user.class.php';


		if(isset($_POST['pwd'])) 
							{
									$user=new User();
									$check=$user->check_login($_POST['username'],$_POST['pwd']);
									// echo $check;

									if ($check == 100)
									{

										?>
										
										<script>
										window.location.href = 'admin/accueil_admin.php';
										</script>
										

<?php
									}
									

									elseif ($check == 50)
									{
										?>
										
										<script>
										window.location.href = 'autor/accueil_autor.php';
										</script>
										

<?php
									}

								else 

									{
										
										header("Location:../../pages-500.php");
									}

							}
	?>
	