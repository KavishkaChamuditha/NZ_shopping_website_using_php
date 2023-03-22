<?php


class CreateDb
{
        public $server;
        public $username;
        public $password;
        public $db_name;
        public $tablename;
        public $con;


        // class constructor
    public function __construct(
        $db_name= "nzfashions",
        $tablename = "tblproduct",
        $server = "localhost",
        $username = "root",
        $password = ""
    )
    {

    
      // create connection
      $this->con = mysqli_connect($server, $username, $password);

      // Check connection
      if (!$this->con){
          die("Connection failed : " . mysqli_connect_error());
      }

      // query
      $sql = "CREATE DATABASE IF NOT EXISTS $db_name";

      // execute query
      if(mysqli_query($this->con, $sql)){

          $this->con = mysqli_connect($server, $username, $password, $db_name);

          // sql to create new table
          $sql = " CREATE TABLE IF NOT EXISTS $tablename
                          (pro_id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
                           pro_name VARCHAR (25) NOT NULL,
                           catogary VARCHAR (150),
                           size    VARCHAR (150),
                           brand  VARCHAR (50),                           
                           price FLOAT,
                           pic VARCHAR (200)
                          );";

          if (!mysqli_query($this->con, $sql)){
              echo "Error creating table : " . mysqli_error($this->con);
          }

      }else{
          return false;
      }
  }

  // get product from the database
  public function getData(){
      $sql = "SELECT * FROM tblproduct";

      $result = mysqli_query($this->con, $sql);

      if(mysqli_num_rows($result) > 0){
          return $result;
      }
  }

}


?>