<?php
  // connecting the database
  require("db_connection.php");

  $pro_id = $_REQUEST['pro_id'];

  // lets build a dynamic sql command to delete the record permanatly

  $sql = "delete from tblproduct where pro_id=$pro_id";

  // excecute the sql command
  $x = $mysqli->query($sql);

  if ($x > 0) {

    if($old_picture_name != "default.jpg"){
      unlink("product/large/$old_picture_name");
      unlink("product/thumbs/$old_picture_name");
    }

    // echo "succefully delete";
    header("location:delete_product_4.php?status=pass");
  }else {
    // echo "succefully not delete";
    header("location:delete_product_4.php?status=fail");
  }











 ?>
