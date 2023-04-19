<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form action="regiter.php" method="post">
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
    $username = $email = $password = $confirmpass = "";
    $nameErr = $emailErr = $passwordErr = $confirm_passwordErr = "";

    if (isset($_POST['register'])) { //kiem tra mot bien nao do da dc khoi tao trong bo nho may tinh hay chua
        if (empty($_POST["username"])) {
            $nameErr = "Name is required";
        } else {
            $username = test_input($_POST["username"]);
            if (!preg_match("/^[a-zA-Z-' ]*$/", $username)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["email"])) {
            $emailErr = "Email is required";
        } else {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailErr = "Invalid email format";
            }
        }
        if (empty($_POST["password"])) {
            $password = "Password is required";
        } else {
            $password = test_input($_POST["password"]);
            if (!preg_match("/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/", $password)) {
                $nameErr = "Only letters and white space allowed";
            }
        }
        if (empty($_POST["confirm_password"])) {
            $confirmpass = "Confirm Password is Required";
        } else {
            $confirmpass = test_input($_POST["confirm_password"]);
            if ($password != $confirmpass) {
                $confirm_passwordErr = "Error";
            }
        }
        if ($username != "" && $password != "" && $email != "" && $confirmpass != "") {
            $servername = "localhost";
            $username1 = "root";
            $password1 = "";
            $db = "account";


            $conn = mysqli_connect($servername, $username1, $password1, $db);
            if (mysqli_connect_errno()) {
                echo "Error connecting to server: ";
                exit();
            }
            $stmt = $conn->prepare("INSERT INTO user(username,password,email,confirmpass) VALUES(?,?,?,?)");
            $stmt->bind_param("ssss", $username, $password, $email, $confirmpass);
            $stmt->execute();
            $stmt->close();
            $conn->close();
        } else {
        }
    }
    function test_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    ?>
</body>

</html>