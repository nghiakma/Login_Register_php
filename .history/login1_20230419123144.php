<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>

</head>

<body>
    <form action="./login1.php" method="post">
        <h2>Login</h2>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
        <br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <br>
        <br>
        <input type="submit" name="login" value="Đăng nhập">
    </form>
    <?php
    include './database.php';
    global $conn; //tu khoa global cho phep truy cap bien toan cuc ben trong mot ham
    if (isset($_POST['login'])) { //kiem tra mot bien nao do da dc khoi tao trong bo nho may tinh hay chua
        $username = $_POST['username'];
        $password = $_POST['password'];

        // Kiểm tra thông tin đăng nhập của người dùng
        $result = mysqli_query($conn, "SELECT * from user where username='$username' and password='$password'");
        $row = mysqli_fetch_assoc($result);
        if ($row) {
            header("Location:index.html");
        } else {
            echo "Tên đăng nhập hoặc mật khẩu không đúng";
        }
    }
    ?>
    <a href="./regiter.php">Đăng ký</a>
</body>

</html>