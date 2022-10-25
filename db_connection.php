<?php

$servername= "localhost";
$username = "benax_iot_root";
$password = "Td(FAdeZ9xp3";
$database = "benax_iot";

// create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// check connection
if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>