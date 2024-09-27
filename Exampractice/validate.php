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
    if($con->connect_errno!=0){
        die("Connection Failed");
    }
    $sql="SELECT * from user where username='$username' and password='$password'";
    $result=$con->query($sql);
    if($result->num_rows>0){
        $_SESSION["username"]=$username;
        header("location:welcome.php");
        exit();
    }
    else{
        echo"Invalid username and Password";
    }
        

    $con->close();
    }
    else{
        header("location:login.php");
        exit();
    }



?>
</body>
</html>