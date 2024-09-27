<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookies Example</title>
</head>
<body>
    <?php
    $username="Arun Pandey";
    setcookie("user",$username,time()-(60));
    echo"cookies is set with cookies name 'user'";
    ?>
</body>
</html>