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
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Accesories</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>

 
    <!-- icon importing -->
    <script src="https://code.iconify.design/iconify-icon/1.0.1/iconify-icon.min.js"></script>

    <!-- boostrap files -->
    <link rel="stylesheet" href="css/bootstrap.css">  

    <!-- image pop up code -->
    <link rel="stylesheet" href="magnific-popup/magnific-popup.css">

    <!-- boostrap js files -->
    <script type="text/javascript" src="js/bootstrap.js">
    </script>
  </head>

    <body>

    
   
    <!-- Nav Bar start from here -->
    <?php
   require_once("header.php"); 
    ?>
    <!-- Nav Bar stop from here -->

    <div class="container">
     <div class="row">
        <?php 
    require_once("search_product_customer_side_function.php");
        ?>
          <?php
            
            $sql = "SELECT * FROM tblproduct WHERE catogary = 'Accesosires'";

            $rs = $mysqli->query($sql);

            while ($row = mysqli_fetch_array($rs)) {   
                productlist($row['price'], $row['product_name'], $row['picture'], $row['size'], $row['pro_id']
            );
            }?>
        
        </div>
    </div>

        




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
<!-- footer codes stop from here -->
        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>

  </body>
</html>
