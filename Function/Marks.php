<?php

function students($marks) {
  $sum=0;
  foreach ($marks as $value) {
  $sum += $value;      
  }  
  return $sum;
}

$dheeraj = [60,75,84,77,73  ,88];
$sumMarks = students($dheeraj);
echo "Totle marks of 600 is $sumMarks";

?>