<?php



//create a connection 

$conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//check connection

if($conn->connect_error){
    die('Connection Failed '. $conn -> connect_error);
}

?>
