<?php
$title="My first php page";
?>
<html>
    <head><title><?php echo$title;?></title></head>
<body>
<?php

$x=10;
$y=20;
$sum=$x+$y;
echo"<i?>sum of <b>$x</b>and <b>$y</b> is <b> $sum</b></i><br>";

$n=5;
for($i=1;$i<10;$i++){
    echo"$n x $i =".$n*$i. "<br>"
}


?>
</body>
</html>

