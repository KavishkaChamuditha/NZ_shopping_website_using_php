<?php

  session_start();
  // validating the user
  if($_SESSION['user_id']==''){
    // redirect to invalid log in
    header("location:invalied_log_in.php");
  }

 ?>
