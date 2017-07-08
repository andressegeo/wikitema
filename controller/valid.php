<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/models/inc/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/classes/user.class.php';


	if(isset($_POST['theme'])) {

		$user=new User();
		$check=$user->insert_theme($_POST['theme']);
		// echo $check;
		header("Location:../views/admin/accueil_admin.php");
	}

	if(isset($_POST['pwd'])) {

		$user=new User();
		$check=$user->insert_user($_POST['iden'],$_POST['nom'],$_POST['login'],md5($_POST['pwd']),$_POST['mail'],$_POST['level']);
		// echo $check;
		header("Location:../views/admin/accueil_admin.php");
	}


	if(isset($_POST['com'])) {

		$user=new User();
		$check=$user->insert_article($_POST['level'],$_POST['titre'],$_POST['com']);
		// echo $check;
		header("Location:../views/admin/accueil_admin.php");
	}

	?>