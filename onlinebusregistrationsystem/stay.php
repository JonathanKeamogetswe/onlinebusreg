<?php
    //session_start();
	
	//connect to database
	$db=mysqli_connect("localhost","root","","onlinebussystem");


	$dsn = 'mysql:host=localhost;dbname=onlinebussystem';
	$username = 'root';
	$password = '';
	$options = [];
  
	try{
	  $connection = new PDO($dsn, $username, $password, $options);
	  //echo "Successfully connected to the database.";
	}catch(PDOException $e){
  
	}

?>