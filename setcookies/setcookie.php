<?php
if (isset($_POST["bt1"])) {
    $username = $_POST["username"];
    setcookie("user", $username, time() + (60));
    echo " cookie is set with the name 'user' <a href='getcookie.php'>getcookie</a>";
} else {
    echo "Sorry";
}
