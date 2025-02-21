<?php

// cookies
echo "<h1>Cookies In PHP </h1> <br/><br/>";

// echo time();
setcookie("Categery", "Book", time() + (86400 * 30), "/");

echo "The Cookies is set!";

?>
