<?php
include "database.php";
global $con;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="register.php" method="post">
        <h2>Register</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <label for="confirm_password">Confirm Password:</label>
        <input type="password" name="confirm_password" id="confirm_password">
        <br>
        <br>
        <button type="submit" name="register">Register</button>
    </form>
    <?php
    ?>
</body>

</html>