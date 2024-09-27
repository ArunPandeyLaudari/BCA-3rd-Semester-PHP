<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Get Session and Cookie</title>
</head>
<body>
    <h1>Getting Session and Cookie</h1>
    
    <?php
    // Retrieve session variables
    if(isset($_SESSION["username"])) {
        echo "<p>Session Username: " . $_SESSION["username"] . "</p>";
    } else {
        echo "<p>No session variables found.</p>";
    }
    
    // Retrieve cookies
    if(isset($_COOKIE["username"])) {
        echo "<p>Cookie Username: " . $_COOKIE["username"] . "</p>";
    } else {
        echo "<p>No cookies found.</p>";
    }
    ?>

    <p><a href="set_session_cookie.php">Go back to set session and cookie</a></p>
</body>
</html>
