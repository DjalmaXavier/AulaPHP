<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    This is the login page </br>
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="logout">
    </form>
</body>

</html>

<?php

echo "User: {$_SESSION["username"]}";
if (isset($_POST["logout"])) {
    session_destroy();
    header("Location: index.php");
}
?>