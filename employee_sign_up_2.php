<?php
require("db_connection.php");
require("code_lib.inc.php");
  //get the values from the form (add_product_1.php) and display
   // echo "<pre>";
   // print_r($_REQUEST);
   // echo "</pre>";
if ('user_id' == 'user_id') {
     header("location:sign_up_error_3.php?status=fail");
   }

  //store the form field values to variables
$user_name     = $_REQUEST ['user_name'];
$user_group    = $_REQUEST ['user_group'];
$user_id       = $_REQUEST ['user_id'];
$access_code   = $_REQUEST ['access_code'];


  //building a dynamic sql command
  $sql  = "insert into login (user_name,user_group,user_id,access_code) values(";
  $sql .= "'$user_name',";
  $sql .= "'$user_group',";
  $sql .= "'$user_id',";
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
  
   $y = move_uploaded_file($filename,"employee_profile_picture/large/".$destination);
  
   if($y>0){
   //lets update the product table's picture column with the generated file name
    $sql2 = "update login set picture='$destination' where user_id=$last_id";
    //execute the sql command
    $z = $mysqli->query($sql2);

    //lets copy the image to thumb folder then resize it to a smaller size

    copy("employee_profile_picture/large/".$destination,"employee_profile_picture/thumbs/".$destination);

    // //lets resize it
  resizeThumbPicture("employee_profile_picture/thumbs/",$destination);
   }

  //echo "record added successfully";
  //redirect the user to the next page
  header("location:customer_sign_up_3.php?status=pass");
}
else{
  //echo "record adding failed";
  //redirec the user to the next page
  header("location:customer_sign_up_3.php?status=fail");
}

}





 ?>
