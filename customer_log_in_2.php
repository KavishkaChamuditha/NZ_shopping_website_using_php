<?php

session_start();
require('db_connection.php');

//
// echo "<pre>";
// print_r ($_REQUEST);
// echo "</pre>";
//

// storing values to the variables
$cus_id = $_REQUEST['cus_id'];
$access_code = $_REQUEST['access_code'];

// sql command
$sql = "select * from tblcustomer where cus_id='$cus_id'";

// excuting the sql command
$rs = $mysqli->query($sql);

if (mysqli_num_rows($rs)>0){
  // echo "value is found";

  // checking the password also matching
  $row = mysqli_fetch_assoc($rs);

  if ($row['access_code'] == crypt($access_code,$row['access_code'])){
    // echo "username and password both are matching";
    $_SESSION['cus_id']      = $cus_id;
    $_SESSION['cus_name']    = $row['cus_name'];
    $_SESSION['access_code'] = $row['access_code'];
    $_SESSION['picture']     = $row['picture'];
    //rederecting to the dashboard because username and password are matching
    header("location:page.php");

  }else {
    // echo "password is not founds";
    header("location:invalied_log_in.php");
  }
}else {
  header("location:invalied_log_in.php");
  // echo "value is not found";
}

 ?>
