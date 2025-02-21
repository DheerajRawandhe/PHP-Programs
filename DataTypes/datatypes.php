<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DataTypes</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h1>Data Types in PHP</h1>
  <ul>
      <li>String</li>
      <li>Integer</li>
      <li>Float</li>
      <li>Boolean</li>
      <li>Array</li>
      <li>Object</li>
      <li>Null</li>
    </ul>
<hr>

<!-------- Php Code --------------->

<!-- String -->
  <?php
    echo " <h2>Strings :- <br> </h2>" ;
    $name = "Dheeraj";
    $course = "Computer Sience";
    echo "I am $name and my course is  $course. <br> <br>";

// Integer ----->
echo " <h2>Integer Numbers :- <br> </h2>";
$income = 50000  ."<br>";
$debts = -655;
echo $income;
echo $debts;
echo "<br> <br><br>";


// Float ----->
echo " <h2> Float Numbers :-<br> </h2>";
$a = 644.32  ."<br>";
$b = -54.3;
echo $a;
echo $b;
echo "<br><br><br>";

// Boolean ----->
echo "<h2> Boolean Number  :- <br> </h2>";
$x = false ;
$y = true ;
echo var_dump($x);
echo "<br>";
echo var_dump($y);
echo "<br><br><br>";

// ARRAY ----->
echo "<h2> Arrays :-<br> </h2>";
$frds = array("Rohan" ,"Raju", "Mohan", "Rahul" , "Pratik");
echo var_dump($frds); 
echo "<br> <br>";
echo $frds[0]. "<br>"; 
echo $frds[1] . "<br>"; 
echo $frds[2] . "<br>"; 
echo $frds[3] . "<br>"; 
echo $frds[4] . "<br>"; 
echo "<br><br><br>";

?>


</body>
</html>