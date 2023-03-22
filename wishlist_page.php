<?php
  
  require("validate_customer.php");
  require("db_connection.php");
  require("page_add_product.php");
  require("create_db.php");
  
  $database = new CreateDb("nzfashions", "tblproduct");
  
  
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
    
    <!-- Magnific Popup core CSS file -->
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js">
    </script>

</head>
<body>

    <?php 
        require_once("header.php");
    ?>

    <h2 class="text-center">My wish list</h2>

<div class="container">
    <div class="row">

        <?php
  
       if (isset($_SESSION['wishlist'])){
                 $product_id = array_column($_SESSION['wishlist'], 'product_id');

                $cus_id = $_SESSION["cus_id"];

            $result = $database-> getData();

            while ($row = mysqli_fetch_assoc($result)){
              foreach ($product_id as $pro_id)
              {
                if ($row['pro_id'] == $pro_id &&  $_SESSION['cus_id'] == $cus_id)
                {
                    wishlistelement($row['price'], $row['product_name'], $row['picture'], $row['size']);

                }
              }  
            }

          }
         
        ?>
    
</div>
</div>

          
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
