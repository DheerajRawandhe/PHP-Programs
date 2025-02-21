<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Database Inserting</title>
</head>
<body>

<?php

$conn=mysqli_connect("localhost","root", "", "students");

if(!$conn)
{
  die("Coulnot Connect to a Database");
}
else
{
  $sql="insert into stud values (110, 'Naman Verma', 'Indore')";
    if(mysqli_query($conn, $sql))
  {
    echo "<h1> Values inserted in a Table Successfully</h1>";

}
else {
  echo "<h1> Unable to insert Data</h1>";
}
}

mysqli_close($conn);

?>

  
</body>
</html>