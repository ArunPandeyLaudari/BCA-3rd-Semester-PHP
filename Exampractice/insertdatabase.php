<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

if(isset($_POST['btn1'])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $phone=$_POST["phone"];
    $gender=$_POST["gender"];
    $country=$_POST["country"];

    $servername="localhost:3306";
    $dbname="bca3";
    $dbusername="root";
    $dbpassword="";

    $con = new mysqli($servername,$dbusername,$dbpassword,$dbname);
    if($con->connect_errno!=0){
        die("Connection Failed");

    }
    $sql="INSERT INTO students ( name,email,phone,gender,country) VALUES('$name','$email','$phone','$gender','$country')";
    $result=$con->query($sql);
    if($result){
        echo"Data inserted succesfuuly";

    }
    else{
        echo"Insetion Failed";
    }
 $con->close();
}
else{
    header("location:form.php");
}

?>
</body>
</html>