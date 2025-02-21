<?php
function addFive($num) {
    $num += 5;
    echo "function inside value : $num<br>";
}

$b = 10;
addFive($b);
echo "function outside value : $b";
?>
