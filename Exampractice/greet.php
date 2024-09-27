<?php
if(isset($_POST['name'])){
    $name=$_POST['name'];
    echo"<p> Hello,$name! Welcome to our website</p>";
}
else{
    echo"<p> Name not found</p>";
}
?>