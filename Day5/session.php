<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- session lai start garna method Sedssion_start(); -->
  <?php
  session_start();
  $_SESSION["Favcolor"]="Blue";
  $_SESSION["Favfruit"]="mango";

//   sesession delete garna man vaya

// unset($_SESSION["fav fruit"]);
// session_destroy();

  ?>
</body>
</html>