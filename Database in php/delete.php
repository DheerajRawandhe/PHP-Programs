<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Recourd</title>
</head>
<body>
  

<?php

$conn=mysqli_connect("localhost", "root", "", "students");

if(!$conn)
{
  die("Coulnot Connect to a Database");
}
else
{
  $sql="delete from stud where rollno=10"; 
    if(mysqli_query($conn, $sql)){
      echo "<h1> Values Deleted from a Table Successfully</h1>";
}
else
{
  echo "<h1> Unable to Delete Data</h1>";
}

}

mysqli_close($conn);

?>

</body>
</html>