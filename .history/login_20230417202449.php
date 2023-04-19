<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username = "admin" && $password = "admin") {
            echo "Đăng nhập thành công";
        }
    }
    ?>
</body>

</html>