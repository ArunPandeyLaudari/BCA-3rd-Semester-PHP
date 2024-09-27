<?php


if(isset($_POST["btn1"]))
{
    $username=$_POST["username"];

    setcookie("user",$username,time()+60);
    echo"Cookie is set with user";

}
else{
    header("location:form.html");

}



?>