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
                                            
                                                                        
                                            <li><a href="addLearner.php">Register a learner</a></li>                             
                                              
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
                
                <h3>My learners</h3>
                
              </header>






















































            <div class="scrollme">

              <table class="scrollme table" >

                <thead>
                

                  <th scope="col" class="border-0 bg-light">
                    <div class="p-2 text-uppercase">Learner first name</div>
                  </th>

  					
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">Learner Surname</div>

                  </th>
                  
                  <th scope="col" class="border-0 bg-light" >
                  
                    <div class="py-2 text-uppercase">Learner cellphone</div>

                  </th>


                  <th scope="col" class="border-0 bg-light">
                    <div class="py-2 text-uppercase">Current Grade</div>
                  </th>

                 

                 

                  

                    


                </thead>


                <tbody >


                  <?php
            
                   $user_id = $_SESSION['user_id'];

                    $result = "SELECT *
                    FROM learners
                    WHERE parentID=$user_id
                    
                    ORDER BY grade";


                  $num =0;
                foreach($db->query($result) as $row)
                {
                  $num=$num+1;


                  $firstName = $row['learner_first_name'];
                  $lastName = $row['learner_last_name'];
                  

                  $phoneNumber = $row['learner_cell_phone_number'];
                  $grade = $row['grade'];

                  


                
                  ?> 
                
                <tr>

                <!-- <td class='align-middle' style='text-align:center'>
                  <form action="" method="post" id='myform' >
                      <div class="form-group text-center " style="margin-bottom:0px">

                        <div class="py-2 text-uppercase "><button type='submit'  id="applyId" class="border-0 text-primary" name="applyId"  value="<?php echo $row['learnerID'] ?>">Details</button></div>

                      </div>
                  </td> -->



                  <td >
                    <?php echo $firstName?>
                  </td>
                  
                   <td >
                    <?php echo $lastName?>
                  </td>
                  
                 
                  
                  

                  <td > 
                    <?php echo $phoneNumber?>
                  </td>


                  <td > 
                    <?php echo $grade?>
                  </td>




                  




                              

                </tr>
                  <?php 

                  }
                  ?> 
                  
                  </form>






                  





                    <!------------------------------------------------- test ------------------------------------------------------------------->

























              


                </tbody >
              </table>


              </div>



























































                  <br/>
                  <br/>


            </div>

          
   
            <a href="addLearner.php" class="btn btn-success">Register New Learner</a>
       
            <a href="#" class="btn header-btn btn-warning" data-toggle="modal"  data-dismiss="modal" data-target="#btnregister"><b>Apply for bus transport(2024)</b></a>
     </section><!-- End Intro Section -->




 <!-- ======= Intro Section ======= -->
 <br/>
 
  <!-- End Intro Section -->






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
                                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Online bus registration system (Pty) Ltd <i class="fa fa-heart" aria-hidden="true"></i> by <a href="#" target="_blank">Precious</a>
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
						<h4 class="modal-title" id="modallabel1">Learner Bus Registration:</h4>
						<button type="button" class="close" data-dismiss="modal" aria-label="close">
							<span aria-hidden="true">&times;</span>
						</button>

					</div>

					<div class="modal-body">

						<!-- --------Start register form=-------------------->
						<form method="post" action="register.php" autocomplete="off">

              <div class="form-group">
								<label for="childid">Child name:</label>
								

                
                  <?php 
                    
                    $user_id = $_SESSION['user_id'];
                    

                    $result = "SELECT *
                    FROM learners
                    WHERE parentID=$user_id";
                    
                  
                    
                  $results1 = mysqli_query($db,$result);
                

                ?> 
                <select name="childid" id="childid">
                  <?php while ($row1 = mysqli_fetch_array($results1)):; ?>
                    <option value="<?php echo $row1['learnerID'];?>"><?php echo $row1['learner_first_name'];?></option>
                    <?php endwhile;?>
                  
                </select>
							</div>
              <div class="form-group">
								<label for="pickupnumber">Bus pickup:</label>
								

                
                  <?php 
                    
                    $user_id = $_SESSION['user_id'];
                    

                    $result = "SELECT *
                    FROM pickups";
                    
                  
                    
                  $results2 = mysqli_query($db,$result);
                

                ?> 
                <select name="pickupnumber" id="pickupnumber">
                  <?php while ($row2 = mysqli_fetch_array($results2)):; ?>
                    <option value="<?php echo $row2['pick_up_number'];?>"><?php echo $row2['pick_up_name'];?></option>
                    <?php endwhile;?>
                  
                </select>
							</div>
              <div class="form-group">
								<label for="dropoffnumber">Bus Drop off:</label>
								

                
                  <?php 
                    
                    $user_id = $_SESSION['user_id'];
                    

                    $result = "SELECT *
                    FROM dropoffs";
                    
                  
                    
                  $results2 = mysqli_query($db,$result);
                

                ?> 
                <select name="dropoffnumber" id="dropoffnumber">
                  <?php while ($row2 = mysqli_fetch_array($results2)):; ?>
                    <option value="<?php echo $row2['drop_off_number'];?>"><?php echo $row2['drop_off_name'];?></option>
                    <?php endwhile;?>
                  
                </select>
							</div>

							
							
							<!-- <div class="form-group">
								<label for="InputPassword">Password</label>
								<input class="form-control" placeholder="Enter Password" type="password" name="psw" required/>
							</div>
		
							<div class="form-group">
								<label for="InputPassword">Re-enter Password</label>
								<input class="form-control" placeholder="Re-enter Password" type="password" name="psw2" required/>
							</div>
							<br />
							
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
								<button type="submit" class="btn btn-primary" name="registerchildforbus_btn">Apply</button>
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