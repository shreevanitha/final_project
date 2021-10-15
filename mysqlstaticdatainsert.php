?php
$connection=mysqli_connect("127.0.0.1","root","","php_tests_database");
//print_r($connection);
if($connection === false){
   die("something went wrong with your connection : for more information check error stack<br>".mysqli_connect_error());
}
echo"connection created sucessfully<br>";
echo"connection host info is as follows <br>" .mysqli_get_host_info( $connection);

$name='SHREE';
$email='shreevanithajh@gmail.com';
$password='Asdf123';
$created_at =1;



         $query ="INSERT INTO  users(name,email,password,created_by)value( '$name','$email','$password','$created_at')";
          if(mysqli_query($connection,$query)){
               echo "<br>data has been inserted  successfully!"; 
               }else{ echo "<br>data could not be inserted";
                echo "<br>Check Error Trace<br>".mysqli_error($connection); }
                
                mysqli_close($connection);
 ?>
<