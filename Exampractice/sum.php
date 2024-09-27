<?php
if(isset($_POST['btn1'])){
    $number1= intval ($_POST['num1']);
    $number2= intval($_POST['num2']);
    $sum=$number1+$number2;
    echo"<p> <h2?>Sum of two number</h2> $sum </p>";

}
else{
    echo"<p> Provide correct number </p>";
}