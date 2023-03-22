<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");

// get products from edit_product_2.php
//  echo "<pre>";
//   print_r($_REQUEST);
//   echo "</pre>";
$cus_id         = $_REQUEST['cus_id'];
$cus_name       = $_REQUEST['cus_name'];
$access_code    = $_REQUEST['access_code'];

// lets build a dynamic sql command
  $sql  = "update tblcustomer set ";
  $sql .= "cus_name='$cus_name',";
  $sql .= "access_code='$access_code' where cus_id='$cus_id'";

// execute the sql command
$x = $mysqli->query($sql);
   //file upload code starts here
   if($x > 0){
    //file upload code starts here

      if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){
        //we can proceed with the upload

        $old_picture_name = getCustomerPicture($cus_id);

        $filename = $_FILES['picture']['tmp_name'];
        $destination;

        if($old_picture_name=="default.jpg"){
            //generate  a new file name
            $destination = $cus_id . "_" . rand().rand().rand().".jpg";
        }
        else{
           $destination = $old_picture_name;
           $destination = $cus_id . "_" . rand().rand().rand().".jpg";
        }

        move_uploaded_file($filename,"customer_profile_picture/large/".$destination);
        copy("customer_profile_picture/large/".$destination,"customer_profile_picture/thumbs/".$destination);
        resizeThumbPicture("customer_profile_picture/thumbs/",$destination);

        //lets update the picture field in product table
        $sql2 = "update tblcustomer set picture='$destination' where cus_id='$cus_id'";
        $mysqli->query($sql2);

      }

    //file upload code ends here


     header("location:edit_product_4.php?status=pass");
  }
  else{
    // echo "saving changes failed";
     header("location:edit_product_4.php?status=fail");
  }
 ?>
