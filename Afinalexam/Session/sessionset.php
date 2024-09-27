<?php

session_start();
if(isset($_POST["userid"]))
{
$userid=$_POST["userid"];
$username=$_POST["username"];
$_SESSION["userid"]=$userid;
$_SESSION["username"]=$username;
echo"session is set with userid and username";
echo"<a href='sessionout.php'>getsession</a>";

}
else{
    echo"Session not set";
}







?>