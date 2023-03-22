<?php
// start the session
session_start();
require('db_connection.php');
//
// echo "<pre>";
// print_r ($_REQUEST);
// echo "</pre>";
//

// storing values to the variables
$user_id = $_REQUEST['user_id'];
$access_code = $_REQUEST['access_code'];

// sql command
$sql = "select * from login where user_id='$user_id'";

// excuting the sql command
$rs = $mysqli->query($sql);

if (mysqli_num_rows($rs)>0){
  // echo "value is found";

  // checking the password also matching
  $row = mysqli_fetch_assoc($rs);

  if ($row['access_code'] == crypt($access_code,$row['access_code'])){
    // echo "username and password both are matching";
    $_SESSION['user_id']    = $user_id;
    $_SESSION['user_name']  = $row['user_name'];
    $_SESSION['user_group'] = $row['user_group'];
    $_SESSION['picture']    = $row['picture'];
    //rederecting to the dashboard because username and password are matching
    header("location:dashboard.php");

  }else {
    // echo "password is not founds";
    header("location:invalied_log_in.php");
  }
}else {
  header("location:invalied_log_in.php");
  // echo "value is not found";
}












 ?>
