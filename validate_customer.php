<?php
  session_start();

  // validating the user
  if($_SESSION['cus_id']==''){
    // redirect to invalid log in
    header("location:customer_log_in_1.php");
  }

 ?>
