<?php
// session_start();
include_once $_SERVER['DOCUMENT_ROOT'].'wikitema/models/inc/config.php';
if (isset($_SESSION['pseudo'])) 
{
	session_destroy();
	header('location:../index.php');
}else echo "not session pseudo";


?>

	