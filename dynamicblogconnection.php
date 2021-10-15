<?php
// Destroy if not possible to create a connection
$conn = mysqli_connect("127.0.0.1","root","","php_tests_database");

if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
// create new post
if(isset($_REQUEST['new_post'])){
    $title  = $_REQUEST["title"];
    $content = $_REQUEST["content"];
    $sql = "INSERT INTO data(title, content) VALUES('$title', '$content')";
    mysqli_query($conn, $sql);
    header ("location: form.php");
    exit();

}


   

    
    
?>