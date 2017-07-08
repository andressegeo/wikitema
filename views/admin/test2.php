<?php
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/inc/config.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/controller/FormManager.class.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/classes/user.class.php';


if (isset($_POST['submit'])) 
	{
		$form1=new FormManager;
		$form1->submitForm();
		// $form1->Submit();

		
	}else echo "requette po insérée";

	// if (isset($_POST['send'])) 
	// {
	// 	$obj=new User;
	// 	$obj->insertText();
	// 	// $form1->Submit();
	// }else echo "not insert request";



?>