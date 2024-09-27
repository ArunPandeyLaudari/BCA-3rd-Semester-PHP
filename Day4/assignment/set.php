<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   if(isset($_POST['btn1'])) {
    $username = $_POST['username'];
    setcookie("user", $username, time() + (60)); // Cookie lasts for 60 seconds
    echo "Cookie is set with the name 'user'<a href='get.php'>Go back br</a> ";
}
    ?>
</body>
</html>