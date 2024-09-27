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
    if(isset($_SESSION["username"]) || ($_SESSION["userid"])){
        // auta auta falna lai
        unset($_SESSION["username"]);
        unset($_SESSION["userid"]);

        // sabai lai akai patak falna lai 

        // session_destroy();
    }
    else{
        header("location:login.php");
    }
?>
    
</body>
</html>