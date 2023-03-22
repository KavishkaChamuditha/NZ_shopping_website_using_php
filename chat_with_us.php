<?php
  // require("validate_user.php");
  //adding a new record to the table product in the db_ad4850 database

  //1st lets connect to the database server

require("db_connection.php");
  //get the values from the form (add_product_1.php) and display
  // echo "<pre>";
  // print_r($_REQUEST);
  // echo "</pre>";

// echo "<pre>"; 
// print_r($_FILES);
// echo "</pre>";

//   //store the form field values to variables
 $cus_name     = $_REQUEST ['cus_name'];
 $e_mail       = $_REQUEST ['e_mail'];
 $txt_message  = $_REQUEST ['txt_message'];
 //building a dynamic sql command

  $sql  = "insert into tblquickchat (cus_name,e_mail,txt_message) values(";
      $sql .= "'$cus_name',";
      $sql .= "'$e_mail',";
      $sql .= "'$txt_message')"; 

     //lets display the sql command
     //echo $sql;

//       //lets execute the sql command
      $x = $mysqli->query($sql);

    if($x>0){
        echo"<script>alert('Recived your message successfuly, We will contact you as soon as we can')</script>";
         echo"<script>window.location='page.php'</script>";
      }else{
        echo"<script>alert('Try again your message has not been deliverd......')</script>";
    
      }
 ?>
