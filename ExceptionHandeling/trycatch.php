<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception</title>
</head>
<body>
<?php

function divide($dividend,$divisior){
    try{
    if($divisior == 0){
        
    }
    return $dividend/$divisior;
}
catch(Exception $e){
    echo($e);

}
}
echo divide(5,0);
?>
</body>
</html>