<?php
	//require 'PDOConnection.php';
	session_start();
	$dsn = 'mysql:host=localhost;dbname=onlinebussystem';
	$username = 'root';
	$password = '';
	$options = [];

	try{
		$connection = new PDO($dsn, $username, $password, $options);
		//echo "Successfully connected to the database.";
	}catch(PDOException $e){
		echo "Error connecting to the database ".$e->getMessage();
	}

	$message = '';
	$userID = $_SESSION['user_id'];
	$workingstatus='1';

	if(isset($_POST['uploadBtn']) )
	{
		
		
		$learnerName = $_POST['learnerName'];
		$learnerSurname = $_POST['learnerSurname'];
		$learnerCellPhone = $_POST['learnerCellPhone'];
		$learnerGrade = $_POST['learnerGrade'];
		
		// $images = $_POST['files'];
		// $aprovals= "IN PROGRESS";


		

	// }

		// if(!is_dir($dest_folder))
		// {
			// mkdir($dest_folder, 0777, true);

			$sql = "INSERT INTO learners(parentID, learner_first_name, learner_last_name,learner_cell_phone_number, grade) " .
			" VALUES(:userID, :learnerName, :learnerSurname,:learnerCellPhone, :learnerGrade)";
			$statement = $connection->prepare($sql);
			$res = $statement->execute([':userID' => $userID,':learnerName'=>$learnerName,':learnerSurname' => $learnerSurname, ':learnerCellPhone' => $learnerCellPhone, ':learnerGrade' => $learnerGrade]);

			if($res)
			{
				
				$message = "Successfully added a new learner";
				echo "<script type='text/javascript'>alert('$message');</script>";
			}else{
				
			}
			
		}
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title>Add Vehicle</title>
	<meta content="" name="description">
  	<meta content="" name="keywords">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  	<!-- Favicons -->
  	<link href="images/Transmatta.png" rel="icon">
  	<link href="../assetsimg/apple-touch-icon.png" rel="apple-touch-icon">

  	<!-- Google Fonts -->
  	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700" rel="stylesheet">

  	<!-- Vendor CSS Files -->
  	<link href="../assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  	<link href="../assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  	<link href="../assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  	<link href="../assets/vendor/ionicons/css/ionicons.min.css" rel="stylesheet">
  	<link href="../assets/vendor/animate.css/animate.min.css" rel="stylesheet">
  	<link href="../assets/vendor/venobox/venobox.css" rel="stylesheet">
  	<link href="../assets/vendor/owl.carousel/owl.carousel.min" rel="stylesheet">
  	<link href="../assets/vendor/aos/aos.css" rel="stylesheet">

  	<!-- Template Main CSS File -->
  	<link href="../assets/css/style.css" rel="stylesheet">

	<!-- Dropzone drag and drop -->
	<link rel="stylesheet" type="text/css" href="https://unpkg.com/dropzone@5.9.3/dist/min/dropzone.min.css">

  <style>
	#kv-gs-query{border-color:#fff}#kv-gs-query:focus{border-color:#80bdff}.gsc-control-cse{padding:0;margin:0;font-family:-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif}.gsc-adBlock{margin:0 0 0 -5px}.gsc-above-wrapper-area,.gsc-thumbnail-inside,.gsc-url-top{padding:0}.gs-result .gs-title,.gs-result .gs-title *{color:#007bff;text-decoration:none;background-color:transparent;-webkit-text-decoration-skip:objects}.gs-result .gs-title :hover,.gs-result .gs-title:hover{color:#0056b3;text-decoration:underline}.gsc-result .gs-title{height:1.4em}.gsc-result-info{padding-left:0}.gsc-results .gsc-cursor-box{margin:5px 0 0}.gsc-results .gsc-cursor-box .gsc-cursor-page{display:block;padding:.5rem .75rem;margin:0 0 0 -1px;line-height:1.25;color:#007bff;background-color:#fff;border:1px solid #ddd;float:left}.gsc-results .gsc-cursor-box .gsc-cursor-page:focus,.gsc-results .gsc-cursor-box .gsc-cursor-page:hover{color:#0056b3;text-decoration:none;background-color:#e9ecef;border-color:#ddd}.gsc-results .gsc-cursor-box .gsc-cursor-current-page{color:#fff;background-color:#007bff;border-color:#007bff}.gsc-cursor-page:first-child{margin-left:0;border:1px solid #ddd;border-top-left-radius:.25rem;border-bottom-left-radius:.25rem}.gsc-cursor-page:last-child{border-bottom-right-radius:.25rem;border-top-right-radius:.25rem}.gs-error-result .gs-snippet,.gs-no-results-result .gs-snippet{margin:0;padding:15px 20px;border-radius:.25rem;color:#856404;background-color:#fff3cd;border-color:#ffeeba}.gsc-selected-option-container{border-radius:.25rem}


	body {
	  font-family: sans-serif;
	  background-color: #eeeeee;
	}

	.file-upload {
	  background-color: #ffffff;
	  width: 600px;
	  margin: 0 auto;
	  padding: 20px;
	}

	.file-upload-btn {
	  width: 100%;
	  margin: 0;
	  color: #fff;
	  background: #1FB264;
	  border: none;
	  padding: 10px;
	  border-radius: 4px;
	  border-bottom: 4px solid #15824B;
	  transition: all .2s ease;
	  outline: none;
	  text-transform: uppercase;
	  font-weight: 700;
	}

	.scrollme {
	    overflow-x: auto;
	}

	.file-upload-btn:hover {
	  background: #1AA059;
	  color: #ffffff;
	  transition: all .2s ease;
	  cursor: pointer;
	}

	.file-upload-btn:active {
	  border: 0;
	  transition: all .2s ease;
	}

	.file-upload-content {
	  display: none;
	  text-align: center;
	}

	.file-upload-input {
	  position: absolute;
	  margin: 0;
	  padding: 0;
	  width: 100%;
	  height: 100%;
	  outline: none;
	  opacity: 0;
	  cursor: pointer;
	}

	.image-upload-wrap {
	  margin-top: 20px;
	  border: 4px dashed #1FB264;
	  position: relative;
	}

	.image-dropping,
	.image-upload-wrap:hover {
	  background-color: #1FB264;
	  border: 4px dashed #ffffff;
	}

	.image-title-wrap {
	  padding: 0 15px 15px 15px;
	  color: #222;
	}

	.drag-text {
	  text-align: center;
	}

	.drag-text h3 {
	  font-weight: 100;
	  text-transform: uppercase;
	  color: #15824B;
	  padding: 60px 0;
	}

	.file-upload-image {
	  max-height: 200px;
	  max-width: 200px;
	  margin: auto;
	  padding: 20px;
	}

	.remove-image {
	  width: 200px;
	  margin: 0;
	  color: #fff;
	  background: #cd4535;
	  border: none;
	  padding: 10px;
	  border-radius: 4px;
	  border-bottom: 4px solid #b02818;
	  transition: all .2s ease;
	  outline: none;
	  text-transform: uppercase;
	  font-weight: 700;
	}

	.remove-image:hover {
	  background: #c13b2a;
	  color: #ffffff;
	  transition: all .2s ease;
	  cursor: pointer;
	}

	.remove-image:active {
	  border: 0;
	  transition: all .2s ease;
	}
</style>
</head>
<body>
	  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top header-transparent">
    <div class="container-fluid">

      <div class="row justify-content-center">
        <div class="col-xl-11 d-flex align-items-center">
          <h1 class="logo mr-auto"><a href="#"></a></h1>
          <!-- Uncomment below if you prefer to use an image logo -->
          <!-- <a href="index.html" class="logo mr-auto"><img src="../assetsimg/logo.png" alt="" class="img-fluid"></a>-->
          <nav class="nav-menu d-none d-lg-block">
            <ul>

			<!-- <li><a href="custom.php">Custom</a></li> -->
			<!-- <li class=""><a href="dashPartner.php">Back</a></li>
          


              <li class=""><a href="dashPartner.php#myVehicles">Vehicles</a></li>
              <li class=""><a href="custom.php">TEST</a></li>

           
            </ul> -->
		</nav><!-- .nav-menu -->
	</div>
</div>
</div>
</header><!-- End Header -->
</div>
</div>
</section><!-- End Intro Section -->
<main id="main">
	<!-- ======= Featured Services Section Section ======= -->
    <section id="featured-services">
		<div class="container">
			<br/>
			<br/>
			<div class="row">
				<div class="col-lg-4 box">
					<br/>
            </div>

			

			
        </div>
      </div>
    </section><!-- End Featured Services Section -->
	<!-- ======= Featured Services Section Section ======= -->
	<section id="loads">
		<div class="container" data-aos="fade-up">
			<div class="container">
				<br/>
				<a href="#addLoads"  data-toggle="tooltip" title="Add new loads" style="font-size: 50px;" >
					<span class="glyphicon glyphicon-plus-sign "  ></span>
				</a>
			</div>
        </div>
    </section>
	
	<div class="container">
		<a class="btn btn-success" href="dashParent.php" style="color:black;">Back</a>
		<a class="btn btn-danger" style="margin-left:800px; color:black" href="logout.php">logout</a></li>
		

		<div class="card md-3-mt-1">
			<div class="card-header"><h2 style="text-align: center; font-weight: bold; color: green; font-size: 20px;">Add new learner details</h2></div>
				<?php if(!empty($message)): ?>
						<?= $message; ?>
				<?php endif; ?>
			<div class="card-body">
				<form method="post" enctype="multipart/form-data" action="addLearner.php" class="drop">
					<div class="form-group">
						<label for="learnerName">Learner name</label>
						<input type="text" name="learnerName" id="learnerName" class="form-control" required></input>
					</div>

					<div class="form-group">
						<label for="learnerSurname">Learner surname</label>
						<input type="text" name="learnerSurname" id="learnerSurname" class="form-control" required></input>
					</div>

					<div class="form-group">
						<label for="learnerCellPhone">Learner cell number</label>
						<input type="text" name="learnerCellPhone" id="learnerCellPhone" class="form-control"  required></input>
					</div>
					
					<div class="form-group">
						<label for="learnerGrade">Learner grade</label>
						<input type="text" name="learnerGrade" id="learnerGrade" class="form-control"  required></input>
					</div>

					<!-- <div class="form-group">
						<label for="driverCell">Driver Cell number </label>
						<input type="text" name="driverCell" id="driverCell" class="form-control"  required></input>
					</div>

					<div class="form-group">
						<label for="driverId">Driver ID/Passport number</label>
						<input type="text" name="driverId" id="driverId" class="form-control"  required></input>
					</div> -->
					
					<!-- <div enctype="multipart/form-data" class="dropzone">
						<strong>Drop files here or click to upload.</strong><br />
						<label for="image1">Horse full Image</label>
						<input type="file" name="upload[]" class="form-control" multiple/>
					</div> -->
					<!-- <div class="form-group">
						<label for="files">2 Image(s) of vehicle:</label>
						<input type="file" id="files" name="files[]" accept="image/*" multiple required></input>
					</div> -->
					<br>
					<div class="form-group">
						<button type="submit" class="btn btn-primary" id="uploadBtn" name="uploadBtn">Register Learner</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script type="text/javascript" src="https://unpkg.com/dropzone@5.9.3/dist/min/dropzone.min.js"></script>

	<script type="text/javascript">
		//Disabling autoDiscover
		Dropzone.autoDiscover = false;
		$(function() {
			//Dropzone class
			var myDropzone = new Dropzone(".dropzone", {
				url: "addLearner.php",
				addRemoveLinks: true,
				paramName: "file",
				parallelUploads: 10,
				uploadMultiple: true,
				maxFilesize: 8,
				maxFiles: 6,
				acceptedFiles: '.png,.jpeg,.jpg,.pdf,.doc,.docx',
				dictCancelUpload: "Cancel",
				autoProcessQueue: true,
				success:function(file, response){
					if (response == "true") {
						$("#message").append("<div class='alert alert-success'>Files Uploaded successfully</div>");
					} else {
						$("#message").append("<div class='alert alert-danger'>Files can not uploaded</div>");
					}
				}
			});

			myDropzone.on("processing", function() {
    			myDropzone.options.autoProcessQueue = true;
			});
			
			$('#uploadBtn').click(function(){    
				myDropzone.processQueue();
			});
		});
	</script>
	<br>
  <!-- ======= Footer ======= -->
  <footer id="footer">
  

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Valmak Asset Management</strong>. All Rights Reserved
      </div>
     
    </div>
  </footer><!-- End Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
</body>
</html> 