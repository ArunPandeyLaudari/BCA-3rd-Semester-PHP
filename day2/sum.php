<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   
   if(isset($_POST["btn1"])){
    // name ma vako value auni ho hai

    // parsing garna lai sabi klai interger  ma use intval
    $x=intval($_POST["num1"]);
    $y=intval($_POST["num2"]);
    $sum=$x+$y;
    echo"<h1> sum of $x and $y is $sum</h1>" ;
   }
   else{
    echo"Sorry data not found <a href='additionform.php'>Go back</a>";
   }
   ?>
</body>
</html>