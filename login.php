<?php
$servername = "localhost";
$username = "lishanth487@gmail.com"; 
$password = "Lish@123"; 
$dbname = "login_system";   

$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    session_start();
    $_SESSION['username'] = $username;
    header('C:\xampp\htdocs\website\welcome.html');
    exit();
} else {
    echo "Invalid username or password.";
}


$conn->close();
?>
