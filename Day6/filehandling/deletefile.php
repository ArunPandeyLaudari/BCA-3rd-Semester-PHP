<html>
<head>
    <title>file handling example</title>
</head>
<body>
<?php
if(file_exists("arun.txt"))
{
    if(unlink("arun.txt")){
    
    echo("file deleted successfully");
    }
    else{
        echo("file not deleted");
    }

}
else{
    echo "file not exists";
}



?>
</body>
</html>