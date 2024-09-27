<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
session_start();
if(isset($_SESSION["Favcolor"])){
    echo"Favcolor=".$_SESSION["Favcolor"];
}
else{
    echo"session variable not found";
}

?>
</body>
</html>