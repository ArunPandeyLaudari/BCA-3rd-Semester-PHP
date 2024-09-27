<?php
 
 if(isset($_POST["bt1"])){
    $num1=$_POST["num1"];
    $num2=$_POST["num2"];
    $sum=$num1+$num2;
    echo" sum od two number is $sum";
 }
else{
    echo"Go back to <a href='form.html'>go</a>";
}


?>