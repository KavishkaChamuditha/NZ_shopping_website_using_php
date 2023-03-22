<header id="search_product">


<div class="container">
    <div class="row">
    <form class="product-margin" action="search_product_customer_side.php" method="post" enctype="multipart/form-data">
   
    <label class="label border-primary" for="name" style="font-size:40px; font-family:'Dancing Script', cursive;">Shop By </label>
        <div class="input-group">
          <select class="form-control" name="searchBy" title="searchBy" placeholder="Enter what you want to search" style="max-width:400px; height:40px; box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;">
            <option value="catogary">Dress Type</option>
            <option value="product_name">Dress name</option>
            <option value="brand">Brand</option>
            <option value="size">Size</option>
            <option value="price">Price</option>
          </select>

   <label class="label" for="keywords"></label>
   <div class="form col-lg-4 col-md-4">
   <input type="text" class="form-control" id="keywords" name="keywords" placeholder="Enter what you want to search" style="max-width:400px; max-height:80px; margin-left:10px;">
   </div>
   
   <div class="form col-lg-4 col-md-4">
        <div class="input-group ">
        <input type="submit" class="btn btn-success col-6" id="submit"
        name="submit" value="SEARCH" >
        <input type="reset" class="btn btn-danger col-6"  id="reset"
        name="reset" value="CANCLE">
        </div>
    </div>
</form>
    </div> <!-- end of container -->
</div> <!-- end of row -->

</header>