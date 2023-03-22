<?php
require("validate_customer.php");
require("db_connection.php");
require("page_add_product.php");
require("create_db.php");

$database = new CreateDb("nzfashions", "tblproduct");

 if (isset($_POST['add_this']))
 {
    //print_r($_POST['product_id']);
     if(isset($_SESSION['wishlist']))
     {
      $item_array_id = array_column($_SESSION['wishlist'],'product_id'); 
    
      //inserting values to databse 
      $cus_id = $_SESSION ["cus_id"];
      $product_id = $_REQUEST ['product_id'];

       $sql  = "INSERT INTO tblwishlist (product_id,cus_id) VALUES (";
       $sql .= "'$product_id',";
       $sql .= "'$cus_id')";

       $x = $mysqli->query($sql);
       if($x>0)
       {
        //echo "successfuly add";
       }else
       {
        //echo "not add";
       }
       

      //if the product is in the cart this message will pop up
      if(in_array($_POST['product_id'],$item_array_id))
      {
        echo"<script>alert('Product is already in the wishlist')</script>";
        echo"<script>window.location='page.php'</script>";
      }else
      {
        //if the product is not in the card this code add that product to session variable 
        $count = count($_SESSION['wishlist']);
        $item_array = array
        (
            'product_id'=>$_POST['product_id']
        );
        $_SESSION['wishlist'][$count] = $item_array;
       
      }

     }else
     {
         $item_array = array
        (
            'product_id'=>$_POST['product_id']
        );

        //creating a new session variable
         $_SESSION['wishlist'][0]=$item_array;
        //  print_r($_SESSION['cart']);
     }
 }

//add to cart code start from here 

if (isset($_POST['add_cart']))
{
   print_r($_POST['product_id']);
    if(isset($_SESSION['cart']))
    {
     $item = array_column($_SESSION['cart'],'product_id'); 
   
     //inserting values to databse 
    //  $cus_id = $_SESSION ["cus_id"];
    //  $productcart_id = $_REQUEST ['productcart_id'];

    //   $sql  = "INSERT INTO tblcart (productcart_id,cus_id) VALUES (";
    //   $sql .= "'$productcart_id',";
    //   $sql .= "'$cus_id')";

    //   $x = $mysqli->query($sql);
    //   if($x>0)
    //   {
    //    //echo "successfuly add";
    //   }else
    //   {
    //    //echo "not add";
    //   }
      

     //if the product is in the cart this message will pop up
     if(in_array($_POST['product_id'],$item))
     {
       echo"<script>alert('Product is already in the cart')</script>";
       echo"<script>window.location='page.php'</script>";
     }else
     {
       //if the product is not in the card this code add that product to session variable 
       $count = count($_SESSION['cart']);
       $item_array = array
       (
           'product_id'=>$_POST['product_id']
       );
       $_SESSION['cart'][$count] = $item_array;
       
     }

    }else
    {
        $item_array = array
       (
           'product_id'=>$_POST['product_id']
       );

       //creating a new session variable
        $_SESSION['cart'][0]=$item_array;
       //  print_r($_SESSION['cart']);
    }
}

?>

<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>NZ Fashion and clothing</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    
    <!-- icon importing -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

    <!-- boostrap files -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <!-- boostrap js -->
    <script type="text/javascript" src="js/bootstrap.js">
    </script>

</head>

<body>

<?php
   require_once("header.php"); 
 ?>

<!-- banner code start from here -->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/banner_image_2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner_image_ 1.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p> -->
                </div>
            </div>
            <div class="carousel-item">
                <img src="images/banner_image_3.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <!-- <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p> -->
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<!-- banner code finish from here -->


<?php 
    require_once("search_product_customer_side_function.php");
?>

<!-- cards codes start from here -->
<div class="container">
    <div class="row"> 
    <p class="text-align-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">New Arrivals</p>
        <?php 
    $sql = "SELECT * FROM tblproduct WHERE catogary='new_arrivales'";
    $rs = $mysqli->query($sql);
    while ($row = mysqli_fetch_array($rs)) {   
        productlist($row['price'], $row['product_name'], $row['picture'], $row['size'], $row['pro_id']
        );

      }
        ?>
        </div>
    </div>
 </div>
<!-- cards codes stop from here --> 
        
    <section class="ftco-section bg-light" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div class="container-fluid ">
            <div class="row no-gutters justify-content-center pb-5 mb-3">
                <div class="col-md-7 heading-section text-center ftco-animate">
                    <h2 data-aos="fade-up">Fashions</h2> 
                </div>
            </div>
            <div class="row no-gutters">
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img" style="background-image: url(images/image.jpg);"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">Denim</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Colors</span> Black</li>
                                    <li><span>Size:</span> 45 m</li>

                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">Buy Now <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="" class="img" style="background-image: url(images/www.reallygreatsite.com.jpg);"></a>
                        <div class="half left-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">T-Shirt</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Colors</span> Black</li>
                                    <li><span>Size:</span> 45 m</li>

                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">Buy Now <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(images/imag.jpg);"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">T-Shirt</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Colors</span> Black</li>
                                    <li><span>Size:</span> 45 m</li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">Buy Now<span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="room-wrap d-md-flex">
                        <a href="#" class="img order-md-last" style="background-image: url(images/color-nt.jpg);"></a>
                        <div class="half right-arrow d-flex align-items-center">
                            <div class="text p-4 p-xl-5 text-center">
                                <p class="star mb-0"><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span><span class="fa fa-star"></span></p>
                                <!-- <p class="mb-0"><span class="price mr-1">$120.00</span> <span class="per">per night</span></p> -->
                                <h3 class="mb-3"><a href="rooms.html">T-Shirt</a></h3>
                                <ul class="list-accomodation">
                                    <li><span>Colors</span> Black</li>
                                    <li><span>Size:</span> 45 m</li>
                                </ul>
                                <p class="pt-1"><a href="room-single.html" class="btn-custom px-3 py-2">Buy Now <span class="icon-long-arrow-right"></span></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                <div class=" card-banner-float" style="width: 40rem;">
                    <p>
                        <a href="https://www.google.com/"><img class="card-img-top img-card" src="images/image si.jpg" alt="Card image cap"> </a>
                    </p>
                </div>
            </div>
            <!-- cards row finish from here -->

            <div class="col-lg-6 col-md-7" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                <div class=" card-banner-float" style="width: 40rem;">
                    <p>
                        <a href="https://www.google.com/"> <img class="card-img-top img-card" src="images/dre.jpg" alt="Card image cap"></a>
                    </p>


                </div>
                <!-- cards row finish from here -->
            </div>
        </div>
        <!-- end of row -->
    </div>
    <!-- end of container -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/accesories_banner_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/accesories_banner_2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/accesories_banner_3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="container">
        <div class="row">
            <p class="text-align-center" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">Accesories</p>
        </div>
    </div>

    <!-- cards codes start from here -->
    <div class="container">
        <div class="row">
                     
        <?php 

            $sql = "SELECT * FROM tblproduct WHERE catogary = 'index_page_Accesosires'";

            $rs = $mysqli->query($sql);

            while ($row = mysqli_fetch_array($rs)) {   
                productlist($row['price'], $row['product_name'], $row['picture'], $row['size'], $row['pro_id']
                );
             }

            ?>
           <a href="denims.php" class="btn text-light button-under-banner" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">View More</a>


        </div>
        <!-- end of the container -->
    </div>
    <!-- end of the row -->

    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/jeans_banner_1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/jeans_banner_2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/Jeans_banner_3.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- cards codes start from here -->
    <div class="container">
        <div class="row">
             
        <?php 

            $sql = "SELECT * FROM tblproduct WHERE catogary = 'index_page_Denims'";

            $rs = $mysqli->query($sql);

            while ($row = mysqli_fetch_array($rs)) {   
             productlist($row['price'], $row['product_name'], $row['picture'], $row['size'], $row['pro_id']
                );
            }

            ?>
            <a href="denims.php" class="btn text-light button-under-banner" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">View More</a>

            </div>
        <!-- end of container -->
    </div>
    <!-- end of row -->

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-7" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                <div class="card-banner-float margin" style="width: 40rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Vision</h5>
                        <p class="card-text">We strive to be a global leader in fashion-knit and fashion outerwear by empowering innovation and design to provide total customer satisfaction.We strive to be a caring and well-managed organization for our business partners ,customers
                            and employees, and a responsible corporate citizen to our society</p>
                    </div>
                </div>
            </div>
            <!-- cards row finish from here -->

            <div class="col-lg-6 col-md-7" data-aos="fade-up" data-aos-offset="200" data-aos-delay="50" data-aos-duration="1000">
                <div class=" card-banner-float" style="width: 40rem;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Mission</h5>
                        <p class="card-text">To innovate, to lead, to enhance, to provide best-value products and services to global customers.To make a difference through our branding to stay ahead of fashion trends, market changes and the latest technology.To enhance the
                            quality of life for our business partners,customers and employees.</p>
                    </div>
                </div>
                <!-- cards row finish from here -->
            </div>
        </div>
        <!-- end of container -->
    </div>
    <!-- end of row -->

<!-- contact message code start from here -->
<form action="chat_with_us.php">
    <input type="checkbox" id="check"> 
    <label class="chat-btn" for="check"> 
        <i class="fa fa-commenting-o comment"></i> 
        <i class="fa fa-close close"></i> 
    </label> <div class="this-chat"> 
        <div class="header"> <h6>Let's Chat - Online</h6> </div> 
        <div class="text-center p-2"> 
            <span>Please fill out the form to start chat!</span> 
        </div> 
        <div class="chat-form">
            <input type="text" class="form-control" placeholder="Name"  name="cus_name" id="cus_name"> 
            <input type="text" class="form-control" placeholder="Email" name="e_mail"   id="e_mail" > 
            <textarea class="form-control" placeholder="Your Text Message" name="txt_message" id="txt_message"></textarea>
            <button class="btn btn-chat text-light">Submit</button> 
            </div> 
        </div>
</form>
<!-- contact message code stop from here -->

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

<!-- popup javascript code start from here -->
<script src="magnific-popup/jquery.magnific-popup.min.js"></script>
    <script>
       $(document).ready(function() 
       {
        $('.view').magnificPopup({
            type:'image',
            delegate:'a',
            gallery:{
                enabled :false
            }           
        });
        });

    </script>
<!-- popup javascript code stop from here -->

</body>

</html>