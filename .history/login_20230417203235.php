<!DOCTYPE html>
<html>

<head></head>

<body>
    <?php
    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];
        if ($username == 'admin' && $password == 'admin') {
            echo "Đăng nhập thành công";
        }
    }
    ?>
</body>

</html>