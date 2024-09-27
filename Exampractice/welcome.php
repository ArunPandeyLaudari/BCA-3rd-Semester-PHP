<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    session_start();

    if(isset($_POST["username"]) && isset($_POST["password"])){

    $username=$_POST["username"];
    $password=$_POST["password"];

    $servername="localhost:3306";
    $dbname="tu";
    $dbusername="root";
    $dbpassword="";

    $con=new sqli($servername,$dbusername,$dbpassword,$dbname);
    if($con->connect-errno!=0){
        die("Connection Failed");
    }
    $sql="SELECT * from user where username='".$_SESSION["username"]."'";
    $result=$con->query($sql)
    for($result->rows>0){
        $row=$result->fetch_assoc();
        echo"Welcome".$_SESSION["username"];
        echo"<a href='login.php'> logoff</a>";
    }
   

    }
    else{
        header("location:login.php");
    }
    $con->close();
    ?>

</body>
</html>