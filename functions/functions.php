<?php
function hello_World()
{
    echo "Hello World! <br>";
}

function helloPerson($person)
{
    echo "Hello {$person} <br>";
}

function plusFunction($num1, $num2)
{
    echo $num1 + $num2;
}

function is_even($number)
{
    $result = $number % 2 ? "<br>Odd<br>" : "<br>Even<br>";

    return $result;
}

hello_World();

helloPerson("Djalma");
helloPerson("Claudio");
helloPerson("Celmo");

plusFunction(3, 5);

echo is_even(2);
