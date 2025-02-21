<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>String Fuctions</title>
</head>
<body>
<h1>Strings Fuctions</h1><br>
  <?php
    echo "<h3> Strlen Fuction (length of string)</h3> "; 
    $name = "Dheeraj";
    echo $name ;
    echo "<br>";
    // (i) Strlen Fuction --> string length count
    echo "The length of my string is &nbsp"  . strlen($name);     
    echo "<br><br>";


    // (ii) str_word_count   Fuction ---> Totels words count 
    echo "<h3> str_word_count Fuction(string words count )</h3> "; 
    $word = " I am Dheeraj"; 
    echo "str_word_count = " . str_word_count($word);   
    echo "<br><br>";

     // (iii) strrev  Fuction ---> reverse string
     echo "<h3> strrev Fuction  (String Reverse)</h3> "; 
     $reverse = "Dheeraj Rawandhe";
     echo strrev($reverse);
     echo "<br><br>";

     // (iv) strpos  Fuction ---> postion string
     echo "<h3> strpos Fuction  (String postion)</h3> "; 
     $position = "I Am Coder";
     echo "String Position = " . strpos( $position , "Coder" );
     echo "<br><br>";

     // (v)  str_replace Fuction ---> string name replace
     echo "<h3> str_replace Fuction  (String name replace)</h3> "; 
     echo str_replace("Coder", "DR" , $position);
     echo "<br><br>";
    

    // (vi) str_repeat  Fuction ---> String repeat
     echo "<h3> str_repeat Fuction (String repeat)</h3> "; 
     $coder = "Code_With_DR  &nbsp <br/>";
     echo str_repeat($coder , 5); 
  ?>

  
</body>
</html>