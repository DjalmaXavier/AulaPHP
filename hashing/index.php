<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

</body>

</html>

<?php

//hashing = transforming sensitive data (password) into letter, numbers, and/or symbols via a mathematical process

$password = "pizza123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("pizza123", $hash)) {
    echo "Match!";
} else {
    echo "Dosen't match";
}


?>