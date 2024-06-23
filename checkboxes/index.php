<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="foods[]" value="Pizza">
        Pizza<br>
        <input type="checkbox" name="foods[]" value="Hamburguer">
        hamburguer<br>
        <input type="checkbox" name="foods[]" value="Hotdog">
        Hotdog<br>
        <input type="checkbox" name="foods[]" value="Taco">
        Taco<br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    foreach ($_POST["foods"] as $food) {
        echo "{$food} <br>";
    }
}

?>