<?php
    require("validate_customer.php");
    require("code_lib.inc.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Edit profile</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="css/bootstrap.css">

    <script type="text/javascript" src="js/bootstrap.js">
    </script>

  </head>
  <body class="footer-pro">
    <nav class="navbar  navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="images/nz.png" width="100" class="d-inline-block align-top" alt="">
      </a>
      <div class="nav_name">
        <img src="images/NZ Fashion.png" width="300" class="d-inline-block align-top" alt="">
      </div>
    </nav>


    <div class="container">
      <div class="row">
      <h2 class="text-center" style="font-size: 40px;">My Account</h2>
         <img class="user_image_icon" src="customer_profile_picture/large/<?php echo $_SESSION['picture'];?>" alt="" style="width:140px; height:130px;">       
               
        <div class="container">   
          <div class="row"> 
              <div class="card contact_margin contact-card" style="width: 40rem; margin-top: 20px;" >
                  <div class="card-body ">
                   
                  <form action="user_account_modify_2.php" method="post" enctype="multipart/form-data">                                                  
                     
                <div class="form-group mb-3">
                  <label class="label" for="">UserName</label>
                  <input type="text" name="cus_name" class="form-control" placeholder="Enter Your New User Name"
                   required  value="<?php echo $_SESSION['cus_name']; ?>">
                </div>
     
			    <div class="form-group mb-3">
			      	<label class="label" >Add Your E-Mail Address</label>
			      	<input type="text" name="cus_id" class="form-control disabled" placeholder="Ex: admin@gmail.com " required 
                    value="<?php echo $_SESSION['cus_id']; ?>" >
			    </div>
             
		        <div class="form-group mb-3">
		        	<label class="label" for="">Password</label>
		            <input type="password" name="access_code" class="form-control" placeholder="Password" id="myInput" required
                    value="<?php echo $_SESSION['access_code']; ?>" >
                    <input class="form-check-input" type="checkbox" onclick="myFunction()"  id="flexCheckDefault">  Show   Password
		    	</div>

				<div class="form-group mb-3">
     			 <label for="label">Picture</label>
      			 <input class="input" type="file" name="picture" id="picture" >
                   <img src="customer_profile_picture/thumbs/<?php echo $row['picture'];?>" alt="">
    			</div>

            <input type="submit" class="btn user_btn text-light" name="submit" id="submit" value="Save Changes">     
            
                         
               </form> 
              </div>
            </div>                                       
        </div>
      </div> 

    </div><!-- div row finish from here  -->
  </div> <!-- div container finish from here -->

               <!-- footer area start from here  -->
               <footer class="footer_area section_padding_130_0">
                <div class="container">
                    <div class="row">
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg-4">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Footer Logo-->
                                <div class="footer-logo mb-3"></div>
                                <p>Appland is completely creative, lightweight, clean app landing page.</p>
                                <!-- Copywrite Text-->
                                <div class="copywrite-text mb-5">
                                    <p class="mb-0">Made with <i class="lni-heart mr-1"></i>by<a class="ml-1" href="https://wrapbootstrap.com/user/DesigningWorld">Designing World</a></p>
                                </div>
                                <!-- Footer Social Area-->
                                <div class="footer_social_area">
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Pinterest"><i class="fa fa-pinterest"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Skype"><i class="fa fa-skype"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Widget Title-->
                                <h5 class="widget-title">About</h5>
                                <!-- Footer Menu-->
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="#">Corporate Sale</a></li>
                                        <li><a href="#">Terms &amp; Policy</a></li>
                                        <li><a href="#">Community</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Widget Title-->
                                <h5 class="widget-title">Support</h5>
                                <!-- Footer Menu-->
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Help</a></li>
                                        <li><a href="#">Support</a></li>
                                        <li><a href="#">Privacy Policy</a></li>
                                        <li><a href="#">Term &amp; Conditions</a></li>
                                        <li><a href="#">Help &amp; Support</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Single Widget-->
                        <div class="col-12 col-sm-6 col-lg">
                            <div class="single-footer-widget section_padding_0_130">
                                <!-- Widget Title-->
                                <h5 class="widget-title">Contact</h5>
                                <!-- Footer Menu-->
                                <div class="footer_menu">
                                    <ul>
                                        <li><a href="#">Call Centre</a></li>
                                        <li><a href="#">Email Us</a></li>
                                        <li><a href="#">Term &amp; Conditions</a></li>
                                        <li><a href="#">Help Center</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>




  </body>
</html>
