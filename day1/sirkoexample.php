<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $student="Arun";
    $sub1=10;
    $sub2=10;
    $sub3=10;
    $sub4=10;
    $sub5=10;

    $total=$sub1+$sub2+$sub3+$sub4+$sub5;

    $percentage=($total/500)*100;
    
    if($percentage>90 && $percentage<=100){
        echo("Mr".$student."Have score A+");
}
elseif($percentage>80){
    echo("Mr".$student."Have score A");
}
elseif($percentage>70 ){
    echo("Mr".$student."Have score B+");
}
elseif($percentage>60 ){
    echo("Mr".$student."Have score B");
}
elseif($percentage>50 ){
    echo("Mr".$student."Have score c+");
}
elseif($percentage>40 ){
    echo("Mr".$student."Have score c");
}
else{
    echo("Fail");
}

    ?>
</body>
</html>