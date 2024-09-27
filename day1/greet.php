<!DOCTYPE html>
<html>
<head>
    <title>Greeting Page</title>
</head>
<body>

<h1>Greetings!</h1>

<?php
// Check if the 'name' parameter is set in the URL
if (isset($_POST['name'])) {
    // Retrieve the 'name' parameter value from the URL
    $name = $_POST['name'];
    // Display a personalized greeting
    echo "<p>Hello, $name! Welcome to our website.</p>";
} else {
    // If 'name' parameter is not provided in the URL
    echo "<p>Hello there! Please provide your name in the URL parameter.</p>";
}
?>

</body>
</html>
