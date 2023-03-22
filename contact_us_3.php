<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
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
  <body>


    <?php
      if($_REQUEST['status']=="pass"){
        ?>

<nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/nz.png" width="100" class="d-inline-block align-top" alt="">
            </a>
            <div class="nav_name">
                <img src="images/NZ Fashion.png" width="300" class="d-inline-block align-top" alt="">
            </div>
        </nav>


        <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link text-danger" href="page.php">Home <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dreses
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="denims.php">Denims</a>
                          <a class="dropdown-item" href="accesories.php">Casual Shirts</a>
                          <!-- <div class="dropdown-divider"></div> -->
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="accesories.php">Accesories</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="contact_us.php">Contact Us</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="about_us.php">About Us</a>
                  </li>
              </ul>
                   
                </div>
            </div>
        </nav>
        <!-- Nav Bar code stop from here -->
     
        <!-- banner codes start from here -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/contact_us.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> -->
                  </div>
              </div>
              </div>
          </div>
            <!-- banner codes stop from here -->

          <div class="container">   
            <div class="row"> 
                <div class="card contact_margin contact-card" style="width: 40rem;" >
                    <div class="card-body ">
                        <h2 >Contact Us</h2>
                        <form action="contact_us_2.php" method="post">    
                        <div class="form-group margin_up">
                            <label for="name">Add Your Name</label>
                            <input type="text" class="form-control text-dark border-radi" name="name" id="name" placeholder="Add Your Name" required style="max-width: 400px;">
                        </div>
                        <div class="form-group margin_up">
                            <label for="name">Add Your E-Mail address </label>
                            <input type="text" class="form-control text-dark border-radi" name="mail_address" id="mail_address" placeholder="Add your email address here" required style="max-width: 400px;">
                        </div>

                        <div class="from-group margin_up">
                            <label for="name">Add Your Phone number</label> 
                            <input type="text" class="form-control text-dark border-radi" name="tele_number" id="teleNumber" placeholder="Add Your Phone number here" required style="max-width: 400px;">
                        </div>

                        <div class="from-group margin_up">
                            <label for="name">Add Your Message Here</label>
                            <textarea class="form-control border-radi" name="message" id="" cols="30" rows="5" required style="max-width: 500px;"></textarea>
                        </div>

                    </div>
                       
                     </form>
                                                  
                    </div>
                </div>
    <!-- alert codes start from here -->
    <div class="alert alert-success alert-dismissible fade show product-alert" role="alert">
        <h2 class="text-center">Great Your Message Has Been Successfully Sent.......</h2>
            <p class="text-center"><strong > </strong>  We Will Contact  You  As Soon As Posible  
              </button>
              <br />
              <!-- <a href="add_product_1.php" class="btn btn-success my-3">Add Another Record</a> -->
            </div>
<!-- alert codes stop from here  -->
                <!-- follow us on icons codes start from here -->
                <div class="container text-center">
                    <h3 class="text-size-follow">Follow Us On</h3>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                       
                      <div class="col margin-contact">                       
                        <img class="icon-size" src="images/facebook.gif"/>
                        <h3 class="text-size">Follow us on Facebook</h3>
                      </div>

                      <div class="col margin-contact">                        
                        <img class="icon-size" src="images/twitterr.gif"/>
                        <h3 class="text-size">Follow us on Twitter</h3>
                      </div>

                      <div class="col margin-contact">                      
                        <img class="icon-size" src="images/instagram.gif"/>
                        <h3 class="text-size">Follow us on Instagram</h3>
                      </div>

                      <div class="col margin-contact">                       
                        <img class="icon-size" src="images/whatsapp.gif"/>
                        <h3 class="text-size" text-success>+081-123456789</h3>
                      </div>                
                    </div>
                  </div>
                      <!-- follow us on icon codes stop from here -->   
            
            
                </div> <!-- div container finsh from here -->
               </div>  <!-- div row finish from here -->
                
                 
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

                        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                        <script>
                            AOS.init();
                        </script>


          
        <?php
      }
      else{
        // echo "<h2 class='text-danger'>Add new record failed.!</h2>";
        ?>
          <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/nz.png" width="100" class="d-inline-block align-top" alt="">
            </a>
            <div class="nav_name">
                <img src="images/NZ Fashion.png" width="300" class="d-inline-block align-top" alt="">
            </div>
        </nav>

      <nav class="navbar navbar-expand-lg navbar-dark">
      <div class="container-fluid">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item active">
                      <a class="nav-link text-danger" href="page.php">Home <span class="sr-only">(current)</span></a>
                  </li>

                  <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dreses
                      </a>

                      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="denims.php">Denims</a>
                          <a class="dropdown-item" href="accesories.php">Casual Shirts</a>
                          <!-- <div class="dropdown-divider"></div> -->
                      </div>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="accesories.php">Accesories</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="contact_us_1.php">Contact Us</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="about_us.php">About Us</a>
                  </li>
              </ul>

                </div>
            </div>
        </nav>
        <!-- Nav Bar code stop from here -->
     
        <!-- banner codes start from here -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/contact_us.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> -->
                  </div>
              </div>
              </div>
          </div>
            <!-- banner codes stop from here -->

          <div class="container">   
            <div class="row"> 
                <div class="card contact_margin contact-card" style="width: 40rem;" >
                    <div class="card-body ">
                        <h2 >Contact Us</h2>
                        <form action="contact_us_2.php" method="post">    
                        <div class="form-group margin_up">
                            <label for="name">Add Your Name</label>
                            <input type="text" class="form-control text-dark border-radi" name="name" id="name" placeholder="Add Your Name" required style="max-width: 400px;">
                        </div>
                        <div class="form-group margin_up">
                            <label for="name">Add Your E-Mail address </label>
                            <input type="text" class="form-control text-dark border-radi" name="mail_address" id="mail_address" placeholder="Add your email address here" required style="max-width: 400px;">
                        </div>

                        <div class="from-group margin_up">
                            <label for="name">Add Your Phone number</label> 
                            <input type="text" class="form-control text-dark border-radi" name="tele_number" id="teleNumber" placeholder="Add Your Phone number here" required style="max-width: 400px;">
                        </div>

                        <div class="from-group margin_up">
                            <label for="name">Add Your Message Here</label>
                            <textarea class="form-control border-radi" name="message" id="" cols="30" rows="5" required style="max-width: 500px;"></textarea>
                        </div>
                        <input type="SUBMIT" class="btn color-login text-light" name="SUBMIT" id="SUBMIT" style="margin-top: 20px;">
                        <input type="RESET" class="btn btn-warning text-light" name="RESET" id="RESET" style="margin-top: 20px;">
                    </div>
                       
                     </form>                             
                    </div>
                </div>
                
                <div class="alert alert-danger alert-dismissible fade show product-alert" role="alert">
        <h2 class="text-center">Oops... Your Message Has Been Not Sent</h2>
            <p class="text-center"><strong > </strong>  Please Try Again   
              </button>
              <br />
              <!-- <a href="add_product_1.php" class="btn btn-success my-3">Add Another Record</a> -->
            </div>

                <!-- follow us on icons codes start from here -->
                <div class="container text-center">
                    <h3 class="text-size-follow">Follow Us On</h3>
                    <div class="row row-cols-2 row-cols-lg-5 g-2 g-lg-3">
                       
                      <div class="col margin-contact">                       
                        <img class="icon-size" src="images/facebook.gif"/>
                        <h3 class="text-size">Follow us on Facebook</h3>
                      </div>

                      <div class="col margin-contact">                        
                        <img class="icon-size" src="images/twitterr.gif"/>
                        <h3 class="text-size">Follow us on Twitter</h3>
                      </div>

                      <div class="col margin-contact">                      
                        <img class="icon-size" src="images/instagram.gif"/>
                        <h3 class="text-size">Follow us on Instagram</h3>
                      </div>

                      <div class="col margin-contact">                       
                        <img class="icon-size" src="images/whatsapp.gif"/>
                        <h3 class="text-size" text-success>+081-123456789</h3>
                      </div>                
                    </div>
                  </div>
                      <!-- follow us on icon codes stop from here -->   
            
            
                </div> <!-- div container finsh from here -->
               </div>  <!-- div row finish from here -->
                
                 
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

                        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
                        <script>
                            AOS.init();
                        </script>


        <?php
      }

     ?>

</div>
</div>


  </body>
</html>
