<?php
session_start();

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $hostname = "localhost:3306";
    $dbname = "tu";
    $dbusername = "root";
    $dbpassword = "";

    $conn = new mysqli($hostname, $dbusername, $dbpassword, $dbname);

    if ($conn->connect_errno) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Unsafe query
    $sql = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $_SESSION['username'] = $username;
        header("Location: welcome.php");
        exit();
    } else {
        echo "Invalid username or password.";
    }

    $conn->close();
} else {
    header("Location: login.php");
    exit();
}
?>
