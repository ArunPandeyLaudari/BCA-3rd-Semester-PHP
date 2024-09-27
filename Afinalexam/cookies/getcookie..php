<?php

if(isset($_COOKIE["user"]))

{

echo"<h1> Welcome ".$_COOKIE["user"]."</h1>";


}
else{
    echo"No username";
}




?>