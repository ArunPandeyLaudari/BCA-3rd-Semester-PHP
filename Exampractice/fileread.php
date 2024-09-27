<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
if(file_exists("test.txt")){

//  readfile("test.txt");

$lines=file("test.txt");
foreach($lines as $line){
  echo"$line";
}


}
else{
echo"file not found";
}
?>


</body>
</html>