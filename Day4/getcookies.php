<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>getcookies</title>
</head>
<body>
  <?php
    if(isset($_COOKIE["user"])){
        echo "<h1> Welcome".$_COOKIE["user"]."</h1>";
            }
            else{
                echo"No user name avilable in cookies";
            }
  ?>
</body>
</html>