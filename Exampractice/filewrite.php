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
    // $fp=fopen("test.txt","w") or die("Error Occur:File doesnt exit");
    // $data="Hello My name is Binisha n his name is Arun";
    // fwrite($fp,$data);
    // echo"data inserted successfully";
    // fclose($fp);

    $contents="Hello EveryOne";
    file_put_contents("test.txt",$contents);
    echo"File inserted succesfully";
   
    

}
else{
    echo"File not exit";
}


?>

</body>
</html>