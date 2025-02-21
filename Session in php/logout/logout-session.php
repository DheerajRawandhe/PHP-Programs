<?php

session_start();

// echo " Welcome "  .$_SESSION["userName"];
// echo "</br>";
// echo "Your favrite Book is : " .$_SESSION["favBook"];

session_unset();        // all variable unset
session_destroy();       // current session --> derstoy


echo "</br> <h2> You have been logged out!</h2>";
?>