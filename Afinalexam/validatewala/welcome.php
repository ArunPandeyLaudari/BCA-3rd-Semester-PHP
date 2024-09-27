<?php

session_start();
if(isset($_POST["user"])&& isset($_POST["password"]))
{

$user=$_POST["user"];
$password=$_POST["password"];

$servername = "localhost:3306"; // MySQL IP address
$dbname = "phpbca3";
$dbusername = "root"; // default username
$dbpassword = ""; // default password

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

if ($conn->connect_errno != 0) {
    die("Connection failed: " . $conn->connect_error);
}
 $sql="SELECT * from student where username='".$_SESSION["$user"]."'";

 $result=$conn->query($sql);
 if($result->num_rows>0)
 {
    echo"WElcome Mr ".$_SESSION["user"];
   
 }
 else{
    header("location:form.html");
 }

$con->close();

}

else{
    echo"provide username and password";
}














?>