<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
      
<?php

 $servername="localhost:3306";
 $dbname="store";
 $dbusername="root";
 $dbpassword="";

 $con=new mysqli($servername,$dbusername,$dbpassword,$dbname);
 if($con->connect_errno!=0){
    die("Connection Failed");
 }
 $sql="SELECT * FROM information";
 $result=$con->query($sql);
 if($result->num_rows>0){
    echo"
    <table border='1'>
    <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Country</th>
    </tr>
    ";
    while($row=$result->fetch_assoc()){

    echo"
     <tr>
      <td>".$row['id']."</td>
      <td>".$row['name']."</td>
      <td>".$row['email']."</td>
      <td>".$row['phone']."</td>
      <td>".$row['gender']."</td>
      <td>".$row['country']."</td>
    
     </tr>  
    ";

    }

    echo"</table>";
 }
 else{
   echo" <h2>No data </h2>";
   header("location:form.php"); 
 }

 $con->close();

?>

</body>
</html>