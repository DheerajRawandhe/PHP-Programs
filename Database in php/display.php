<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Data</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<table class="table" border="1" align="center"  width="600">
  <h1 align="center" >Students Details</h1>
  <tr>
    <th>Roll No</th>
    <th>Student Name</th>
    <th>City</th>
  </tr>

<?php

$conn=mysqli_connect("localhost", "root", "", "students");
if(!$conn){
  die("Coulnot Connect to a Database");
}
else
{
$query="select rollno, name, city from stud";

$result=mysqli_query($conn, $query);

if(mysqli_num_rows($result)>0)
{
  while($row=mysqli_fetch_assoc($result)){
  echo "<tr><td>" . $row["rollno"] .   "</td><td>" . $row["name"] . "</td><td>" . $row["city"] . "</td><tr>";
  } 
}
else
{
  echo "0 Result";
}
}
mysqli_close($conn);


?>

</table>
</body>
</html>