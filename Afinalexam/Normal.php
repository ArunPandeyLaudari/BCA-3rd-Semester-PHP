<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(isset($_POST["btn1"]))
{

$num1= intval($_POST["num"]);
$num2=intval($_POST["numb"]);
$choice=$_POST["choice"];
switch($choice)
{
    case "+":
        $sum=$num1+$num2;
        echo"sum of $num1 and $num2 is $sum ";
        break;

     case "-":
            $diff=$num1-$num2;
            echo"diff of $num1 and $num2 is $diff";
            break;

    case "/":
        if($num2!=0)
        {
            $div=$num1/$num2;
            echo" Division of $num1 and $num2 is $div";
        }
        else {
            throw new ArithmeticException("Division by zero");
        }
       break;

     case "*":
        $mul=$num1*$num2;
        echo"Mul of $num1 and $num2 is $mul";
            break;
}

}
else{
    echo"No data";
    header("location:form.php");
}
?>
</body>
</html>