<?php

if(file_exists("write.txt")){

if(rename("write.txt","abc.txt")){
echo"file rename sucessfully";
}
else{
    echo"asdfh";
}
    
}
else{
    echo"sorry";
}



?>