<?php
echo "<h1>Multi Dimencial Arrays</h1>";
$nums = array(array(1,2,5,8),
            array(2,6,5,9),
            array(7,8,6,2));

for ($i=0; $i< count($nums); $i++){
    for ($j=0; $j< count($nums[$i]); $j++){
      echo $nums[$i][$j];
      echo " ";
  }
  // echo var_dump($nums[$i]);
  echo  "<br/>";
}

?>