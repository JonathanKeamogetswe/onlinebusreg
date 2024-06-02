<?php

	include 'register.php';
	include 'login.php';


  include 'stay.php';
	
?>




<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>VLB-Verified</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../assets/css/slicknav.css">
    <link rel="stylesheet" href="../assets/css/flaticon.css">
    <link rel="stylesheet" href="../assets/css/animate.min.css">
    <link rel="stylesheet" href="../assets/css/magnific-popup.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/themify-icons.css">
    <link rel="stylesheet" href="../assets/css/slick.css">
    <link rel="stylesheet" href="../assets/css/nice-select.css">
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<body>
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="../assets/img/logo/loder.jpg" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start -->
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li>Developer: 012 256 2658</li>
                                    <li>Email: info@onlinebusregistrationsystem.co.za</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                    <li> <a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-6 col-lg-2">
                            <div class="logo">
                            <h3 style="color:white">Online Bus Registration System</h3>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 

                                  


                                        <ul id="navigation">                                                                                          
                                            
                                            <li><a href="#loads">Loadboard</a></li>
                                            <li><a href="Mytrucks.php">My Trucks</a></li>                             
                                            <li><a href="addLearner.php">Vehicle Add</a></li>                             
                                              
                                           <li ><a href="logout.php" >Logout</a></li>
                                           
                                            <!-- <li><a href="#" class="btn header-btn btn-warning" data-toggle="modal"  data-dismiss="modal" data-target="#btnregister"><b>Register</b></a></li> -->
                                    </div>
                                        </ul>
                                    </nav>


                                    



                                </div>
                                <!-- Header-btn -->
                                
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>







        <!-- ======= Featured Services Section Section ======= -->
        <section id="loads">
        <div class="" data-aos="fade-up" style="margin:20px">







          <div class="container">
            <br/>
          
            <a href="#addLoads"  data-toggle="tooltip" title="Add new loads" style="font-size: 50px;" >
              <span class="glyphicon glyphicon-plus-sign "  ></span>
            </a>
      
        

          </div>



          <div class="">

            <div class=" box">
              <header class="section-header">
                
                <h3>Contracts / loads</h3>
                
              </header>






















































            <div class="scrollme">

              <table class="scrollme table" >

                <thead>
                <th scope="col" class="border-0 bg-light">
                    <div class="p-2 text-uppercase"></div>
                  </th>

                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 text-uppercase">Title</div>
                  </th>

  					
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">Contact</div>

                  </th>
                  
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">From</div>

                  </th>


                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Destination</div>
                  </th>

                 

                 

                  

                    


                </thead>


                <tbody >


                  <?php
            
                   $user_id = $_SESSION['user_id'];

                    $result = "SELECT *
                    FROM clientloads
                    WHERE liveStatus=1
                    
                    ORDER BY datePlaced DESC";


                  $num =0;
                foreach($db->query($result) as $row)
                {
                  $num=$num+1;


                  $provinceFrom = $row['provinceFrom'];
                  $cityFrom = $row['cityFrom'];
                  

                  $provinceTo = $row['provinceTo'];
                  $cityTo = $row['cityTo'];

                  $title = $row['title'];
                  
                  $contact = $row['contactNumber'];
                  
                  $details = $row['details'];


                
                  ?> 
                
                <tr>

                <td class='align-middle' style='text-align:center'>
                  <form action="" method="post" id='myform' >
                      <div class="form-group text-center " style="margin-bottom:0px">

                        <div class="py-2 text-uppercase "><button type='submit'  id="applyId" class="border-0 text-primary" name="applyId"  value="<?php echo $row['id'] ?>">Details</button></div>

                      </div>
                  </td>



                  <td >
                    <?php echo $title?>
                  </td>
                  
                   <td >
                    <?php echo $contact?>
                  </td>
                  
                 
                  
                  

                  <td > 
                    <?php echo $provinceFrom; echo ': '; echo $cityFrom;?>
                  </td>


                  <td > 
                    <?php echo $provinceTo; echo ': '; echo $cityTo;?>
                  </td>




                  




                              

                </tr>
                  <?php 

                  }
                  ?> 
                  
                  </form>






                  <?php
$_SESSION['applyId']=10000000;
                    if (isset($_POST['applyId'])){
                    

                      if(isset($_POST['applyId'])){    
                        
                        $_SESSION['applyId']=$_POST['applyId'];

                        
                         
                  
                        echo "<script>
                        window.location.href = 'apply.php';

                        </script>";

                        echo "</div>";

                      }else{


                        echo "<script>
                        
                          alert('Error occured, contact Transmatta directly');

                        </script>";
                      };

                    };

                    ?>





                    <!------------------------------------------------- test ------------------------------------------------------------------->

























              


                </tbody >
              </table>


              </div>



























































                  <br/>
                  <br/>


            </div>

          
   
     </section><!-- End Intro Section -->




 <!-- ======= Intro Section ======= -->
 <br/>
  <section id="myVehicles">
    <div class="intro-container">
      
       <header class="section-header">
          <h3>My Trucks</h3>
         
        </header>
      <div class="text-center">
 	
    
      <div class="" style="margin:20px">
		<div class="card">
			
				
					<a href="addLearner.php" class="btn btn-success">Add New Truck</a>
				
				
			
			<div class="scrollme card-body">
				<table class="scrollme table table-bordered">

        
					<tr>
						<!-- <th></th> -->
						<th>Truck</th>
						<th>Trailer 1</th>
						<th>Trailer 2</th>
						<th>Driver Name</th>
						<th>Driver ID/Passport</th>
						<th>Driver Cell</th>
						<th>Approval</th>
						
					</tr>
                        <?php
                        $result = "SELECT * FROM vehicles WHERE user_id = '$user_id'";
    
    
                      $num =0;
                    foreach($db->query($result) as $row)
                    {

                    }
                        
                        ?>
					<?php foreach($vehicles as $vehicle): ?>
                        
						<tr>
							
							<td><?= $vehicle->truckReg; ?></td>
							<td><?= $vehicle->trailer1Reg; ?></td>
							<td><?= $vehicle->trailer2Reg; ?></td>
							<td><?= $vehicle->driverName; ?></td>
							<td><?= $vehicle->driverId; ?></td>
							<td><?= $vehicle->driverCell; ?></td>
							<td><?= $vehicle->aprovals; ?></td>
						
						</tr>
					<?php endforeach; ?>
				</table>
			</div>
		</div>
	</div>

  <br/>
        <br/>
        <br/>





        <br/>
        <br/>
        <br/>
      
    </div>
  </section><!-- End Intro Section -->




































    <!-- contact-form end -->
    
</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area footer-bg">
        
            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-12">
                        <div class="footer-copy-right text-center">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Valmak Asset Management (Pty) Ltd <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://www.appsmatta.com" target="_blank">Appsmatta</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                        </div>
                    </div>
                </div>
            </div>
       
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

    <!-- JS here -->

    <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
    <!-- Jquery, Popper, Bootstrap -->
    <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../assets/js/popper.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- Jquery Mobile Menu -->
    <script src="../assets/js/jquery.slicknav.min.js"></script>

    <!-- Jquery Slick , Owl-Carousel Plugins -->
    <script src="../assets/js/owl.carousel.min.js"></script>
    <script src="../assets/js/slick.min.js"></script>
    <!-- One Page, Animated-HeadLin -->
    <script src="../assets/js/wow.min.js"></script>
    <script src="../assets/js/animated.headline.js"></script>
    <script src="../assets/js/jquery.magnific-popup.js"></script>

    <!-- Nice-select, sticky -->
    <script src="../assets/js/jquery.nice-select.min.js"></script>
    <script src="../assets/js/jquery.sticky.js"></script>
    
    <!-- contact js -->
    <script src="../assets/js/contact.js"></script>
    <script src="../assets/js/jquery.form.js"></script>
    <script src="../assets/js/jquery.validate.min.js"></script>
    <script src="../assets/js/mail-script.js"></script>
    <script src="../assets/js/jquery.ajaxchimp.min.js"></script>
    
    <!-- Jquery Plugins, main Jquery -->	
    <script src="../assets/js/plugins.js"></script>
    <script src="../assets/js/main.js"></script>
    
</body>




<!--------------------Start Register modal--------------------------------->
<div class="modal fade" id="btnregister" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">

					<div class="modal-header">
						<h4 class="modal-title" id="modallabel1">Truck Owner / Rentee Registration:</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>

					<div class="modal-body">

						<!-- --------Start register form=-------------------->
						<form method="post" action="onlinebusregistrationsystem/register.php" autocomplete="off">

              <div class="form-group">
                <label for="sel1">Usertype: </label>
                <a href="#" data-dismiss="modal" data-toggle="modal" data-target="#btnInfo">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                  </svg>
                </a>
                <select class="form-control" id="user_type" name="user_type">
                  
                  <option value="2">I agree that I am Truck Owner/Rentee</option>
              
                  
                </select>
							</div>

              <div class="form-group">
								<label for="inputEmail">Telephone / Cellphone number</label>
								<input class="form-control" placeholder="+27 82 000 0000" type="text" name="cell"  required/>
							</div>

							<div class="form-group">
								<label for="inputEmail">Email</label>
								<input class="form-control" placeholder="Example@example.com" type="email" name="email"  required/>
							</div>
							
							<div class="form-group">
								<label for="InputPassword">Password</label>
								<input class="form-control" placeholder="Enter Password" type="password" name="psw" required/>
							</div>
		
							<div class="form-group">
								<label for="InputPassword">Re-enter Password</label>
								<input class="form-control" placeholder="Re-enter Password" type="password" name="psw2" required/>
							</div>
							<br />
							
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="register_btn">Register</button>
							</div>

							<div class="modal-footer">
								<h5>Have account. Go to login:</h5>
								<a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnlogin">Go Login</a>
							</div>
						</form>
						<!-------------------------------------End Form----------------------->
					</div>

				</div>
			</div>
		</div><!-----------------------------End register modal------------------------------>
			
	
			
		<!--------------------Start login modal--------------------------------->
		<div class="modal fade" id="btnlogin" tabindex="-1" role="dialog" aria-labelledby="modallabel1" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h4 class="modal-title" id="modallabel1">Login below:</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>
						
					</div>
					
					<div class="modal-body">
						<!-- ---------------------Start form=------------------------------>
						<form  method="post" action="onlinebusregistrationsystem/login.php" autocomplete="off">
							<div class="form-group">
								<label for="inputUserName">Email</label>
								<input class="form-control" placeholder="Enter Email" type="text" name="email" 
								
									<?php

										if(isset($_SESSION['email'])){

											$emailhere=$_SESSION['email'];

											if($_SESSION['email']=''){
												echo "value=''";
											}else{
												echo "value='"; echo $emailhere; echo"'"; 
											};	
										}
										
									?> 
								
								required/>
							</div>
							<div class="form-group">
								<label for="InputPassword">Password</label>
								<input class="form-control" placeholder="Enter Password" type="password" name="psw" required/>
							</div>
							<br />
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
								<button type="submit" class="btn btn-primary" name="login_btn">Login</button>
							</div>
							
							<div class="modal-footer">
              <a href="transmatta/forget-password.php" class="btn btn-primary">Forgot Password</a>
								<h5>Open account:</h5>
								<a href="#" class="btn btn-success" data-dismiss="modal" data-toggle="modal" data-target="#btnregister">Go Register</a>
							</div>
						</form><!-------------------------------------End Form----------------------->
						
					</div>

				</div>
			</div>
		</div><!-----------------------------End login modal------------------------------>



</html>