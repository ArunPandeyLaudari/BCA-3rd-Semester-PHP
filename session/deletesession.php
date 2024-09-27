<?php
session_start();
if (isset($_SESSION["userid"]) && isset($_SESSION["username"])) {
    unset($_SESSION["userid"]);
    unset($_SESSION["username"]);

    //
    session_destroy();
    echo "Session destroy ";
}
