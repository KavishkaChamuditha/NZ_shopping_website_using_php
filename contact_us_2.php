<?php
  // require("validate_user.php");
  //adding a new record to the table product in the db_ad4850 database

  //1st lets connect to the database server

require("db_connection.php");

  //get the values from the form (add_product_1.php) and display
  /*echo "<pre>";
  print_r($_REQUEST);
  echo "</pre>";*/

  //store the form field values to variables
$name         = $_REQUEST ['name'];
$mail_address = $_REQUEST ['mail_address'];
$tele_number  = $_REQUEST ['tele_number'];
$message      = $_REQUEST ['message'];
  //building a dynamic sql command

     $sql  = "insert into tblcontact_us (name,mail_address,tele_number,message) values(";
     $sql .= "'$name',";
     $sql .= "'$mail_address',";
     $sql .= "'$tele_number',";
     $sql .= "'$message')"; 

    //lets display the sql command
    //echo $sql;

    //lets execute the sql command
    $x = $mysqli->query($sql);

  if($x>0){
    header("location:contact_us_3.php?status=pass");
  }else{
    header("location:contact_us_3.php?status=fail");

  }

 ?>
