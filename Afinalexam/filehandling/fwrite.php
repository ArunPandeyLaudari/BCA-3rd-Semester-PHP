<?php

if (file_exists("arun.txt")) {
    
$fp=fopen("arun.txt",'w') or die("File not created");
$data="asdfghjkl";
fwrite($fp,$data);
echo"File written";
fclose($fp);




} else {
    echo"File not written";
}













?>