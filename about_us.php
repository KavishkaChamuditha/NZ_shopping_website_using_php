<?php
require("validate_customer.php");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>About us</title>
    <link rel="stylesheet" href="css/styles.css">
    
    <!--boostrap files  -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

    <!-- icon importing -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
   
    <!--boostrap files  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- boostrap js files -->
    <script type="text/javascript" src="js/bootstrap.js">
    </script>
  </head>

    <body>
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
                          <a class="dropdown-item" href="casual_shirts.php">Casual Shirts</a>
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
              <form class="d-flex" method="post" enctype="multipart/form-data"> 
                <div class="dropdown dropstart">
                    <a class="nav-link " id="navbarDropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"> <img class="user_image_icon " src="customer_profile_picture/thumbs/<?php echo $_SESSION['picture'];?>" alt="" style="width:40px; height:45px; margin-bottom:0px;">
                    </a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                     <p class="text-light font-weight-bold text-left username">Hii <?php echo $_SESSION['cus_name']; ?><p >
                        <a class="dropdown-item text-light" href="user_account.php">Your Account</a>
                        <a class="dropdown-item text-light" href="customer_log_in_1.php">Log Out</a>
                        <!-- <div class="dropdown-divider"></div> -->
                    </ul>
                </div>
             </form>
                </div>
            </div>
        </nav>
        <!-- Nav Bar code stop from here -->
        <!-- Nav Bar code stop from here -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/about_us.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> -->
                  </div>
              </div>
              </div>
          </div>


          <div class="container">
            <div class="row">
        <div class="col-lg-0 col-md-0">
          <div class="about_us">
                  <h5 class="card-title text-center font-size-au" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000" >_ _ _ _About Us_ _ _ _</h5>
                  <p class="card-text text-center "  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">NZ fashion and clothing Online (Pvt) Ltd is based on the ideology of an accessible department store within Sri Lanka. Since the founding of the company in 1990, we have diversified our product range from apparel to accessories, appliances, mobile devices and more. Throughout our history, we have been dedicated to providing a wide variety of products to our community at the best level of quality possible.

                Following a customer-focused approach within our company, we give priority to customer service. Our staff is continuously dedicated to helping you every step of the way.

                A core value within our company is to give back to the community. We have initiated programs that have included investment in the infrastructure of various public monuments.

                One of our newer aims is to integrate our company with the rapidly changing technology. Our commitment to this aim is through the ignition of our website and social media platforms. Please follow us in order to keep up-to-date.</p>
          </div>
        </div>  </div>
        </div>
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
              <div class="carousel-item active">
                  <img src="images/about_us_team.jpg" class="d-block w-100" alt="..."  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                  <div class="carousel-caption d-none d-md-block">
                      <!-- <h5>First slide label</h5>
                      <p>Some representative placeholder content for the first slide.</p> -->
                  </div> 
              </div>
              </div>
          </div>


          <div class="container">
            <div class="row">

              <div class="col-lg-3 col-md-5">
                <div class="card card-about-us card-border-dashboard" style="width: 18rem;">
                <img class="card-img-top" src="images/location_1.jpg" alt="Card image cap"  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                </div>
              </div>

              <div class="col-lg-3 col-md-5">
              <div class="card card-about-us card-border-dashboard" style="width: 18rem;">
                <img class="card-img-top" src="images/location_2.jpg" alt="Card image cap"  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
              </div>
              </div>


              <div class="col-lg-3 col-md-5">
              <div class="card card-about-us card-border-dashboard margin-card" style="width: 18rem;">
                <img class="card-img-top" src="images/location_3.jpg" alt="Card image cap"  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
              </div>
              </div>

              <div class="col-lg-3 col-md-5">
              <div class="card card-about-us card-border-dashboard margin-card" style="width: 18rem;">
                <img class="card-img-top" src="images/location_4.jpg" alt="Card image cap"  data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
              </div>
              </div>
            </div> <!-- div container finsh from here -->
          </div>  <!-- div row finish from here -->

 <!-- contact message code start from here -->
    <input type="checkbox" id="check"> 
    <label class="chat-btn" for="check"> 
        <i class="fa fa-commenting-o comment"></i> 
        <i class="fa fa-close close"></i> 
    </label> <div class="this-chat"> 
        <div class="header"> <h6>Let's Chat - Online</h6> </div> 
        <div class="text-center p-2"> 
            <span>Please fill out the form to start chat!</span> 
        </div> 
        <div class="chat-form"> <input type="text" class="form-control" placeholder="Name"> 
            <input type="text" class="form-control" placeholder="Email"> 
            <textarea class="form-control" placeholder="Your Text Message"></textarea>
             <button class="btn btn-chat text-light">Submit</button> 
            </div> 
        </div>
    <!-- contact message code start from here -->


<!-- footer codes start from here -->
<footer class="footer_area section_padding_130_0">
        <div class="container">
            <div class="row">
                <!-- Single Widget-->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="single-footer-widget section_padding_0_130">
                        <!-- Footer Logo-->
                        <div class="footer-logo mb-3"></div>
                        <p>NZ Fashion Best Mens Dress Manufacture Company</p>
                        <!-- Copywrite Text-->
                        <div class="copywrite-text mb-5">
                        <p class="text-muted mb-0 py-2">&copy2022| NZ Fashion&reg| AlrigthsRecived|</p>
                        </div>
                        <!-- Footer Social Area-->
                        <div class="footer_social_area">
                            <a href="https://www.facebook.com/" data-toggle="tooltip" data-placement="top" title="" data-original-title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="https://www.instagram.com/" data-toggle="tooltip" data-placement="top" title="" data-original-title="instagram"><i class="fa fa-instagram"></i></a>
                            <a href="https://mail.google.com/" data-toggle="tooltip" data-placement="top" title="" data-original-title="gmail"><i class="fa fa-envelope"></i></a>
                            <a href="https://twitter.com/?lang=en" data-toggle="tooltip" data-placement="top" title="" data-original-title="Twitter"><i class="fa fa-twitter"></i></a>
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
                  <li><a href="about_us.php">About Us</a></li>
                  <li><a href="customer_sign_up_1.php">sign up</a></li>
                  <li><a href="contact_us_1.php">contact us</a></li>
                </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Manufactures</h5>
                        <!-- Footer Menu-->
                <div class="footer_menu">
                    <ul>
                         <li><a href="casual_shirts.php">Casual Shirts</a></li>
                         <li><a href="denims.php">Denims</a></li>
                         <li><a href="accesories.php">Accesories</a></li>
                         <li><a href="about_us.php">Our Team</a></li>
                    </ul>
              </div>
            </div>
          </div>
          <!-- Single Widget-->
          <div class="col-12 col-sm-6 col-lg">
            <div class="single-footer-widget section_padding_0_130">
              <!-- Widget Title-->
              <h5 class="widget-title">Contact Us</h5>
              <!-- Footer Menu-->
              <div class="footer_menu">
                <ul>
                  <li><a href="https://mail.google.com/">Email Us: nzfashion@gmail.com</a></li>
                  <li><a href="contact_us_1.php">Term &amp; Conditions</a></li>
                  <li><a href="contact_us_1.php">Help Center</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
<!-- footer codes stop from here -->

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>   

  </body>
</html>
