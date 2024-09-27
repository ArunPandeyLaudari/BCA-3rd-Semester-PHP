<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

          if(file_exists("test.txt"))
          {
            // sabai vanda sailo tarika
            // readfile("test.txt");
            //  or
            // $contant =file_get_contents("test.txt"); or die("Error:Opening file");
            // echo($contant);

            // or

            // $fp =fopen("test.txt","r")or die("Error :Opening file");
            // $content= fread($fp, filesize("test.txt"));
            // echo $content;
            // fclose ($fp);

            // or
            $lines =file("test.txt") or die("error on openingig");
            foreach($lines as $line){
                 echo($line);
            }
          }
          else{
            echo "file not available";
          }    
          ?>
</body>
</html>