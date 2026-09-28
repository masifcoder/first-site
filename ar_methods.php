<?php


$ar = [1, 2];

// insert new value
array_push($ar, 3);


echo "<pre>";
print_r($ar);
echo "</pre>";


echo "<br>--------------------------<br>";
$str = "apple-mango-banana";
echo $str;

$exploded = explode("-", $str);


echo "<pre>";
print_r($exploded);
echo "</pre>";

$emploded = implode("=", $exploded);

echo $emploded;


?>