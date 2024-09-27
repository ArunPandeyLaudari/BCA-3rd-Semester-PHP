<?php

if(file_exists("arun.txt") && file_exists("binisha.txt"))
{
 
   $data= file_get_contents("arun.txt");

   $fp=fopen("binisha.txt",'w');
    fwrite($fp,$data);
    echo" File copy sucess ";





}
else

{
    echo"file not exit";
}










?>