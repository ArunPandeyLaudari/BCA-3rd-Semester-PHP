<?php
session_start();
if(isset($_SESSION["userid"]) && isset($_SESSION["username"]))
{

    echo" Welcome".$_SESSION["userid"]."your username is".$_SESSION["username"]."<a href='sessiondelete.php'>deletesession</a>";

}
else{
    header("location:form.html");
}





?>