<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<pre>";
    print_r($_GET);
    echo "<br> <br>";
    print_r($_REQUEST);
    echo "<br> <br>";
    print_r($_POST);
    ?>

    <!-- request use garda -->
    if(isset($_REQUEST["username"])){
        echo "<h1>Welcome" .$s_REQUEST
    }
</body>
</html>