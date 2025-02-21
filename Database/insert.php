<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "Dhiruu6"


// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn) {
  die("Sorry we failed to connect : " . mysqli_connect_error());
} 
else{
  echo "Connection was database <br>";
}


// Insert and sql query be exicute 
$sql= INSERT INTO `mytable` (`sno`, `name`, `age`, `gander`) VALUES ('3', 'Vinay', '20', 'male');

$result = mysqli_query($conn , $sql);

// add a new table in DB
if($result) {
  echo "The result has been Table inserted succesfully!";
}
else{
  echo "The Table Was Not inserted succesfully! besause of this error-->" . mysqli_error($conn);
}


?>