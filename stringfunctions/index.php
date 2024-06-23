<?php
$username = "Darius Ronaldo Ferreiro";
$phone = "1234-5678";

//$username =  strtolower($username); Lower the string
//$username =  strtoupper($username); Upper the string
//$username =  trim($username); Trim the spaces of the string
//$username =  str_pad($username, 20, "/"); add what character you want.
$phone =  str_replace("-", "", $phone); // Replace a character
$equals = strcmp($username, "Darius Ronaldo"); // if return 0, is true;
$size = strlen($username); //Take the size of the string
$search = strpos($username, " "); // Find the index of a character
$firtsname = substr($username, 0, 6);
$fullname = explode(" ", $username);
$retoredname = implode("-", $fullname);

echo $username;
echo "<br>{$equals}<br>";
echo $phone;
echo "<br>{$size}";
echo "<br>{$search}";
echo "<br>{$firtsname}";
foreach ($fullname as $name) {
    echo "<br>{$name}";
}
echo "<br>{$retoredname}";
