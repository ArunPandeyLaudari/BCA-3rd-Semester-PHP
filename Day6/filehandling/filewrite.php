<html>
<head>
    <title>file handling example</title>
</head>
<body>
<?php
if(file_exists("test.txt"))
{
    // $fp = fopen("test.txt","w") or die("Error: opening file");
    // $data = "hello Arun Dai how are you this is filehandeling function test";
    // fwrite($fp,$data);
    // echo "file created successfully";
    // fclose($fp);

    // or
    $content="This is your daday";
    file_put_contents("test.txt",$content);
    echo("data stored successfully");

}
else{
    echo "file not exists";
}



?>
</body>
</html>