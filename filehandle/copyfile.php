<?php
if(file_exists("abc.txt") && file_exists("write.txt")){

    $fp=fopen("abc.txt",'r');
    $data=fread($fp,filesize("abc.txt"));
    $ff=fopen("write.txt",'w');
    fwrite($ff,$data);
    echo"file copied sucesffuly";
    fclose($ff);
    fclose($fp);

}
else{
    echo"sdfg";
}






?>