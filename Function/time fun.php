<?php

echo "Now Time is : " . time(). "<br/><br/>";

$timestamp = mktime(0, 0, 0, 8, 15, 2025);
echo $timestamp;



$currentTimestamp = time();

$currentDateTime = date('Y-m-d H:i:s', $currentTimestamp);

echo 'Now Time : ' . $currentDateTime;


?>
