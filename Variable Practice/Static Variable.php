<?php

function marks()  {
 static $num = 84 ;      // Static Variables
 $num++;  
echo "Students Marks : " , $num . "</br>";  
}
marks();
marks();
marks();
   


// print "Dheeraj";

?>