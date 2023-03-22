<?php
    session_start();
    unset($_SESSION['user_id']);
    header("location:employee_log_in_1.php");
?>