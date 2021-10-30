<?php
include('./config.php');

if (isset($_POST['dangki']))
{
	$ten_khach_hang = isset($_POST['name']) ? mysql_escape_string($_POST['name']) : '';
	$email = isset($_POST['email']) ? mysql_escape_string($_POST['email']) : '';
	$mat_khau = $_POST['password'];

// Kiểm tra tên người dùng hoặc email trong CSDL có trùng không
$sql = "
		SELECT * FROM tbl_khach_hang 
		WHERE email = '$email'
	";

$noi_dung_khach_hang= mysqli_query($ket_noi, $sql);

// Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
if (mysqli_num_rows($noi_dung_khach_hang) > 0)
{
	echo '<script language="javascript">alert("Bị trùng tên hoặc chưa nhập tên!"); window.location="index.php";</script>';

// Dừng chương trình
die ();
}
else {
$sql1 = "INSERT INTO tbl_khach_hang (ten_khach_hang, email, mat_khau) VALUES ('$ten_khach_hang', '$email', '$mat_khau')";

if (mysqli_query($ket_noi, $sql1)){
	echo '<script language="javascript">alert("Đăng kí thành công"); window.location="index.php"; </script>';
}
else {
	echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="index.php";</script>';
}
}
}
?>
