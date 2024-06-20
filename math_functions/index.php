<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label>Value 1:</label>
        <input type="text" name="x">
        <label>Value 2:</label>
        <input type="text" name="y">
        <label>Value 3:</label>
        <input type="text" name="z">
        <button type="submit">total</button>
    </form>

</body>

</html>

<?php

$x = $_POST['x'];
$y = $_POST['y'];
$total = null;

//$total = abs($x);
//$total = round($x);
//$total = floor($x);
//$total = ceil($x);
//$total = sqrt($x);
//$total = pow($x, $y);
//$total = max($x, $y, $z);
//$total = min($x, $y, $z);
//$total = pi();
//$total = rand(1, 10);

echo $total;

?>