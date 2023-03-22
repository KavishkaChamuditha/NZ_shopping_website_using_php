<?php

require ("db_connection.php");
//gets the value from checkoutpage1.php
//   echo "<pre>";
//   print_r ($_REQUEST);
//   echo "</pre>";
$pro_id          = $_REQUEST ['pro_id'];
$first_name      = $_REQUEST ['first_name'];
$last_name       = $_REQUEST ['last_name'];
$username        = $_REQUEST ['username'];
$email           = $_REQUEST ['email'];
$address         = $_REQUEST ['address'];
$another_address = $_REQUEST ['another_address'];
$country         = $_REQUEST ['country'];
$state           = $_REQUEST ['state'];
$zip             = $_REQUEST ['zip'];
$product_name    = $_REQUEST ['product_name'];
$price           = $_REQUEST ['price'];
$size            = $_REQUEST ['size'];


    $sql  = "insert into tblcheck_out (pro_id,first_name,last_name,username,email,address,another_address,country,state,zip,product_name,price,size) values(";
    $sql .= "'$pro_id',";
    $sql .= "'$first_name',";
    $sql .= "'$last_name',";
    $sql .= "'$username',";
    $sql .= "'$email',";
    $sql .= "'$address',";
    $sql .= "'$another_address',";
    $sql .= "'$country',";
    $sql .= "'$state',";
    $sql .= "'$zip',";
    $sql .= "'$product_name',";
    $sql .= "'$price',"; 
    $sql .= "'$size')";
    
    //lets excecute the sql command 
    $x = $mysqli->query($sql); 

    if($x>0)
    {
         header("location:checkout_page_3.php?status=pass");
    }else
    {
        // header("location:checkout_page_3.php?status=fail");
    }


?>