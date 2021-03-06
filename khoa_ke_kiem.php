<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="css/product-item.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">    
</head>

<body>
    <!-- code cho nut like share facebook  -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous"
        src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>

    <!-- header -->
    <nav class="navbar navbar-expand-md bg-white navbar-light">
        <div class="container">
            <!-- logo  -->
            <a class="navbar-brand" href="index.php" style="color: #CF111A;"><b>HVNH</b>.edu.vn</a>

            <!-- navbar-toggler  -->
            <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse"
                data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="collapsibleNavId">
                <!-- form tìm kiếm  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            placeholder="Nhập sách cần tìm kiếm...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ô đăng nhập đăng ký giỏ hàng trên header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">Tài
                                khoản</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                                data-target="#formdangky">Đăng ký</a>
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                                data-target="#formdangnhap">Đăng nhập</a>
                        </div>
                    </div>
                    <li class="nav-item giohang">
                        <a href="gio-hang.php" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">0</div>
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="gio-hang.html"
                            style="display:inline-block">Giỏ
                            Hàng</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    

       <!-- form dang ky khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangky" data-backdrop="static" tabindex="-1" aria-labelledby="dangky_tieude"
        aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="xu_ly_dang_ki.php" id="form-signup" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="text" class="form-control" placeholder="Nhập họ và tên" name="name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Nhập mật khẩu" name="password"
                                required>
                        </div>
                        <div class="form-label-group mb-4">
                            <input type="password" class="form-control" placeholder="Nhập lại mật khẩu" name="confirm_password"
                                required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit" name="dangki"
                            style="background: #F5A623">Đăng ký</button>
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">Bằng việc đăng ký, bạn đã đồng ý với Nhà sách HVNH về</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">Điều khoản dịch
                                vụ & Chính sách bảo mật</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- form dang nhap khi click vao button tren header-->
    <div class="modal fade mt-5" id="formdangnhap" data-backdrop="static" tabindex="-1"
        aria-labelledby="dangnhap_tieude" aria-hidden="true">
        <div class="modal-dialog ">
            <div class="modal-content">
                <div class="modal-header">
                    <ul class="tabs d-flex justify-content-around list-unstyled mb-0">
                        <li class="tab tab-dangnhap text-center">
                            <a class=" text-decoration-none">Đăng nhập</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">Đăng ký</a>
                            <hr>
                        </li>
                    </ul>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="xu_ly_dang_nhap.php" id="form-signin" class="form-signin mt-2">
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nhập địa chỉ email" name="email"
                                required autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" required>
                        </div>
                        
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit" name="dang_nhap" 
                            style="background: #F5A623">Đăng nhập</button>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- thanh "danh muc sach" đã được ẩn bên trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
                        <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            <li> <a href="sach-kinh-te.html">Khoa Lý luận chính trị</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Lý luận chính trị</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Kinh Tế - Chính Trị</a></li>
                                        <li><a href="#">Sách Khởi Nghiệp</a></li>
                                        <li><a href="#">Sách Tài Chính, Kế Toán</a></li>
                                        <li><a href="#">Sách Quản Trị Nhân Sự</a></li>
                                        <li><a href="#">Sách Kỹ Năng Làm Việc</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nhân Vật - Bài Học Kinh Doanh</a></li>
                                        <li><a href="#">Sách Quản Trị - Lãnh Đạo</a></li>
                                        <li><a href="#">Sách Kinh Tế Học</a></li>
                                        <li><a href="#">Sách Chứng Khoán - Bất Động Sản - Đầu Tư</a></li>
                                        <li><a href="#">Sách Marketing - Bán Hàng</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Khoa Ngân hàng</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Ngân hàng</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Sách Nghệ Thuật Sống</a></li>
                                        <li><a href="#">Sách Tâm Lý</a></li>
                                        <li><a href="#">Sách Hướng Nghiệp</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Sách Nghệ Thuật Sống Đẹp</a></li>
                                        <li><a href="#">Sách Tư Duy </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="khoa_luat_kinh_te.php">Khoa Luật kinh tế</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="khoa_luat_kinh_te.php" class="header text-uppercase">Khoa Luật kinh tế</a></li>
                                    <div class="content trai">
                                        <li><a href="#">TLHT Pháp luật đại cương</a></li>
                                        <li><a href="#">Hệ thống văn bản QPPL - Môn học PLDC</a></li>
                                        <li><a href="#">Hệ thống văn bản QPPL - Môn PL ngân hàng</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Tài liệu môn học Luật kinh tế</a></li>
                                        <li><a href="#">TLHT Nhà nước và pháp luật đại cương</a></li>
                                        <li><a href="#">TLHT Pháp luật kinh tế</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="khoa_ke_kiem.php">Khoa Kế toán - Kiểm toán</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="khoa_ke_kiem.php" class="header text-uppercase">Khoa Kế toán - Kiểm toán</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Kế toán tài chính</a></li>
                                        <li><a href="#">Kế toán quản trị</a></li>
                                        <li><a href="#">Kiểm toán</a></li>
                                        <li><a href="#">Lý thuyết kế toán</a></li>
                                        <li><a href="#">Thống kê doanh nghiệp</a></li>
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">Khoa Hệ thống thông tin quản lý</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Hệ thống thông tin quản lý</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">Mẫu Giáo</a></li>
                                        <li><a href="#">Thiếu Niên</a></li>
                                        <li><a href="#">Kiến Thức - Bách Khoa</a></li>
                                        <li><a href="#">Truyện Cổ Tích</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nhi Đồng</a></li>
                                        <li><a href="#">Văn Học Thiếu Nhi</a></li>
                                        <li><a href="#">Kỹ Năng Sống</a></li>
                                        <li><a href="#">Truyện Tranh</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Khoa Tài Chính</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Tài Chính</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Giáo dục</a></li>
                                        <li><a href="#">Thai Giáo</a></li>
                                        <li><a href="#">Sách Dinh Dưỡng - Chăm Sóc Trẻ</a></li>
                                        <li><a href="#">Ẩm Thực - Nấu Ăn</a></li>
                                        <li><a href="#">Sách Tham Khảo</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Giới Tính</a></li>
                                        <li><a href="#">Sách Làm Cha Mẹ</a></li>
                                        <li><a href="#">Kiến Thức - Kỹ Năng Cho Trẻ</a></li>
                                        <li><a href="#">Ngoại Ngữ - Từ Điển</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Bộ môn Toán</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Bộ môn Toán</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Lịch Sử Việt Nam</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Lịch Sử Thế Giới</a></li>
                                    </div>
                                </ul>
                            </li>
                           
                            <li><a href="#">Khoa Ngôn ngữ Anh</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Ngôn ngữ Anh</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Triết Học Phương Tây</a></li>
                                        <li><a href="#">Khoa Học Cơ Bản</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Minh Tiết Phương Đông</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Khoa Quản trị Kinh Doanh</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Quản trị Kinh Doanh</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Chăm Sóc Sức Khỏe</a></li>
                                        <li><a href="#">Y Học</a></li>
                                        <li><a href="#">Thiền - Yoga</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Thực Dưỡng</a></li>
                                        <li><a href="#">Đông Y - Cổ Truyền</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Khoa Kinh tế</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Kinh tế</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Chăm Sóc Sức Khỏe</a></li>
                                        <li><a href="#">Y Học</a></li>
                                        <li><a href="#">Thiền - Yoga</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Thực Dưỡng</a></li>
                                        <li><a href="#">Đông Y - Cổ Truyền</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Khoa Kinh doanh Quốc tế</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Kinh doanh Quốc tế</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Chăm Sóc Sức Khỏe</a></li>
                                        <li><a href="#">Y Học</a></li>
                                        <li><a href="#">Thiền - Yoga</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Thực Dưỡng</a></li>
                                        <li><a href="#">Đông Y - Cổ Truyền</a></li>
                                    </div>
                                </ul>
                            </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 ml-auto contact d-none d-md-block">
                    <div class="benphai float-right">
                        <div class="hotline">
                            <i class="fa fa-phone"></i>
                            <span>Hotline:<b>1900 1999</b> </span>
                        </div>
                        <i class="fas fa-comments-dollar"></i>
                        <a href="#">Hỗ trợ trực tuyến </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Trang chủ</a></li>
                <li class="breadcrumb-item active"><a href="khoa_luat_kinh_te.php">Khoa Kế toán - Kiểm toán</a></li>
            </ol>
        </div>
    </section>

    <!-- ảnh banner  -->
    <section class="banner">
        <div class="container">
            <a href="khoa_ke_kiem.php"><img src="images/khoa-ke-kiem.png" alt="khoa-ke-kiem"
                    class="img-fluid"></a>
        </div>
    </section>

    <!-- thể loại sách: kinh tế chính trị nhân vật bài học kinh doanh ( từng ô vuông) -->
    <section class="page-content my-3">
        <div class="container">
            <div>
                <h1 class="header text-uppercase">Khoa Kế toán - Kiểm toán</h1>
            </div>
            <div class="the-loai-sach">
                <ul class="list-unstyled d-flex">

       <?php 
            // 1. Load file cấu hình để kết nối đến máy chủ CSDL, CSDL
            include('./config.php');

            // 2. Viết câu lệnh truy vấn để lấy ra được DỮ LIỆU MONG MUỐN (TIN TỨC đã lưu trong CSDL)
            $sql = "
                      SELECT tbl_san_pham.ten_san_pham,tbl_san_pham.anh
                      FROM tbl_san_pham INNER JOIN tbl_khoa ON tbl_san_pham.khoa_id=tbl_khoa.khoa_id
                      WHERE  ten_khoa = N'Khoa Kế toán - Kiểm toán'
                    ";

            // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
            $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

            // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
            $i=0;
            while ($row = mysqli_fetch_array($noi_dung_san_pham)) 
            {
                $i++;
        ;?>
                 
                <li>
                        <a href="#" class="danh-muc text-decoration-none">
                            <div class="img text-center">
                            <img src="<?php echo $row['anh'] ? 'images/'.$row['anh'] : 'images/blog/..' ;?>" alt="anh">
                            </div>
                            <div class="ten"><?php echo $row["ten_san_pham"] ;?>
                            </div>
                        </a>
                    </li>
        <?php      
        }                              
            // 5. Đóng kết nối sau khi sử dụng xong
            mysqli_close($ket_noi); 
        ;?> 
                    
                </ul>
            </div>
        </div>
    </section>

    <!-- khối sản phẩm  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header của khối sản phẩm : tag(tác giả), bộ lọc và sắp xếp  -->
                <div class="header-khoi-sp d-flex">
                    <div class="sort d-flex ml-auto">
                        <div class="hien-thi">
                            <label for="hienthi-select" class="label-select">Hiển thị</label>
                            <select class="hienthi-select">
                                <option value="30">30</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">Sắp xếp</label>
                            <select class="sapxep-select">
                                <option value="moinhat">Mới nhất</option>
                                <option value="thap-cao">Giá: Thấp - Cao</option>
                                <option value="cao-thap">Giá: Cao - Thấp</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- các sản phẩm  -->     
                <div >
                    <div class="row">
                     <?php 
                    
                    include('./config.php');

                    
                    $sql = "
                              SELECT * 
                              FROM tbl_san_pham inner join tbl_khoa on tbl_san_pham.khoa_id=tbl_khoa.khoa_id
                              WHERE ten_khoa=N'Khoa Kế toán - Kiểm toán'
                              
                              ";

                    // 3. Thực thi câu lệnh truy vấn (mục đích trả về dữ liệu các bạn cần)
                    $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

                    // 4. Hiển thị ra dữ liệu mà các bạn vừa lấy được
                    while ($row = mysqli_fetch_array($noi_dung_san_pham)) 
                    {
                    ;?>
                            <div class="col-lg-3 col-md-4 col-xs-6 item DeanGraziosi">
                                <div class="card ">
                                    <a href="chi_tiet_sp.php" class="motsanpham"
                                        style="text-decoration: none; color: black;" data-toggle="tooltip"
                                        data-placement="bottom" title="">
                                        <img class="card-img-top anh" src="<?php echo $row['anh'] ? 'images/'.$row['anh'] : 'images/blog/..';?>"
                                            alt="">
                                        <div class="card-body noidungsp mt-3">
                                            <h6 class="card-title ten"><?php echo $row['ten_san_pham'];?></h6>
                                            <div class="tacgia", style="color: #0066CC">Tác giả: <?php echo $row['tac_gia'];?></div>
                                            <div class="nxb", style="color:#0066CC">NXB: <?php echo $row['nha_xuat_ban'];?></div>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="gia", style="color: red">Giá: <?php echo $row['gia'];?>đ</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nhận xét</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <?php 
                    }

                    // 5. Đóng kết nối sau khi sử dụng xong
                    mysqli_close($ket_noi);
                ;?>
                   
                         
                            
                         
                    </div>
                </div>

                <!-- pagination bar -->
                <div class="pagination-bar my-3">
                    <div class="row">
                        <div class="col-12">
                            <nav>
                                <ul class="pagination justify-content-center">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                   
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <!--het khoi san pham-->
            </div>
            <!--het div noidung-->
        </div>
        <!--het container-->
    </section>
    <!--het _1khoi-->

    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-books.png" alt="icon-books">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">GIÁO TRÌNH MỚI NHẤT</h6>
                            <p class="detail">bởi Học Viện Ngân Hàng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h6>
                            <p class="detail">Tại trụ sở chính HVNH</p>
                            <p class="detail">Từ 150.000đ ở Hà Nội</p>
                            <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h6>
                            <p class="detail">Tặng Bookmark</p>
                            <p class="detail">Bao sách miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h6>
                            <p class="detail">Hàng bị lỗi được đổi trả nhanh chóng</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- footer  -->
    <footer>
        <div class="container py-4">
            <div class="row">
          
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h6 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h6>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h6>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h6>
                        <img src="images/visa-payment.jpg" alt="visa-payment">
                        <img src="images/master-card-payment.jpg" alt="master-card-payment">
                        <img src="images/jcb-payment.jpg" alt="jcb-payment">
                        <img src="images/atm-payment.jpg" alt="atm-payment">
                        <img src="images/cod-payment.jpg" alt="cod-payment">
                        <img src="images/payoo-payment.jpg" alt="payoo-payment">
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- nut cuon len dau trang -->
    <div class="fixed-bottom">
        <div class="btn btn-warning float-right rounded-circle nutcuonlen" id="backtotop" href="#"
            style="background:#CF111A;"><i class="fa fa-chevron-up text-white"></i></div>
    </div>


</body>
</html>