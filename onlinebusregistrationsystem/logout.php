<?php
	$user_id='';
	unset($_SESSION['clientId']);
	session_destroy();
	header("Location:../index.php"); exit;
	
?>