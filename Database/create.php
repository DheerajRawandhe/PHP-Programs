<?php

echo "<h1>Welcome to Database in PHP</h1>";

$servername = "localhost";
$username = "root";
$password = "";
$database = "dr"

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);


if(!$conn) {
  die("Sorry we failed to connect : " . mysqli_connect_error());
} 
else{
  echo "Connection was database <br>";
}


// Create a Table in the DB
$sql = "CREATE TABLE `newtable` (`sno` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(20) NOT NULL , `age` INT(10) NOT NULL , `gander` VARCHAR(10) NOT NULL , PRIMARY KEY (`sno`))";

$result = mysqli_query($conn , $sql);

// Check for the table creation success
if($result) {
  echo "The Table Was Created succesfully!";
}
else{
  echo "The Table Was Not Created succesfully! besause of this error-->" . mysqli_error($conn);
}
?>