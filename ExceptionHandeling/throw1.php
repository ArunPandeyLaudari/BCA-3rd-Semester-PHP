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
       
            if($b==0){
                throw new Exception(" Divide by zero");
            }
            return $a/$b;
        }
        
    divide(5,0);

    ?>
</body>
</html>