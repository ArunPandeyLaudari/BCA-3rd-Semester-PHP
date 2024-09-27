<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// request garam vney 2 tai bata auxe data post and get bith
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $name = $_POST['name'];

    // Check if input is numeric
    if (!is_numeric($num1) || !is_numeric($num2)) {
        echo "Please enter valid numbers.";
    } else {
        // Perform the sum
        $sum = $num1 + $num2;
        echo "Hello, $name! The sum of $num1 and $num2 is: $sum";
    }
}
?>

</body>
</html>