<?php
// function name($a) {    //Call by value
function name(&$a) {       //Call refrence
  $a="Dheeraj";
}
$b="Rawandhe";
name($b);
echo $b;


?>  