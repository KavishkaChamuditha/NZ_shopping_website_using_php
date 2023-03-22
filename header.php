<header id = "header">
   <!-- nav bar start from here -->
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
                      <a class="nav-link" href="accesories.php" >Accesories</a>
                  </li>
                  
                  <li class="nav-item">
                      <a class="nav-link" href="contact_us_1.php">Contact Us</a>
                  </li>

                  <li class="nav-item">
                      <a class="nav-link" href="about_us.php">About Us</a>
                  </li>
              </ul>

         <!-- user accout code start from here -->   
<a href="cart_page.php" type="submit" name="submit" id="submit" value="ADD NOW"> <i class="fa fa-shopping-cart" style="font-size:28px;color:white; margin-right:10px;"> </i> </a>
        <?php
           
           if(isset($_SESSION['cart']))
           {                
               $count = count($_SESSION['cart']);
               echo" <span id=\"wishlist_count\" class=\"text-warning bg-light\" style=\"font-size:28px; padding: 0 0.9rem 0.1rem 0.9rem; margin-right:10px; border-radius:3rem;\">$count</span>";
           }else
           {
               echo" <span id=\"cart_count\" class=\"text-warning bg-light\" style=\"font-size:28px; padding: 0 0.9rem 0.1rem 0.9rem; margin-right:10px; border-radius:3rem;\">0</span>";
           }

       ?>

<a href="wishlist_page.php" type="submit" name="submit" id="submit" value="ADD NOW">   <i class="fa fa-heart-o" style="font-size:28px; color:white; margin-right:10px;"> </i> </a>
        <?php
           
            if(isset($_SESSION['wishlist']))
            {                
                $count = count($_SESSION['wishlist']);
                echo" <span id=\"wishlist_count\" class=\"text-warning bg-light\" style=\"font-size:28px; padding: 0 0.9rem 0.1rem 0.9rem; margin-right:10px; border-radius:3rem;\">$count</span>";
            }else
            {
                echo" <span id=\"cart_count\" class=\"text-warning bg-light\" style=\"font-size:28px; padding: 0 0.9rem 0.1rem 0.9rem; margin-right:10px; border-radius:3rem;\">0</span>";
            }

        ?>


        <form class="d-flex" method="post" enctype="multipart/form-data bg-light"> 
            <div class="dropdown">
                    <a class="nav-link " id="navbarDropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"> 
                        <img class="user_image_icon " src="customer_profile_picture/thumbs/<?php echo $_SESSION['picture'];?>" alt="" style="width:40px; height:40px; margin-left:100px; margin-top: 20px !important; ">
                    </a>
                     <ul class="dropdown-menu dropdown-menu-end dropdown-menu-lg-start">
                     <p class="text-light font-weight-bold text-left username" style="margin-left: 10px;">Welcome <?php echo $_SESSION['cus_name']; ?><p>
                        <a class="dropdown-item text-light" href="user_account.php">
                            <iconify-icon icon="mdi:user-circle" class="" style="width:20px; margin-bottom:-3px;"></iconify-icon>Your Account </a>
                        <a class="dropdown-item text-light" href="customer_log_in_1.php">  <iconify-icon icon="ic:baseline-log-out"  style="margin-bottom:-3px;"></iconify-icon>Log Out</a>
                        <!-- <div class="dropdown-divider"></div> -->
                    </ul>
                </div>
             </form>
        <!-- user accout code stop from here -->          
      </div>
  </nav>
  <!-- Nav Bar code stop from here -->
