<?php
if(!isset($_SESSION))session_start();
	
	//connect to database
	include 'stay.php';
	
//**********************Register******************************************************
if (isset($_POST['send_btn'])){
	$named = mysqli_real_escape_string($db,$_POST['name']);
	$email = mysqli_real_escape_string($db,$_POST['email']);
    $contactNumber = mysqli_real_escape_string($db,$_POST['contactNumber']);
    $subjects = mysqli_real_escape_string($db,$_POST['subjects']);
    $messages = mysqli_real_escape_string($db,$_POST['messages']);
    

    $sql = "INSERT INTO mails(named,email,contactNumber, subjects, messages)VALUES('$named','$email', '$contactNumber', '$subjects','$messages')";
			mysqli_query($db,$sql);
    $_SESSION['emailmsg']= "Thank you, your message was sent successfully, we will reply soon";


    header("location: ../index.php");

    exit();
}

?>