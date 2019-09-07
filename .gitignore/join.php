<?php
	// Kết nối database, lấy dữ liệu chung
	include('includes/general.php');
	// Nếu tồn tại $user
	if ($user)
	{
		header('Location: index.php'); // Di chuyển đến file index.php
	}

	// Khai báo các biến nhận dữ liệu
	$username = @mysqli_real_escape_string($cn, $_POST['username']);
	$password = @mysqli_real_escape_string($cn, $_POST['password']);

	if (($username=='thanhictu' && $password=='thanhcva')||($username=='thanhcva' && $password=='thanhictu'))
	{
		echo $show_alert.$success_alert.'Đăng nhập thành công.'; // Thông báo
		$_SESSION['username'] = $username; // Lưu session giá trị username
		echo '<script>window.location.reload();</script>'; // Tải lại trang
	}
	// Ngược lại
	else
	{
	echo $show_alert.'Tên đăng nhập hoặc mật khẩu không chính xác.'; // Thông báo
	}
?>