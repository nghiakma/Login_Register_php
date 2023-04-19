<?php
// Kiểm tra xem người dùng đã nhấn nút Đăng nhập chưa
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Kiểm tra thông tin đăng nhập của người dùng
    if ($username == 'admin' && $password == '123456') {
        echo 'Đăng nhập thành công';
    } else {
        echo 'Đăng nhập thất bại';
    }
}
