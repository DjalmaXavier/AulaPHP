<?php

/*
Associative arrat = An array made of key=>value pairs

Ex:  countries => capitals
     id => username
     item => price
*/

$capitals = array(
    "USA" => "Washington",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

echo "Original <br><br>";

foreach ($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}


$capitals["USA"] = "Las Vegas"; // Update a value
$capitals["Brazil"] = "Brasilia"; // add a key-value
array_pop($capitals); //Remove the last pair in this array
array_shift($capitals); //Remove the first pair in this array
$keys = array_keys($capitals); // Create a new array using only the keys
$values = array_values($capitals); // Create a new array using only the values
$arrayFlip = array_flip($capitals); // Create a new array fliping the values with the keys
$arrayReverse = array_reverse($arrayFlip); // Create a new array, reversing the original order of the keys and values.

echo "<br>After shift and pop<br><br>";

foreach ($capitals as $key => $value) {
    echo "{$key} - {$value} <br>";
}

echo "<br>Only Keys <br><br>";


foreach ($keys as $key) {
    echo "{$key} <br>";
}

echo "<br>Only Values  <br><br>";

foreach ($values as $value) {
    echo "{$value} <br>";
}

echo "<br>After flip <br><br>";

foreach ($arrayFlip as $key => $value) {
    echo "{$key} - {$value} <br>";
}

echo "<br>After reverse <br><br>";

foreach ($arrayReverse as $key => $value) {
    echo "{$key} - {$value} <br>";
}

echo "<br>Count <br><br>";

echo count($arrayReverse); //Count the number of items in the array
