<?php
$connection=mysqli_connect("127.0.0.1","root","","php_tests_database");
//print_r($connection);
if($connection === false){
   die("something went wrong with your connection : for more information check error stack<br>".mysqli_connect_error());
}
echo"connection created sucessfully<br>";
echo"connection host info is as follows <br>" .mysqli_get_host_info( $connection);


$query = "CREATE TABLE users(
     id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
      name VARCHAR(20),
       email VARCHAR(50),
        password VARCHAR(50), 
        created_by INT
         )";
          if(mysqli_query($connection,$query)){
               echo "<br>Table has been created successfully!"; 
               }else{ echo "<br>Table could not be created";
                echo "<br>Check Error Trace<br>".mysqli_error($connection); }
                
                mysqli_close($connection);
 ?>
