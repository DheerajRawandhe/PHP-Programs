<?php
 $localVar = "Globle Variable";   // global variable
function myFunction() {
  global $localVar;   // global variable
}
myFunction();     // global variable
  echo $localVar;    
  echo "<br/><br/>";

echo  var_dump($GLOBALS);
?>

