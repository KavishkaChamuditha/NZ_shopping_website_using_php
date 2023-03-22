<?php 

require("validate_customer.php");
require("db_connection.php");

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>Checkout Page</title>

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

<div class="container">
  <main>
    
    <?php

   //check the ID is comming to this page
    //  echo "<pre>";
    //  print_r($_REQUEST);
    //  echo "<pre>";

    $pro_id = $_REQUEST['product_id'];

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
 <div class="py-5 text-center">
    <img class="d-block mx-auto mb-4" src="images/nz.png" alt="" style="width: 200px;">
    <h2>Checkout form</h2>
    <p class="lead">Add your details in the below form</p>
  </div>
  
  <form action="checkout_page_2.php" method="post" enctype="multipart/form-data">
    <div class="col-md-8 col-lg-9 checkout">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate>
        <div class="row g-3">
          <div class="col-sm-6">
            <label for="first_name" class="form-label">First name</label>
            <input type="text" class="form-control label-style" name="first_name" id="first_name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid first name is required.
            </div>
          </div>

          <div class="col-sm-6">
            <label for="last_name" class="form-label">Last name</label>
            <input type="text" class="form-control label-style" name="last_name" id="last_name" placeholder="" value="" required>
            <div class="invalid-feedback">
              Valid last name is required.
            </div>
          </div>

          <div class="col-12">
            <label for="username" class="form-label">Username</label>
            <div class="input-group has-validation">
              <input type="text" class="form-control label-style" name="username" id="username" placeholder="Username" value="<?php echo $_SESSION['cus_name']; ?>"  required readonly>
            <div class="invalid-feedback">
                Your username is required.
              </div>
            </div>
          </div>

          <div class="col-12">
            <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
            <input type="email" class="form-control label-style" name="email" id="email" placeholder="you@example.com">
            <div class="invalid-feedback">
              Please enter a valid email address for shipping updates.
            </div>
          </div>

          <div class="col-12">
            <label for="address" class="form-label">Address</label>
            <input type="text" class="form-control label-style" name="address" id="address" placeholder="1234 Main St" required>
            <div class="invalid-feedback">
              Please enter your shipping address.
            </div>
          </div>

          <div class="col-12">
            <label for="another_address" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
            <input type="text" class="form-control label-style" name="another_address" id="another_address" placeholder="Apartment or suite">
          </div>

          <div class="col-md-5">
            <label for="country" class="form-label">Country</label>
            <select class="form-select label-style" name="country" id="country" required>
              <option value="">Choose...</option>
              <option>United States</option>
              <option>Sri Lanka</option>
              <option>India</option>
            </select>
            <div class="invalid-feedback">
              Please select a valid country.
            </div>
          </div>

          <div class="col-md-4">
            <label for="state" class="form-label">Province</label>
            <select class="form-select label-style"name="state" id="state" required>
              <option value="">Choose...</option>
              <option>California</option>
            </select>
            <div class="invalid-feedback">
              Please provide a valid state.
            </div>
          </div>

          <div class="col-md-3">
            <label for="zip" class="form-label">Zip</label>
            <input type="text" class="form-control label-style" name="zip" id="zip" placeholder="" required>
            <div class="invalid-feedback">
              Zip code required.
            </div>
          </div>
        </div>

        <div class="form-group mb-3">
          <label class="label" for="">Product Name</label>
          <input type="text" name="product_name" class="form-control label-style" value="<?php echo $row ['product_name']; ?>" readonly>
               
        </div>

        <div class="form-group mb-3">
          <label class="label" for="">Price</label>
          <input type="text" name="price" class="form-control label-style" value="<?php echo $row ['price']; ?>" readonly>
             
        </div>

        <div class="form-group mb-3">
          <label class="label" for="">Size</label>
          <input type="text" name="size" class="form-control label-style" style="width: 400px;"; 
          value="<?php echo $row ['size']; ?>" readonly>
                
        </div>

        <img class="card-img-top img-card" style="width:280px; height:400px; margin-left:auto; margin-right:auto;" src="product/large/<?php echo $row['picture'];?>" alt=""></a>

        <input type="hidden"  name="pro_id"  type="text" value="<?php echo $row ['pro_id']; ?>">

        <button class="w-100 btn user_btn btn-lg text-light" style="margin-top: 20px;" type="submit">Continue to checkout</button>

        <button class="w-100 btn btn-lg text-light bg-warning" style="margin-top: 20px;" type="clear">Clear the order</button>

      </form>
    </div>
  </div>
</main>



    <?php
      }else {
        echo"<script>alert('Product haven't found try again')</script>";
      }



?>



  </main>

  <footer class="my-5 pt-5 text-muted text-center text-small">
    <p class="mb-1">&copy; &copy2022| NZ Fashion&reg| AlrigthsRecived|</p>
  </footer>
</div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
