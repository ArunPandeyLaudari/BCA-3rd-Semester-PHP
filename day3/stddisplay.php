<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_POST["btn1"]))
    {
        $name=($_POST["stdname"]);
        $age=($_POST["age"]);
        $Class=($_POST["Class"]);
        $Gender=($_POST["Gender"]);
        $Interest1=($_POST["Interest1"]);
        $Interest2=($_POST["Interest2"]);
        $Interest3=($_POST["Interest3"]);
        $Interest4=($_POST["Interest4"]);
        
    }
    echo" name=$name <br>Age= $age <br> class=$Class <br> Gender= $Gender<br>Interest= $Interest1,$Interest2,$Interest3,$Interest4 ";
    ?>
</body>
</html>