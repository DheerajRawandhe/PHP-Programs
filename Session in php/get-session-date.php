<?php

session_start();
if(isset($_SESSION["userName"])){

echo "<h2 > Welcome "  . $_SESSION["userName"] . "</h2>";
echo "<h2> Your favrite Book is : "  . $_SESSION["favBook"] . "</h2>";
echo "</br>";
}
else{
  echo "<h2> Please LogIn to Continue!</h2>";
}

?>