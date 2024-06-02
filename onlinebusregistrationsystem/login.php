<?php
if(!isset($_SESSION))session_start();
	
	//connect to database
	$db=mysqli_connect("localhost","root","","onlinebussystem");
	

//********************** Parent Login******************************************************
if (isset($_POST['parent_login_btn'])){
$email = mysqli_real_escape_string($db,$_POST['email']);
$psw = mysqli_real_escape_string($db,$_POST['psw']);

$result = $db->query("SELECT * FROM parents WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
	$_SESSION['email'] =$email;
	
		
	$_SESSION['msg'] = "The email or password entered is incorrect!";
		header("location:../index.php");
	   exit();
	
}
else { // User exists
   $user = $result->fetch_assoc();
	//echo $user['id'];
	
	
    if ( $_POST['psw'] == $user['password'])  {
	// if ($_POST['psw']== $user['psw'])  {    
        $_SESSION['email'] = $user['email']; //globalising
		$_SESSION['user_id'] = $user['parentID'];
		$_SESSION['logged_in'] = true;
		$result = $db->query("SELECT parentID FROM parents WHERE email='$email'");
		$_SESSION['users_id']=$user['parentID'];
		$_SESSION['psw']=$user['password'];

		
			header("location:dashParent.php?");
		
   
		

       	exit();
		}
    else 	
	{
		$_SESSION['email'] =$email;
		
		$_SESSION['msg'] = "The email or password entered is incorrect!";
		header("location:../index.php");
       	exit();

		
	
    }
}
}


//********************** Admin Login******************************************************
if (isset($_POST['admin_login_btn'])){
$email = mysqli_real_escape_string($db,$_POST['email']);
$psw = mysqli_real_escape_string($db,$_POST['psw']);

$result = $db->query("SELECT * FROM administrator WHERE email='$email'");

if ( $result->num_rows == 0 ){ // User doesn't exist
	$_SESSION['email'] =$email;
	
		
	$_SESSION['msg'] = "The email or password entered is incorrect!";
		header("location:../index.php");
	   exit();
	
}
else { // User exists
   $user = $result->fetch_assoc();
	//echo $user['id'];
	
	
    if ( $_POST['psw'] == $user['password'])  {
	// if ($_POST['psw']== $user['psw'])  {    
        $_SESSION['email'] = $user['email']; //globalising
		$_SESSION['user_id'] = $user['adminID'];
		$_SESSION['logged_in'] = true;
		$result = $db->query("SELECT adminID FROM administrator WHERE email='$email'");
		$_SESSION['users_id']=$user['id'];
		$_SESSION['psw']=$user['password'];

		
			header("location:dashAdmin.php?");
	

       	exit();
		}
    else 	
	{
		$_SESSION['email'] =$email;
		
		$_SESSION['msg'] = "The email or password entered is incorrect!";
		header("location:../index.php");
       	exit();

		
	
    }
}
}

?>
