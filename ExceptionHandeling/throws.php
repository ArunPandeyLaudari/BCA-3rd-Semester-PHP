<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    function divide($dividend,$divisior){
        if($divisior == 0){
            throw new Exception("Dividion by Zero");
        }
        return $dividend/$divisior;
    }
    echo divide(5,0);
    ?>
</body>
</html>