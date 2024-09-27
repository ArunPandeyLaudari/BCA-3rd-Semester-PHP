
<?php

session_start();

if(isset($_SESSION["userid"]) && isset($_SESSION["username"]))
{
   session_destroy();

}








?>