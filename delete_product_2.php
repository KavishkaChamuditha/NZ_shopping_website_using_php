<?php
  require("validate_employee.php");
  // connecting the database
  require("db_connection.php");
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta charset="utf-8">
    <title></title>
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
              <img src="images/delete_products.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

<div class="row">
<div class="container">
  <?php
    //check the ID is comming to this page
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "<pre>";

    $pro_id = $_REQUEST['pro_id'];

    $sql = "select * from tblproduct where pro_id=$pro_id";

    // selecting the sql command
    $rs =  $mysqli->query($sql);

    // count numeber of records that found
    // $record_count = mysqli_num_rows($rs);
    // echo "number of records found: $record_count";

    if (mysqli_num_rows($rs) > 0) {
      // echo "Reocrds are found";

      // copy the records from resource

      $row = mysqli_fetch_assoc($rs);
      // check the record is comming
      // echo "<pre>";
      // print_r($row);
      // echo "<pre>";

      // showing the records
      ?>

<br>
   <h2>Delete a Product</h2>
<form class="product-margin" action="delete_product_3.php" method="post" enctype="multipart/form-data">
  
  <input type="hidden" name="pro_id" value="<?php echo $row ['pro_id']; ?>">
      <label for="name"class="text-dark" >Catogary</label>
        <select class="form-control"  name="catogary" id="catogary" <?php echo $row ['catogary']; ?>>
          <option>Casual Shirt</option>
          <option>Accesosires</option>
          <option>Denims</option>
        </select>

    <div class="form-group">
      <label for="name" class="text-dark"> Product name </label>
      <input type="text" class="form-control" name="product_name" id="product_name" placeholder="Add the Brand of the product" value="<?php echo $row ['product_name']; ?>">
    </div>

    <div class="form-group">
      <label for="name" class="text-dark"> Brand </label>
      <input type="text" class="form-control" name="brand" id="brand" placeholder="Add the Brand of the product"  value="<?php echo $row ['brand']; ?>">
    </div>

    <div class="form-group">
      <label for="name" class="text-dark"> size </label>
      <input type="text" class="form-control" name="size" id="size" placeholder="Add the Brand of the product" value="<?php echo $row ['size']; ?>">
    </div>

    <div class="form-group">
      <label for="name" class="text-dark">Price</label>
      <input type="number" class="form-control"  name="price" id="price" placeholder="Add the price of the product" value="<?php echo $row ['price']; ?>">
    </div>

    <div class="form-group">
      <label for="" class="text-dark">Picture</label>
      <img src="product/thumbs/<?php echo $row['picture'];?>" alt="" class="img col-lg-3 col-md-3"/>
    </div>

    <div class="form-group form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
      <label class="form-check-label text-dark" for="exampleCheck1" >Are you sure want to delete this record</label>
    </div>

    <input type="submit" class=" btn btn-danger"  name="submit" id="submit" value="Confirm Delete">
    <input type="reset"  class=" btn btn-warning" name="reset"  id="reset" value="Clear">

</form>
    <?php
      }else {
          // echo "records are not found";
         ?>
         <div class="alert alert-danger alert-dismissible fade show product-alert" role="alert">
           <h2>NO Records found</h2>
           <strong>Sorry</strong> No record found. Pleas try again.
           <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             <span aria-hidden="true">&times;</span>
           </button>
           <br />
           <a href="delete_product_1.php" class="btn btn-danger my-3">Try again</a>
         </div>
         <?php
      }
?>
      </div> <!-- end of container -->
      </div> <!-- end of row -->

      </div> <!-- end of content -->

        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
