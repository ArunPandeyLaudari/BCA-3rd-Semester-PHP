<?php
// Start the session
session_start();

// Set session variables
$_SESSION["username"] = "Ram";

// Set cookies - cookies will expire in 1 hour
setcookie("username", "Ram", time() + 3600, "/");

?>
<!DOCTYPE html>
<html>
<head>
    <title>Set Session and Cookie</title>
</head>
<body>
    <h1>Setting Session and Cookie</h1>
    <p>Session and cookies have been set. Go to the <a href="get_session_cookie.php">next page</a> to see the values.</p>
</body>
</html>
