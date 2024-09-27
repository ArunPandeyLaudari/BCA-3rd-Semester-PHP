<?php
session_start();

if (isset($_SESSION["userid"]) && isset($_SESSION["username"])) {
    echo "Welcome" . $_SESSION["userid"] . "your username is" . $_SESSION["username"];
    echo "<a href='deletesession.php'>deletesession</a>";
} else {
    echo "no session is found ";
    header("location:form.html");
}
