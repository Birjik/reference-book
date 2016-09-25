<?php
	session_start();
	require_once "lib/database_class.php";
	require_once "lib/manage_class.php";
	$db  = new DataBase();
	$manage = new Manage($db);
	$r="http://".$_SERVER["HTTP_HOST"];
	if($_POST["reg"])  
		$r = $manage->regUser(); 
	else if($_POST["auth"])
		$r = $manage->login();
	else if($_GET["logout"])
		$r = $manage->logout();		 
	else if($_POST["article"])
		$r = $manage->article($_POST["title"],$_POST["intro_text"],$_POST["full_text"]);
	else if($_POST["poll"])
		$r = $manage->poll();		 
	$manage->redirect($r); 
?>                            