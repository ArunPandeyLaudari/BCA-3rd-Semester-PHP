<html>
<head>
    <title>file handling example</title>
</head>
<body>
<?php
if(file_exists("test.txt"))
{
    if(rename("test.txt","arun.txt")){
    
    echo("file rename successfully");
    }
    else{
        echo("file  not rename ");
    }

}
else{
    echo "file not exists";
}



?>
</body>
</html>