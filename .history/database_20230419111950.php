<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "account";
global $conn;

$conn = mysqli_connect($servername, $username, $password, $db);
if (!$conn) {
    die('Could not connect: ' . mysqli_error($conn));
}
mysqli_select_db($conn, $db);
