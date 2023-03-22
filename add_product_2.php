<?php
  // require("validate_user.php");
  //adding a new record to the table product in the db_ad4850 database

  //1st lets connect to the database server

require("db_connection.php");
require("code_lib.inc.php");

  //get the values from the form (add_product_1.php) and display
  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

// echo "<pre>";
//   print_r($_FILES);
// echo "</pre>";
  //store the form field values to variables
$catogary     = $_REQUEST ['catogary'];
$product_name = $_REQUEST ['product_name'];
$brand        = $_REQUEST ['brand'];
$size         = $_REQUEST ['size'];
$price        = $_REQUEST ['price'];
  //building a dynamic sql comman
  
     $sql  = "insert into tblproduct (catogary,product_name,brand,size,price) values(";
     $sql .= "'$catogary',";
     $sql .= "'$product_name',";
     $sql .= "'$brand',";
     $sql .= "'$size',";
     $sql .= "$price)";
    
    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

    if($x>0){
      //echo "record successfully added";
      //upload code start here
        if(($_FILES['picture']['error'] == 0) && ($_FILES['picture']['type']=="image/jpeg")) {
            echo "error not found";

          // //can  upload
           $last_id     = $mysqli->insert_id;
           $filename    = $_FILES['picture']['tmp_name'];
           $destination = $last_id . "_".rand().rand().rand().".jpg";
          //
           $y = move_uploaded_file($filename,"product/large/".$destination);
          //
           if($y>0){
           //lets update the product table's picture column with the generated file name
            $sql2 = "update tblproduct set picture='$destination' where pro_id=$last_id";
            //execute the sql command
            $z = $mysqli->query($sql2);
            //lets copy the image to thumb folder then resize it to a smaller size

            copy("product/large/".$destination,"product/thumbs/".$destination);

            // //lets resize it
          resizeThumbPicture("product/thumbs/",$destination);

            }

      //upload code ends here
       header("location:add_product_3.php?status=pass");
     }
   else{
       //echo "adding new record failed";
   header("location:add_product_3.php?status=fail");

}
  }

 ?>