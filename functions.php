  <?php
    session_start();
    //lets validate the user
    function check_login($mysqli){
    if(isset($_SESSION['user_id'])){
      //redirect the user to invalid login page
      $id = $_SESSION['user_id'];

      $query = "select * from login where user_id = '$id' limit 1";

      $result = mysqli_query($mysqli,$query);

      if ($result && mysqli_num_rows($result) > 0 ){
        $user_data = mysqli_fetch_assoc($result);
        return $user_data;
      }
      }
            header("location:log_in_1.php");
            die;
    }
 ?>
