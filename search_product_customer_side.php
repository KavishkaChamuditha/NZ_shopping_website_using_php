<?php 
require("validate_customer.php");
require("db_connection.php");
require("page_add_product.php");
require("create_db.php");

$database = new CreateDb("nzfashions", "tblproduct");
?>
<html lang="en">
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title></title>
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
<?php
   require_once("header.php"); 
 ?>
<body>
  
<div class="container">
<div class="row">

<form class="product-margin" action="" method="post" enctype="multipart/form-data">
          <?php
          $searchBy = $_REQUEST ['searchBy'];
          $keywords = $_REQUEST ['keywords'];
          ?>
   <div class="input-group type="hidden">
        <select class="form-control">
            <option value="pro_id"        <?php echo ($searchBy=='pro_id')?'selected==selected':''; ?>>Product ID</option>
            <option value="catogary"      <?php echo ($searchBy=='catogary')?'selected==selected':''; ?>>Catogary</option>
            <option value="product_name"  <?php echo ($searchBy=='product_name')?'selected==selected':''; ?>>Product name</option>
            <option value="brand"         <?php echo ($searchBy=='brand')?'selected==selected':''; ?>>Brand</option>
            <option value="size"          <?php echo ($searchBy=='size')?'selected==selected':''; ?>>Size</option>
            <option value="price"         <?php echo ($searchBy=='price')?'selected==selected':''; ?>>Price</option>
          </select>

   <label class="label" for="keywords"></label>
   <div class="form col-lg-4 col-md-4">
   <input type="text" class="form-control" id="keywords" name="keywords" style=" margin-top:10px;" <?php echo $keywords; ?> placeholder="Enter what you want to search" style="max-width:400px; max-height:80px; margin-left:10px;">
   </div>
   
   <div class="form col-lg-4 col-md-4" style=" margin-top:10px;">
        <div class="input-group ">
        <input type="submit" class="btn btn-success col-6" id="submit"
        name="submit" value="SEARCH" >
        <input type="reset" class="btn btn-danger col-6"  id="reset"
        name="reset" value="CANCLE">

        </div>
    </div>
</form>

  </div>
</div><!-- end of form group size 6-->

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

$rs = $mysqli->query($sql);

?>
<div class="container">
    <div class="row "> 
<?php
  if(mysqli_num_rows($rs)>0){
      while ($row = mysqli_fetch_assoc($rs)) {
        productlist($row['price'], $row['product_name'], $row['picture'], $row['size'], $row['pro_id']);
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
 
    </div> <!-- end of container -->
  </div> <!-- end of row -->
</div> <!-- end of content -->


<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>