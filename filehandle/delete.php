<?php
 if(file_exists("write.txt")){

   if(  unlink("write.txt")){
    echo"file deleted";
   }
    else{
   echo"file  not deleted";
    }


 }
 else{
    echo"file not exits";
 }


?>