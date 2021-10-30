<?php

if (isset($_POST['dang_nhap'])) 
{
    // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
    include('./config.php');

    // 2. Viết câu lệnh truy vấn để kiểm tra xem Khách hàng có tồn tại trong BẢNG khách hàng?
    $email = $_POST["email"];
    $mat_khau = $_POST["password"];

    $sql = "
              SELECT * 
              FROM tbl_khach_hang
              WHERE email = '".$email."' AND mat_khau = '".$mat_khau."'
           ";

    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
    $xac_thuc_khach_hang = mysqli_query($ket_noi, $sql);

    // 4. Xử lý dữ liệu mà các bạn thu được
    $so_luong_ban_ghi = mysqli_num_rows($xac_thuc_khach_hang);  

    # TH1: Nếu số lượng bản ghi = 0 --> email, password không chính xác --> đẩu người dùng về trang đăng nhập
    # TH2: Nếu số lượng bản ghi = 1 --> email, password chính xác --> đẩu người dùng về trang quản trị hệ thống

    if ($so_luong_ban_ghi==0) {
        echo "
            <script type='text/javascript'>
                window.alert('Bạn chưa có tài khoản');
            </script>
        ";

        echo "
            <script type='text/javascript'>
                window.location.href='index.php';
            </script>
        ";
    } else {
        // Khởi tạo phiên làm việc cho người đăng nhập thành công
        session_start();
        $_SESSION['da_dang_nhap'] = 1;

        echo "
            <script type='text/javascript'>
                window.alert('Bạn đã đăng nhập thành công');
            </script>
        ";

        echo "
            <script type='text/javascript'>
                window.location.href='index.php';
            </script>
        ";
    }
}
?>
