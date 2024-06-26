<?php
// There are  2 types of conection: MySQLi Extension or PDO. First, we will use MySQLi
include("database.php");

$username = "Djalma";
$pass = "justatest";
$hash = password_hash($pass, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password) VALUES ('$username', '$hash')";

try {
    mysqli_query($conn, $sql);
    echo "User is now registered";
} catch (mysqli_sql_exception) {
    echo "Could not register user";
}

mysqli_close($conn);

?>
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