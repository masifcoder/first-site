<?php


// types of array in php  in php
// 1. indexed array

$fruits = ['apple', "banana", "cherry"];

echo "<pre>";
print_r($fruits);
echo "</pre>";

echo "<br>--------------------------<br>";
echo count($fruits);

echo "<br>--------------------------<br>";

// looping over array using foreach loop

// foreach($fruits as $v) {
//     echo "<br>" . $v;
// }


// 2. associative array
$student = [
    "name" => "ali",
    "age" => 20,
    "city" => "Lodhran"
];

echo "<pre>";
print_r($student);
echo "</pre>";

echo "<br>--------------------------<br>";

foreach ($student as $a => $b) {
    echo "<br>" . " $a == " . $b;
}


echo "<br>--------------------------<br>";

// 3. Multidimensional Array

$users = [
    [1, "ali", "lodhran"],
    [2, "saleem", "karachi"],
    [3, "khalid", "multan"]
];

echo "<pre>";
print_r($users);
echo "</pre>";
echo "<br>--------------------------<br>";

// simple foreach loop
// foreach ($users as $user) {
//     echo "<pre>";
//     print_r($user);
//     echo "</pre>";
// }

// nested loop
foreach ($users as $user) {
        
    foreach($user as $v) {
        echo "<br>" . $v;
    }
}
