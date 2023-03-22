<?php
require("validate_employee.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <title>Edit Product</title>
    <link rel="stylesheet" href="css/styles.css">

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/dashboard_style.css">

    <script type="text/javascript" src="js/bootstrap.js">
    </script>

  </head>
  <body>
  <div class="wrapper d-flex align-items-stretch">
      <nav id="sidebar">
        <div class="custom-menu">
          <button type="button" id="sidebarCollapse" class="btn btn-danger">
            <i class="fa fa-bars"></i>
            <span class="sr-only">Toggle Menu</span>
          </button>
        </div>
        <ul>
          <!-- <i class="fa fa-user"></i> -->
    <img src="images/icon.png" style="max-width:150px;" alt="" >
    <a class="nav-link " id="navbarDropdown" data-bs-toggle="dropdown" data-bs-display="static" aria-expanded="false"> <img class="user_image_icon" src="employee_profile_picture/thumbs/<?php echo $_SESSION['picture'];?>" alt="" style="width:40px; height:40px; margin-bottom:0px; margin-left:30px;"></a>
      <p class="text-light font-weight-bold text-left username">Your Role:   <?php echo $_SESSION['user_name']; ?><p >
      <p class="text-light font-weight-bold text-left username">Your Name:   <?php echo $_SESSION['user_group']; ?><p >
    </ul>

        <div class="p-4 pt-5">
          <h2 ><a href="dashboard.php" class="logo text-light">NZ Fsshion  <hr></h2>   </a>

          <ul class="list-unstyled components mb-5">
              <div class="input-group mx-1 mb-2 ">
                <li>
                    <a href="dashboard.php">Menu</a>
                </li>
              </div>

                <li>
                    <a href="page.php">Home</a>
                </li>
                
                <li>
                    <a href="casual_shirts.php">casual shirts</a>
                </li>
 
                <li>
                    <a href="denims.php">Denims</a>
                </li>

                <li>
                    <a href="accesories.php">Accesosires</a>
                </li>

                <li>
                    <a href="employee_logout.php">Log Out</a>
                </li>


          </ul>

          <div class="footer">
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | NZ Fashion <i class="icon-heart" aria-hidden="true"></i> <a href="" target="_blank"></a>
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>

        </div>
      </nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="images/update_img.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

<div class="row">
<div class="container">

<form class="product-margin" action="edit_product_2.php" method="post" enctype="multipart/form-data">
<h2>Edit products</h2>
    <div class="form-group">
      <label for="name" class="text-dark">Enter the record you want to Edits</label>
      <input type="number" class="form-control"  name="pro_id" id="pro_id" placeholder="Enter the record you want to search" required>
    </div>

    <input type="submit" class=" btn btn-success"  name="submit" id="submit" value="Search">
    <input type="reset"  class=" btn btn-danger" name="reset"  id="reset" value="Cancle">

</form>
      </div> <!-- end of container -->
      </div> <!-- end of row -->

      </div> <!-- end of content -->

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
