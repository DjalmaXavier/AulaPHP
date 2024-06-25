<?php

// cookie = Information about a user stored in a user's web-browser targeted advertisemnts, browsing preferences, and other non-sensitive data 

setcookie("fav_food", "pizza", time() + 86400 * 2, "/"); // Set the cookie to expire in 2 days. If put to a negative number, it will delete the cookie.
setcookie("fav_drink", "coffee", time() + 86400 * 2, "/");
setcookie("fav_game", "elden_ring", time() + 86400 * 2, "/");

foreach ($_COOKIE as $key => $value) {
    echo "{$key} = {$value} <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "You can buy some {$_COOKIE["fav_food"]}";
} else {
    echo "We don't know your favorite food";
}
