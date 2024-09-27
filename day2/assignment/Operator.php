<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>addition</title>
   <style>
    
   </style>
</head>
<body>
    <div class="container">
        <form action="display.php" method="post">
            <label for="num1">Number1:</label>
            <input type="text" id="num1" name="num1" placeholder="Enter first number" />
            <br><br>
            <label for="num2">Number2:</label>
            <input type="text" id="num2" name="num2" placeholder="Enter Second number" />
            <br><br> 
            <select name="Operator" id="operator">Operation:
            <option value="+">addition</option>
            <option value="-">subtraction</option>
            <option value="*">Multiplication</option>
            <option value="/">Division</option>
           </select>
             
            <input type="submit" value="result" name="btn1">&nbsp;&nbsp;&nbsp;&nbsp;
            
            <input type="reset" value="Clear" name="btn2">
        </form>
    </div>
</body>
</html>