<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="form.php" method="post">
        <label>Enter a country</label>
        <input type="text" name="country">
        <button type="submit">Submit</button>
    </form>
</body>

</html>


<?php

$capitals = array(
    "USA" => "Washington",
    "Japan" => "Kyoto",
    "South Korea" => "Seoul",
    "India" => "New Delhi"
);

$capital = ($capitals[$_POST["country"]]) ? $capitals[$_POST["country"]] : "N/A";

echo $capital;




?>