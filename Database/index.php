<?php

echo "<h1>Welcome to Database in PHP</h1>";

$servername = "localhost";
$username = "root";
$password = "";

// Create a connection
$conn = mysqli_connect($servername, $username, $password);


if(!$conn) {
  die("Sorry we failed to connect : " . mysqli_connect_error());
} 
else{
  echo "Connection was database <br>";
}

// Create a DataBase
$sql = "CREATE DATABASE dr";
$result = mysqli_query($conn , $sql);
// echo $result;

if($result) {
  echo "The DB Was Created succesfully!";
}
else{
  echo "The DB Was Not Created succesfully! besause of this error-->" . mysqli_error($conn);
}


?>