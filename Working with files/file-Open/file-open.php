<?php

$fptr = fopen("myfile2.txt", "r");       // fptr --> file pointer 
// echo $fptr;

if(!$fptr){
  echo "Unable to open this file. please enter a valid filename!";
}

// $content = fread($fptr, 10);    // $fread ---> char myfil2 --> print

$content = fread($fptr, filesize("myfile2.txt"));     // read file 
echo $content;

fclose($fptr);

?>
