<?php

//Variable = A reusable container that holds data

//String
$name = "Djalma Xavier";

//Integer
$age = 25;
$pizzaValue = 20;

//Float
$money = 100.5;

//Boolean
$online = true;

//No assigment yet

$total;

echo "Hello {$name}! <br>";
echo "You have {$age} years. <br>";
echo "You have R\${$money} saved <br>";
echo "Online status {$online} <br>";

$total = $pizzaValue * 3;

echo "Your orderes 3 pizzas, each one cost 10. The total is = {$total}";
