<?php
if (file_exists("write.txt")) {





  // $fp=fopen("write.txt",'w') or die("Erro ");
  $data = "My handsome husband Arun";
  // fwrite($fp,$data);
  // fclose($fp);



  file_put_contents("write.txt", $data);


  echo "sucessfully";
} else {
  echo "file not founds";
}
