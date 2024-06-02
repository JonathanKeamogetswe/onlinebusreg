<?php
if(!isset($_SESSION))session_start();
	
	//connect to database
	$db=mysqli_connect("localhost","root","","onlinebussystem");
	// session_start();
	
	
//**********************Register******************************************************

if (isset($_POST['registerchildforbus_btn'])) {
	$waitingListNumber = rand(1000,9999);
	$applicationStatus="waiting list";
	$busLimit=35;
	$adminID=1;
	$learnerID = $_POST['childid'];
	$pickupnumber = $_POST['pickupnumber'];
	$dropoffnumber = $_POST['dropoffnumber'];

$waitingListDate = date("y/m/d");
	
	$result = $db->query("SELECT pick_up_name FROM pickups WHERE pick_up_number='$pickupnumber'");
	$pickupname = $result->fetch_assoc();

	$result2 = $db->query("SELECT drop_off_name FROM dropoffs WHERE drop_off_number='$dropoffnumber'");
	$dropoffname = $result2->fetch_assoc();

	$busroutename = $pickupname['pick_up_name']."-".$dropoffname['drop_off_name'];
	
	// echo "<script type='text/javascript'>alert('$busroutename');</script>";
	$sql = "INSERT INTO user(cell, email, psw, user_type)VALUES('$cell','$email', '$psw', '$user_type')";

	$sql = "INSERT INTO bus_routes(bus_route_name, learnerID,adminID, bus_limit,application_status,waiting_list_number,waiting_list_date) " .
	" VALUES($ :learnerID,:adminID, :busLimit,:applicationStatus,:waitingListNumber,:waitingListDate)";
	$res = mysqli_query($db,$sql);

	if($res)
	{
		
		$message = "Successfully Applied for bus";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		
	}
	
}






// if (isset($_POST['register_btn'])){
// 	$user_type = mysqli_real_escape_string($db,$_POST['user_type']);
// 	$cell = mysqli_real_escape_string($db,$_POST['cell']);
// 	$email = mysqli_real_escape_string($db,$_POST['email']);
// 	$psw = mysqli_real_escape_string($db,$_POST['psw']);
// 	$psw2 = mysqli_real_escape_string($db,$_POST['psw2']);
	
	
	
// 	// First checking if user exist
	
// 	$result = $db->query("SELECT * FROM user WHERE email='$email'");

// 	if ( $result->num_rows == 0 ){
						
// 		if ($psw == $psw2){
			
// 			//Create user
// 			$psw= md5($psw);//hash password before storing for security purposes
// 			mysqli_query($db,$sql);
			
			
// 			$users_id = $db-> insert_id; //get the user id now and store in $users_id

		

			

// 			// $InsertUsername = "INSERT INTO login_details(user_id)VALUES('$users_id')";
// 			// mysqli_query($db,$InsertUsername);

// 			// $lastSeenDefault='NULL';
// 			// $UpdateTime = $db->query( "UPDATE login_details SET last_activity = $lastSeenDefault WHERE user_id='$users_id'");
// 			// mysqli_query($db,$UpdateUTime);

		
// 			//*******************************create user folder for uploads***************************
// 			// change the name below for the folder you want
// 			$dir = "usersfiles/$users_id";
			
// 			if( is_dir($dir) == false )
// 			{
// 			    mkdir($dir);
// 			}
// 			$dir = "usersfiles/$users_id/tmpfiles";
			
// 			if( is_dir($dir) == false )
// 			{
// 			    mkdir($dir);
// 			}
	
			
			
			
// 			$_SESSION['msgRegister']="Welcome to Transmatta, you can now log in.";
			
			
// 			header("location: ../index.php");
			
// 			exit();

// 		}else{
// 			//failed
			
		
// 			$_SESSION['msgRegister']="The two passwords do not match, please enter matching passwords";
// 				header("location: ../index.php");
			
// 			exit();
// 			session_destroy();
// 		}
// 	}else{
	
// 		$_SESSION['msgRegister']="The user with the same email address already exist, please register with a different email.";
// 			header("location: ../index.php");
			
// 			exit();
// 	}							
// }



?>


