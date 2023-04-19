<!DOCTYPE html>
<html>

<head>
	<title>Trang đăng nhập</title>
</head>

<body>

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
	?>

	<h2>Đăng nhập</h2>
	<form method="post" action="./login.php">
		<label for="username">Tên đăng nhập:</label><br>
		<input type="text" id="username" name="username"><br>
		<label for="password">Mật khẩu:</label><br>
		<input type="password" id="password" name="password"><br><br>
		<input type="submit" name="login" value="Đăng nhập">
	</form>

</body>

</html>