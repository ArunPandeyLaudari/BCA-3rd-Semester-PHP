<?php


$server="localhost:3306";
$dbname="bca3";
$dbusername="root";
$dbpassword="";

$con=new mysqli($server,$dbusername,$dbpassword,$dbname);

if($con->connect_errno!=0)
{
    die("Connection Failed");
}
$sql="SELECT * FROM student";
$result=$con->query($sql);
if($result->row>0){

    echo"
    <table border='1'>
   <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Addres</th>
    <th>Phone</th>
    <th>Gender</th>
    <th>Course</th>
    <th>Email</th>
    <th>Interest</th>
    
    </tr>
    ";

    while($row->fetcho_assoc())
    {
        echo"
         
      <tr>
       <td>".$row['id']."</td>
       <td>".$row['name']."</td>
       <td>".$row['address']."</td>
       <td>".$row['phone']."</td>
       <td>".$row['gender']."</td>
       <td>".$row['course']."</td>
       <td>".$row['email']."</td>
       <td>".$row['interest']."</td>
      </tr> ";
 }
echo"</table>";
}

$con->close();

?>