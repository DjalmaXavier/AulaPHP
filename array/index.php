<?php

// array = "variable" which can hold more than one value at a time

$foods = array("apple", "orange", "banana", "coconut");

//echo $foods; can't acess the array
echo $foods[1];


//foreach() you can acess each element of the array and use it.

foreach ($foods as $food) {
    echo "{$food} <br>";
};

//array_push($foods, "pizza"); //array_push(); push a array
//array_pop($foods); //array_pop() remove the last item
//array_shift($foods); //array_shift() remove the first element
//$foods = array_reverse($foods); 
echo count($foods);
