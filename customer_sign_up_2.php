<?php

require("db_connection.php");
require("code_lib.inc.php");
  //get the values from the form (add_product_1.php) and display
    // echo "<pre>";
    // print_r($_REQUEST);
    // echo "</pre>";
if ('cus_id' == 'cus_id') {
     header("location:sign_up_error_3.php?status=fail");
   }
 
  //store the form field values to variables
$cus_name      = $_REQUEST ['cus_name'];
$cus_id        = $_REQUEST ['cus_id'];
$access_code   = $_REQUEST ['access_code'];
 
  //building a dynamic sql command
  $sql  = "insert into tblcustomer (cus_name,cus_id,access_code) values(";
  $sql .= "'$cus_name',";
  $sql .= "'$cus_id',";
  $sql .= "'$access_code')";

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
$x = $mysqli->query($sql);

if($x>0){

  if(($_FILES['picture']['error'] == 0) && ($_FILES['picture']['type']=="image/jpeg")) {
    echo "error not found";

  // //can  upload
   $last_id     = $mysqli->insert_id;
   $filename    = $_FILES['picture']['tmp_name'];
   $destination = $last_id . "_".rand().rand().rand().".jpg";
  //
   $y = move_uploaded_file($filename,"customer_profile_picture/large/".$destination);
  //
   if($y>0){
   //lets update the product table's picture column with the generated file name
    $sql2 = "update tblcustomer set picture='$destination' where cus_id=$last_id";
    //execute the sql command
    $z = $mysqli->query($sql2);

    //lets copy the image to thumb folder then resize it to a smaller size

    copy("customer_profile_picture/large/".$destination,"customer_profile_picture/thumbs/".$destination);

    // //lets resize it
  resizeThumbPicture("customer_profile_picture/thumbs/",$destination);
   }

  //echo "record added successfully";
  //redirect the user to the next page
  header("location:customer_sign_up_3.php?status=pass");
}
else{
  //echo "record adding failed";
  //redirec the user to the next page
  header("location:add_customer_3.php?status=fail");
}

}



 ?>
