<?php

if(isset($_GET["id"])){

    $id=intval($_GET["id"]);



$server="localhost:3306";
$dbname="bca3";
$dbusername="root";
$dbpassword="";

$con=new mysqli($server,$dbusername,$dbpassword,$dbname);

if($con->connect_errno!=0)
{
    die("Connection Failed");
}
 $sql="DELETE FROM students WHERE id=$id";
 
 $result=$con->query($sql);
 if($result)
 {
    echo"Data delete sucess";
    
 }
 else{
    echo"No data inserted";
    header("location:form.html");
 }
 $con->close();

}
else{
    header("location:form.html"); 
}



?>
