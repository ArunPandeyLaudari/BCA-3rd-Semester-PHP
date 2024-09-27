<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   function divide($a,$b){
    try{
        return $a/$b;
    }
    catch(Exception $e){
        echo"$e";

    }
   
   }
divide(10,0);


    ?>
</body>
</html>