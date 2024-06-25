<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="POST">
        username:
        <input type="text" name="username">
        <input type="submit" name="submit" value="submit">
    </form>
</body>

</html>


<?php
//$_SERVER = SGB that contains headers, paths, and script locations. The entries in this array are created by the web server.

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "Posted!";
} else {
    echo "Not posted!";
}

?>