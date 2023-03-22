<?php
// connecting to database
  require("db_connection.php");
  require("code_lib.inc.php");
// get products from edit_product_2.php
// echo "<pre>";
// print_r($_REQUEST);
// echo "</pre>";

$pro_id       = $_REQUEST ['pro_id'];
$catogary     = $_REQUEST ['catogary'];
$brand        = $_REQUEST ['brand'];
$size         = $_REQUEST ['size'];
$price        = $_REQUEST ['price'];

// lets build a dynamic sql command
  $sql  = "update tblproduct set ";
  $sql .= "catogary='$catogary',";
  $sql .= "brand='$brand',";
  $sql .= "size='$size',";
  $sql .= "price=$price where pro_id=$pro_id";

// execute the sql command
$x = $mysqli->query($sql);

  //file upload code starts here
  if($x > 0){
    // echo "successfully updated";

    //file upload code starts here

      if($_FILES['picture']['error']==0 && $_FILES['picture']['type']=="image/jpeg"){
        //we can proceed with the upload

        $old_picture_name = getProductPicture($pro_id);

        $filename = $_FILES['picture']['tmp_name'];
        $destination;


        if($old_picture_name=="default.jpg"){
            //generate  a new file name
            $destination = $pro_id . "_" . rand().rand().rand().".jpg";
        }
        else{
           $destination = $old_picture_name;
           $destination = $pro_id . "_" . rand().rand().rand().".jpg";
        }

        move_uploaded_file($filename,"product/large/".$destination);
        copy("product/large/".$destination,"product/thumbs/".$destination);
        resizeThumbPicture("product/thumbs/",$destination);

        //lets update the picture field in product table

        $sql2 = "update tblproduct set picture='$destination' where pro_id=$pro_id";
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
