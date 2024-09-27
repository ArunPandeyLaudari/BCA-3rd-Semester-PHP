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
if(isset($_POST["username"])&& isset($_POST["password"])){
    $username=$_POST["username"];
    $password=$_POST["password"];

    $servername="localhost:3306";
        $dbname="tu";
        $dbusername="root";
        $dbpassword="";

        $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);

        if($con->connect_errno!=0){
            die("Connection Failed");

        }
   $sql="SELECT * from user where username='".$_SESSION["username"]."'";
   $result=$con->query($sql);
   if($result->num_rows>0){
    $row=$reult->fetch_assoc();
    echo"WElcome ".$_SESSION["username"];
  }
  else{
    header("location:login.php");
  }
$con->close();

}
else{
    header("location:login.php");
  }








?>
</body>
</html>