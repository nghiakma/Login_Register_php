<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "account";
global $conn;

$conn = mysqli_connect($servername, $username, $password, $db);
if (mysqli_connect_errno()) {
    echo "Error connecting to server: ";
    exit();
}

mysqli_select_db($conn, $db);
