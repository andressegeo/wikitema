<?php
ob_start();
session_start();

error_reporting(1);

//set timezone
date_default_timezone_set('Europe/Paris');

//database credentials
define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','');
define('DBNAME','wikitema');


//CONTROLE D'ACCES PAR SESSION
if ( ((!isset($_SESSION["id"])) || (empty($_SESSION["id"])) || (is_null($_SESSION["id"]))) && (!(isset($_POST['nom'])))) {
	header('Location:'.$_SERVER['DOCUMENT_ROOT'].'../index.php');
}

// include_once $_SERVER['DOCUMENT_ROOT'].'../classes/db.class.php';
// include_once $_SERVER['DOCUMENT_ROOT'].'/adm/inc/class/ui.class.php';
include_once $_SERVER['DOCUMENT_ROOT'].'/wikitema/assets/classes/db.class.php';	


?>