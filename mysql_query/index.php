<?php

include("database.php");

$sql = "SELECT * FROM users WHERE user = 'Djalma'";

try {
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        //If you need to return more than 1 row, you can use the while to bring more rows
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["id"] . "<br>";
            echo $row["user"] . "<br>";
            echo $row["reg_date_time"] . "<br>";
        }
    } else {
        echo "No user found";
    }
} catch (mysqli_sql_exception) {
    echo "Wrong query";
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