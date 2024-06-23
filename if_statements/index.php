<?php

$hours = 20;
$weekly_pay = null;

if ($hours <= 30) {

    $weekly_pay = $hours * 10;
} elseif ($hours >= 40) {
    $weekly_pay = $hours * 15;
} else {
    $weekly_pay = $hours * 5;
}

echo "You made \${$weekly_pay} this week";
