<?php

if(isset($_POST["send"])){

    $id=$_POST["id"];
    $name=$_POST["name"];
    $address=$_POST["address"];
    $phone=$_POST["phone"];
    $email=$_POST["email"];
    $gender=$_POST["gender"];
    $course=$_POST["course"];
    $interest=$_POST["interest"];


$server="localhost:3306";
$dbname="bca3";
$dbusername="root";
$dbpassword="";

$con=new mysqli($server,$dbusername,$dbpassword,$dbname);

if($con->connect_errno!=0)
{
    die("Connection Failed");
}
 $sql="INSERT INTO student(id,name,address,phone,email,gender,course,interest) VALUES($id,'$name','$address',$phone,'$email','$gender','$course','$interest')";
 
 $result=$con->query($sql);
 if($result)
 {
    echo"Data inserted sucess";
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
