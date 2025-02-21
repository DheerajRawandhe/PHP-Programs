<?php
echo date("d F Y");
echo "</br>";

$currentTimestamp = time();

$currentDate = date("Y-m-d H:i:s", $currentTimestamp);
echo "Today's Time :- " . $currentDate;
?>
