<?php

session_start();

$_SESSION["userName"] = "Dheeraj";
$_SESSION["favBook"] = "Java";

echo "<h2> Saved your session! </h2>";


?>