<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "param_users";


// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);
// Die if connection was not successful
if (!$con){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}
else{
    // echo "Connection was successful<br>";
}

?>

