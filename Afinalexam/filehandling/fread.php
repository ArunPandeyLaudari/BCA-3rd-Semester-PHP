<?php
if (file_exists("arun.txt")) {

 
//      $data=   file_get_contents("arun.txt");
//    fread($data,$fp);
//    echo"read sucess";

   $fp=fopen("arun.txt",'r');
   $data=  fread($fp,filesize("arun.txt"));
   echo"$data";
   echo"read sucess";



} else {
    
}














?>