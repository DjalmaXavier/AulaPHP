<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="POST">
        <label>Quantity:</label><br>
        <input type="text" name="quantity"><br>
        <button type="submit" value="total">Send</button>
    </form>
</body>

</html>

<?php

/*$_GET, $_POST = special variables used to collect data from an HTML form
                  data is sent to the file in the action attribute of <form>
                  <form action="some_file.php" method="get">

  $_GET = Data is append to the url
          NOT SECURE
          char limit
          Bookmark is possible w/ values
          GET requests can be cached
          Better for a search page
 $_POST = Data is packaged inside the body of the HTTP request
          MORE SECURE
          No data lmit
          Cannot bookmark
          GET requests are not cached
          Better for submitting credentials
*/
$item = "Pizza";
$price = 5.99;
$total = $price * $_POST["quantity"];

echo "The total is R\${$total}";

?>