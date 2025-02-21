<?php
echo "<h1>Associative  Array</h1>";
$mans = array("Dhiruu"=>"Blue", "Vinay"=> "Pink", "Nilesh" => "Black");
echo "Dhiruu : " .$mans["Dhiruu"] ."<br/>";
echo "Vinay : " .$mans["Vinay"]  ."<br/>";
echo  "Nilesh : ". $mans["Nilesh"]  ."<br/><br/>";

echo $mans[87]  ."<br/>";

foreach($mans as $keys => $value) {
  echo "Man names is $keys , and Fav Color is : $value" ."<br>";
}

?>