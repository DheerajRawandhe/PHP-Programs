<?php
echo "<h1> Operators </h1>";
echo "1. Arthmetical Operator   <br/>"; 
echo "2. Comparison Operator   <br/>"; 
echo "3. Assigment  Operator   <br/>"; 
echo "4. Logical Operator   <br/>"; 
echo "5. Bitwise Operator   <br/>"; 
echo "6. Increment & Decriment  Operator  ";
echo "<br/> <br/><br/>" ;


// 1. Arthmetical Operator  
echo "<h2>1. Arthmetical Operator</h2>";
$a = 9;
$b = 5;
echo "Addition : " . $a + $b ."<br/>" ; 
echo "Sub : " . $a - $b  ."<br/>" ; 
echo "Mult : " . $a * $b ."<br/>" ; 
echo "Devision : " . $a / $b ."<br/>"; 
echo "<br/> <br/><br/>" ;

//2. Assigment  Operator
echo "<h2>2. Assigment  Operator </h2>";
$x = 8;
echo "Addition : " . $x+=5;
// echo "Sub : ". $x-=6 ;
// echo "Mult : ". $x*=4;
// echo "Devision : ". $x/=1;



// 3. Comparison Operator 
echo "<h2>3. Comparison Operator   </h2>"; 
$n=6;
$m=8;
echo "for x == y the result is : ";
echo var_dump($n == $m) . "</br>";
echo var_dump($n < $m) . "</br>";
// echo var_dump($n <= $m) . "</br>";
// echo var_dump($n > $m) . "</br>";
// echo var_dump($n >= $m ) . "</br>";
// echo var_dump($n != $m) . "</br>";
echo "</br></br>";


// 4. Logical Operator
echo "<h2>  4. Logical Operator </h2>";
$c=false;
$d=false;
echo "Result is  and Logical : ";       
echo  var_dump($c and $d) . "</br>";    //and && Logical
echo  var_dump($c || $d)."</br>";               //or ||  Logical
echo  var_dump(!$d);               //Not !  Logical

echo "</br></br>";
?>

