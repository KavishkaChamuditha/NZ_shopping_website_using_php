    <?php
    // require("validate_employee.php");
    ?>
   <!doctype html>
    <html lang="en">
      <head>
          <title>Login 04</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="css/styles.css">

        
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css_login/style.css">
        </head>
    <body>

    <div class="row">
    <div class="container">
        <?php

        if($_REQUEST['status']=="pass"){
            // echo "<h2 class='text-success'>Record Successfully Added</h2>";
            ?>
              	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section font-weight-bold ">Welcome to NZ FASHION</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/customer_log_in.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4 font-weight-bold ">Thanks For Purchasing</h3>
			      		</div>
			      	</div>

			<form action="customer_log_in_2.php" class="signin-form">
			    <div class="form-group mb-3">
			    	<h4>Your Oder has been placed</h4>
		         <div class="form-group mb-3">
		            <p>Thank Your For Your Purchase, Now We're Preparing for The Shipment, If You Would Like To Cancle This Order Please Contact Us Via Mail Within 24 Hourses </p>
		    	 </div>

		        <div class="form-group">
		            	<button type="submit" class="form-control btn btn-danger btn-md rounded submit ">Back To Home</button>
                  <br>
                  <br>
                		<!-- <button type="reset" class="form-control btn btn-warning btn-md rounded submit ">cancle</button> -->
		    	</div>
	 		 </form>
		      
                <!-- follow us on icons codes start from here -->
               
                    <h5 class="text-center">Follow Us On</h5>
                    <div class="d-flex margin">
                       
                      <div class="col margin-contact">                       
                        <img class="icon-size-co d-flex" src="images/facebook.gif"/>                       
                      </div>

                      <div class="col margin-contact">                        
                        <img class="icon-size-co d-flex" src="images/twitterr.gif"/>                        
                      </div>

                      <div class="col margin-contact">                      
                        <img class="icon-size-co d-flex" src="images/instagram.gif"/>                    
                      </div>

                      <div class="col margin-contact">                       
                        <img class="icon-size-co d-flex" src="images/whatsapp.gif"/>   
                      </div>                
                    </div>
                
                      <!-- follow us on icon codes stop from here -->   

		      </div>
				</div>
			</div>
		</div>
	</section>
            <?php
        }
        else{
            // echo "<h2 class='text-danger'>Add new record failed.!</h2>";
            ?>
    	<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section font-weight-bold ">Welcome to NZ FASHION</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-md-12 col-lg-10">
					<div class="wrap d-md-flex">
						<div class="img" style="background-image: url(images/customer_log_in.jpg);">
			      </div>
						<div class="login-wrap p-4 p-md-5">
			      	<div class="d-flex">
			      		<div class="w-100">
			      			<h3 class="mb-4 font-weight-bold text-danger">Your Purchase is Not Successfull, Try Again</h3>
			      		</div>
			      	</div>

			<form action="customer_log_in_2.php" class="signin-form">
			    <div class="form-group mb-3">
			    	<h4>Your Oder has been placed</h4>
		         <div class="form-group mb-3">
		            <p>Thank Your For Your Purchase, Now We're Preparing for The Shipment, If You Would Like To Cancle This Order Please Contact Us Via Mail Within 24 Hourses </p>
		    	 </div>

		        <div class="form-group">
		            	<button type="submit" class="form-control btn btn-danger btn-md rounded submit ">Back To Home</button>
                  <br>
                  <br>
                		<!-- <button type="reset" class="form-control btn btn-warning btn-md rounded submit ">cancle</button> -->
		    	</div>
	 		 </form>
		      
                <!-- follow us on icons codes start from here -->
               
                    <h5 class="text-center">Follow Us On</h5>
                    <div class="d-flex margin">
                       
                      <div class="col margin-contact">                       
                        <img class="icon-size-co d-flex" src="images/facebook.gif"/>                       
                      </div>

                      <div class="col margin-contact">                        
                        <img class="icon-size-co d-flex" src="images/twitterr.gif"/>                        
                      </div>

                      <div class="col margin-contact">                      
                        <img class="icon-size-co d-flex" src="images/instagram.gif"/>                    
                      </div>

                      <div class="col margin-contact">                       
                        <img class="icon-size-co d-flex" src="images/whatsapp.gif"/>   
                      </div>                
                    </div>
                
                      <!-- follow us on icon codes stop from here -->   

		      </div>
				</div>
			</div>
		</div>
	</section>

	<script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>
            <?php
        }

        ?>

    </div>
    </div>


    </body>
    </html>
