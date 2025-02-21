<?php
function addFive(&$num) {
    $num += 5;
    echo "Function inside value : $num<br>";
}

$originalValue = 10;
addFive($originalValue);
echo "Function outside value : $originalValue";
?>
