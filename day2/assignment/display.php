<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php


//  if(isset($_REQUEST["btn1"]))      {for all type ko lagi get and post;

   
   if(isset($_POST["btn1"])){
    // name ma vako value auni ho hai

    // parsing garna lai sabi klai interger  ma use intval
    $x=intval($_POST["num1"]);
    $y=intval($_POST["num2"]);
    $operator=$_POST["Operator"];
    switch($operator){
        case '+':
            echo"the sum of $x and $y is".$x+$y;
            break;
            case '-':
                echo"the sub of $x and $y is".$x-$y;
                break;
                case '*':
                    echo"the mul of $x and $y is".$x*$y;
                    break;
                    case '/':
                        if($y!=0){
                        echo"the div of $x and $y is".$x/$y;
                        }
                        else{
                            echo"we cant display the number that ios divisible by 0"
                        }
                        break;
                        default:
                        echo"invalid oprtator";
    }


    
   }
   else{
    echo"Sorry data not found <a href='additionform.php'>Go back</a>";
   }
   ?>
</body>
</html>