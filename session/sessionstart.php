 <?php

    session_start();
    if (isset($_POST["bt1"])) {
        $username = $_POST["user"];
        $userid = $_POST["id"];
        $_SESSION["username"] = $username;
        $_SESSION["userid"] = $userid;
        echo "Session is set with the $userid and $username <a href='sessionget.php'>get session</a>";
    } else {
        echo "no session is set";
    }
