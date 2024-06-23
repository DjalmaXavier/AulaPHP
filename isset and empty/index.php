<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="post">
        <label>Username: </label>
        <input type="text" name="username">
        <label>Password: </label>
        <input type="password" name="password">
        <button type="submit" name="submit">Submit</button>
    </form>
</body>

</html>
<?php

//isset() = Returns TRUE if a variable is declared and not null
//empty() = Returns TRUE if a variable is not declared, false, null, "";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (empty($username)) {
        echo "Insert a username<br>";
    } elseif (empty($password)) {
        echo  "Inser a password";
    } else {
        echo "Register complete!";
    }
}

?>