<?php
// Store the form field values to variables
        $title        = $_REQUEST['title'];
        $brand        = $_REQUEST['brand'];
        $size_xs      = $_REQUEST['size_xs'];
        $size_s       = $_REQUEST['size_s'];
        $size_m       = $_REQUEST['size_m'];
        $size_l       = $_REQUEST['size_l'];
        $size_xl      = $_REQUEST['size_xl'];
        $size_xxl     = $_REQUEST['size_xxl'];
        $ctgy         = $_REQUEST['ctgy'];
        $new_arrivals = $_REQUEST['new_arrivals'];
        $sale         = $_REQUEST['sale'];
        $qty          = $_REQUEST['qty'];
        $desc         = $_REQUEST['desc'];
        $price        = $_REQUEST['price'];
        $sale_price   = $_REQUEST['sale_price'];

    // building dynamic SQL Commands
        $sql = "insert into product (title,brand,size_xs,size_s,size_m,size_l,size_xl,size_xxl,ctgy,new_arrivals,sale,qty,desc,price,sale_price) values(";
        $sql .= "'$title',";
        $sql .= "'$brand',";
        $sql .= "'$size_xs',";
        $sql .= "'$size_s',";
        $sql .= "'$size_m',";
        $sql .= "'$size_l',";
        $sql .= "'$size_xl',";
        $sql .= "'$size_xxl',";
        $sql .= "'$ctgy',";
        $sql .= "'$new_arrivals',";
        $sql .= "'$sale',";
        $sql .= "'$qty',";
        $sql .= "'$desc',";
        $sql .= "$price,";
        $sql .= "$sale_price)";


    // lets display the SQL Command
        // echo "$sql"

    // Execute SQL Commands
        $x = $mysqli->query($sql);

        if($x>0){
            // echo "record successfully added";
            header("location:addproduct3.php?status=pass");
        }
        else{
            // echo "Adding New Record Failed";
            header("location:addproduct3.php?status=failed");
        }
 
?>