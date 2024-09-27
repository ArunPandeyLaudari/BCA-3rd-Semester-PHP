<html>
<head>
    <title>file handling example</title>
</head>
<body>
<?php

if(isset($_REQUEST["save"])){
$data = $_REQUEST["stdname"].",".$_REQUEST["stdroll"].",".$_REQUEST["Gender"].",".$_REQUEST["course"].",".$_REQUEST["stdphn"].",".$_REQUEST["stdmail"]."\n";




if(file_exists("student.txt"))
{
  $fp=fopen("student.txt",'a');
  fwrite($fp,$data);
  fclose($fp);
 echo("file is created and stored the student data");
}
else{
    echo "file not exists";
}

}
else{
    header("location:studentform.html");
}

?>
</body>
</html>