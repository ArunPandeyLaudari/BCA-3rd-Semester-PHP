<?php

if (file_exists("write.txt")) {

    //     $fp=fopen("write.txt",'r');
    //    $data=fread($fp,filesize("write.txt"));
    //    echo"$data";

    // readfile("write.txt");


    $data = file_get_contents("write.txt");
    echo "$data";
} else {
    echo "file not exists";
}
