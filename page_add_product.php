<?php
    function productlist($price,$product_name,$picture,$size,$productid)
    {
        $element ="
        <div class=\"col-lg-3 col-md-6\" data-aos=\"fade-up\" data-aos-offset=\"200\" data-aos-delay=\"50\" data-aos-duration=\"1000\">  
        <div class=\"card card-border card-res card-border cards-float card-hov card-height\" style=\"width: 18rem;\">
        <form method=\"post\" enctype=\"multipart/form-data\" >
        <div class=\"inner\">
        <div class=\"view\">
          <a class=\"text-decoration-none\" href=\"product/large/$picture?>\">         
          <img class=\"card-img-top img-card \" src=\"product/large/$picture?></a>\" 
        </div>
     </div>

            <div id=\"mySidenav\" class=\"sidenav\">    

            <button type=\"submit\" name=\"add_this\" id=\"about\"><i class=\"fa fa-heart-o align-baseline\"style=\"font-size:20px;\"></i> </button> 
            <input type=\"hidden\" name=\"product_id\" value='$productid'>
                  
            <button type=\"submit\" name=\"add_cart\" id=\"blog\"><i class=\"fa fa-shopping-cart\" style=\"font-size:20px\"></i> </button> 
            <input type=\"hidden\" name=\"product_id\" value='$productid'>

            </div>

            <div class=\"card-body\">
                <p class=\"card-text text-secondary\">$product_name  |$size|</p>
                <p class=\"card-text text-secondary\"></p>
                <h5>
                    <small><s class=\"text-secondary\"></s></small>
                    <span class=\"price\" style=\"text-decoration:none;\">RS.$price.00</span>
                </h5>
             
               <button type=\"submit\" name=\"checkout\" class=\"btn btn-light text-light card-btn\"  formaction=\"checkout_page_1.php\"> Add Now 
                </button> </a>
                <input type=\"hidden\" name=\"product_id\" value='$productid'>
                   
                </div>
            </div>
        </div>
     </div>
</form>
       ";
       echo $element;

    }
   
   
    function wishlistelement($price,$product_name,$picture,$size)
    {
        $element ="
        <div class=\"col-lg-3 col-md-6\" data-aos=\"fade-up\" data-aos-offset=\"200\" data-aos-delay=\"50\" data-aos-duration=\"1000\">  
        <div class=\"card card-border card-border cards-float card-hov card-height\" style=\"width: 18rem;\">
        <form method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"inner\">
        <div class=\"view\">
                <a class=\"text-decoration-none\" href=\"product/large/$picture?>\">         
                <img class=\"card-img-top img-card \" src=\"product/large/$picture?></a>\" 
        </div>
     </div>

         <div id=\"mySidenav\" class=\"sidenav\">  

         <button type=\"button\" class=\"btn bg-light border rounded-circle\" id=\"about\" style=\"color:red;\"><i class=\"fa fa-plus\" style=\"font-size:24px; color:black;\"></i></button>
      
        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
        <button type=\"button\" class=\"btn bg-light border rounded-circle\" id=\"blog\"><i class=\"fa fa-minus\" style=\"font-size:24px; color:black;\"></i></button>

        </div>      
        <div class=\"card-body\">
        <p class=\"card-text text-secondary\">$product_name  |$size|</p>
        <p class=\"card-text text-secondary\"></p>
        <h5>
            <small><s class=\"text-secondary\"></s></small>
            <span class=\"price\" style=\"text-decoration:none;\">$$price</span>
        </h5>
        <a href=\"checkout_page_1.php\" class=\"btn btn-light text-light card-btn\">Buy Now</a>
        </div>
    </div>
</div>
</div>
</form>
       ";
       echo $element;

    }
   

    function cartelement($price,$product_name,$picture,$size)
    {
        $element ="
        <div class=\"col-lg-3 col-md-6\" data-aos-offset=\"200\" data-aos-delay=\"50\" data-aos-duration=\"1000\">  
        <div class=\"card card-border card-border cards-float card-hov card-height\" style=\"width: 18rem;\">
        <form method=\"post\" enctype=\"multipart/form-data\">
        <div class=\"inner\">
        <div class=\"view\">
                <a class=\"text-decoration-none\" href=\"product/large/$picture?>\">         
                <img class=\"card-img-top img-card \" src=\"product/large/$picture?></a>\" 
        </div>
     </div>

         <div id=\"mySidenav\" class=\"sidenav\">  

         <button type=\"button\" class=\"btn bg-light border rounded-circle\" id=\"about\" style=\"color:red;\"><i class=\"fa fa-plus\" style=\"font-size:24px; color:black;\"></i></button>
      
        <input type=\"text\" value=\"1\" class=\"form-control w-25 d-inline\">
        <button type=\"button\" class=\"btn bg-light border rounded-circle\" id=\"blog\"><i class=\"fa fa-minus\" style=\"font-size:24px; color:black;\"></i></button>

        </div>      

        <div class=\"card-body\">
        <p class=\"card-text text-secondary\">$product_name  |$size|</p>
        <p class=\"card-text text-secondary\"></p>
        <h5>
            <small><s class=\"text-secondary\"></s></small>
            <span class=\"price\" style=\"text-decoration:none;\">$$price</span>
        </h5>
        <a href=\"checkout_page_1.php\" class=\"btn btn-light text-light card-btn\">Buy Now</a>
        </div>
    </div>
</div>
</div>
</form>
       ";
       echo $element;

    }
?>

