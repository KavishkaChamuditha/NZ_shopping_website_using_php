<?php
require("validate_employee.php");
require("db_connection.php");
 ?>
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
                    <a href="denims.php">Home</a>
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
                    <a href="accesories.php">Log Out</a>
                </li>

          </ul>

          <!-- <div class="mb-5">
            <h3 class="h6">Subscribe for newsletter</h3>
            <form action="#" class="colorlib-subscribe-form">
              <div class="form-group d-flex">
                <div class="icon"><span class="icon-paper-plane"></span></div>
                <input type="text" class="form-control" placeholder="Enter Email Address">
              </div>
            </form>
          </div> -->

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
              <img src="images/search_products_img.jpg" class="d-block w-100" alt="...">
            </div>
          </div>
        </div>

<div class="row">
<div class="container">

<form class="product-margin" action="search_products_2.php" method="post" enctype="multipart/form-data">
  <!--  -->
  <div class="form-row align-item-left">
     <div class="form-group col-lg-4 col-md-4">
      <label class="label mx-1 border-primary" for="name">Search By</label>
        <div class="input-group mx-1 mb-2 ">
          <div class="input-group-prepend">
          </div>

          <?php
          $searchBy = $_REQUEST ['searchBy'];
          $keywords = $_REQUEST ['keywords'];
          ?>

          <select class="form-control" name="searchBy" title="searchBy">
            <option value="pro_id"        <?php echo ($searchBy=='pro_id')?'selected==selected':''; ?>>Product ID</option>
            <option value="catogary"      <?php echo ($searchBy=='catogary')?'selected==selected':''; ?>>Catogary</option>
            <option value="product_name"  <?php echo ($searchBy=='product_name')?'selected==selected':''; ?>>Product name</option>
            <option value="brand"         <?php echo ($searchBy=='brand')?'selected==selected':''; ?>>Brand</option>
            <option value="size"          <?php echo ($searchBy=='size')?'selected==selected':''; ?>>Size</option>
            <option value="price"         <?php echo ($searchBy=='price')?'selected==selected':''; ?>>Price</option>
          </select>

      </div>
    </div><!-- end of form group size 6-->


    <div class="form-group col-lg-4 col-md-4">
     <label class="label mx-1" for="keywords">Keywords </label>
     <div class="input-group mx-1 mb-2 ">
       <input type="text"
       class="form-control"
       id="keywords"
       name="keywords"
      value="<?php echo $keywords; ?>">
   </div>

   </div><!-- end of form group size 6-->

   <div class="form-group col-lg-4 col-md-4">
     <label for="" class="mb-4"></label>
     <div class="input-group mx-1 mb-2 ">
      <input type="submit" class="btn btn-success col-6 " id="submit"
       name="submit" value="SEARCH" >
      <input type="reset" class="btn btn-danger col-6"  id="reset"
       name="reset" value="CANCLE">
     </div><!--.... -->
  </div>
  </div><!-- end of form group size 6-->
</form>

<table class="table table-striped">
  <thead class="thead">
    <tr>
      <th scope="col">product_id</th>
      <th scope="col">catogary</th>
      <th scope="col">product_name</th>
      <th scope="col">brand</th>
      <th scope="col">size</th>
      <th scope="col">price</th>
      <th scope="col">picture</th>
      <th scope="col">Action</th>
    </tr>

    </thead>

    <?php
    // RECIVING THE SEARCH BY KEY WORDS
    $searchBy = $_REQUEST ['searchBy'];
    $keywords = $_REQUEST ['keywords'];

     // echo $searchBy . "<br/>" .$keywords;

      $sql = "";

      switch($searchBy) {
        case 'pro_id':
          $sql = "select * from tblproduct where pro_id=$keywords";
          break;
        case 'catogary':
          $sql = "select * from tblproduct where catogary='$keywords' or catogary like '%$keywords%'";
          break;
        case 'product_name':
          $sql = "select * from tblproduct where product_name='$keywords' or product_name like '%$keywords%'";
          break;
        case 'brand':
          $sql = "select * from tblproduct where brand='$keywords' or brand like '%$keywords%'";
          break;
        case 'size':
          $sql = "select * from tblproduct where size='$keywords'";
          break;
        case 'price':
          $sql = "select * from tblproduct where price<=$keywords";
          break;
      }

       // echo "<pre>";
       // echo $sql;
       // echo "<pre/>";

// executing the sql command
$rs = $mysqli->query($sql);

  if(mysqli_num_rows($rs)>0){
      while ($row = mysqli_fetch_assoc($rs)) {
        ?>
        <tr>
          <td><?php echo $row['pro_id']; ?></td>
          <td><?php echo $row['catogary']; ?></td>
          <td><?php echo $row['product_name']; ?></td>
          <td><?php echo $row['brand']; ?></td>
          <td><?php echo $row['size']; ?></td>
          <td><?php echo $row['price']; ?></td>
          <td><img src="product/thumbs/<?php echo $row['picture'];?>" style="max-width:200px; max-height:200px;"alt=""></td>
          <td>
            <a class="btn btn-small btn-warning" href="edit_product_2.php?pro_id=<?php echo $row['pro_id']; ?>">Edit</a>
            <a class="btn btn-small btn-danger"  href="delete_product_2.php?pro_id=<?php echo $row['pro_id']; ?>">Delete</a>
          </td>
        </tr>
        <?php
      }
  }else {
    ?>
    <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">No Records Were Found</h4>
      <p class="font-weight-bold">No Records Were Found, Please Try Again.........</p>
      <hr>
    </div>
    <?php
  }
 ?>
 </table>
    </div> <!-- end of container -->
  </div> <!-- end of row -->
</div> <!-- end of content -->


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/main.js"></script>

  </body>
</html>
