<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Mua giáo trình online HVNH</title>
    <meta name="description"
        content="Mua sách online hay, giá tốt nhất, combo sách hot bán chạy, giảm giá cực khủng cùng với những ưu đãi như miễn phí giao hàng, quà tặng miễn phí, đổi trả nhanh chóng. Đa dạng sản phẩm, đáp ứng mọi nhu cầu.">
    <meta name="keywords" content="nhà sách online, mua sách hay, sách hot, sách bán chạy, sách giảm giá nhiều">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/home.css">
    <script type="text/javascript" src="js/main.js"></script>
    <link rel="stylesheet" href="fontawesome_free_5.13.0/css/all.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="slick/slick.css" />
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script type="text/javascript"
        src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <link rel="canonical" href="http://hvnh.edu.vn/">
    <meta name="google-site-verification" content="urDZLDaX8wQZ_-x8ztGIyHqwUQh2KRHvH9FhfoGtiEw" />
    <link rel="apple-touch-icon" sizes="180x180" href="favicon_io/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon_io/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon_io/favicon-16x16.png">
    <link rel="manifest" href="favicon_io/site.webmanifest">
    <style>img[alt="www.000webhost.com"]{display: none;}</style>
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
                        <a href="gio-hang.html" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">0</div>
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="gio-hang.php"
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
    <!-- thanh tieu de "danh muc sach" + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-md-3">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh mục sách</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
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
    <!-- noi dung danh muc sach(categories) + banner slider -->
    <section class="header bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-3" style="margin-right: -15px;">
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
                <!-- banner slider  -->
                <div class="col-md-9 px-0">
                    <div id="carouselId" class="carousel slide" data-ride="carousel">
                        <ol class="nutcarousel carousel-indicators rounded-circle">
                            <li data-target="#carouselId" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselId" data-slide-to="1"></li>
                            <li data-target="#carouselId" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <a href="#"><img src="images/banner-sach-moi.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="First slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/banner-beethoven.jpg" class="img-fluid"
                                        style="height: 386px;" width="900px" alt="Second slide"></a>
                            </div>
                            <div class="carousel-item">
                                <a href="#"><img src="images/neu-toi-biet-duoc-khi-20-full-banner.jpg" class="img-fluid"
                                        style="height: 386px;" alt="Third slide"></a>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselId" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselId" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- khoi sach moi  -->
    <section class="_1khoi sachmoi bg-white">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h1 class="header text-uppercase" style="font-weight: 400;">SÁCH MỚI TUYỂN CHỌN</h1>
                        <a href="sach-moi-tuyen-chon.html" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham" style="padding-bottom: 2rem;">
                    <!-- 1 san pham -->
                    <div class="card">
                        <a href="Lap-trinh-ke-hoach-kinh-doanh-hieu-qua.html" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Lập Kế Hoạch Kinh Doanh Hiệu Quả">
                            <img class="card-img-top anh" src="images/lap-ke-hoach-kinh-doanh-hieu-qua.jpg"
                                alt="lap-ke-hoach-kinh-doanh-hieu-qua">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Lập Kế Hoạch Kinh Doanh Hiệu Quả</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="Ma-bun-luu-manh-va-nhung-cau-chuyen-khac-cua-nguyen-tri.html" class="motsanpham"
                            style="text-decoration: none; color: black;" data-toggle="tooltip" data-placement="bottom"
                            title="Ma Bùn Lưu Manh Và Những Câu Chuyện Khác Của Nguyễn
                        Trí">
                            <img class="card-img-top anh" src="images/ma-bun-luu-manh.jpg" alt="ma-bun-luu-manh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Ma Bùn Lưu Manh Và Những Câu Chuyện Khác Của Nguyễn
                                    Trí</h3>
                                <small class="tacgia text-muted">Nguyễn Trí</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">68.000 ₫</div>
                                    <div class="giacu text-muted">85.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Bank 4.0 - Giao dịch mọi nơi, không chỉ là ngân hàng">
                            <img class="card-img-top anh" src="images/bank-4.0.jpg" alt="bank-4.0">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Bank 4.0 - Giao dịch mọi nơi, không chỉ là ngân hàng
                                </h3>
                                <small class="tacgia text-muted">Brett King</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Bộ Sách 500 Câu Chuyện Đạo Đức - Những Câu Chuyện
                        Tình Thân (Bộ 8 Cuốn)">
                            <img class="card-img-top anh" src="images/bo-sach-500-cau-chuyen-dao-duc.jpg"
                                alt="bo-sach-500-cau-chuyen-dao-duc">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Bộ Sách 500 Câu Chuyện Đạo Đức - Những Câu Chuyện
                                    Tình Thân (Bộ 8 Cuốn)</h3>
                                <small class="tacgia text-muted">Nguyễn Hạnh - Trần Thị Thanh Nguyên</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh">
                            <img class="card-img-top anh" src="images/ung-thu-hoang-de-cua-bach-benh.jpg"
                                alt="ung-thu-hoang-de-cua-bach-benh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Lịch Sử Ung Thư - Hoàng Đế Của Bách Bệnh</h3>
                                <small class="tacgia text-muted">Siddhartha Mukherjee</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu">
                            <img class="card-img-top anh" src="images/troi-dem-huyen-dieu.jpg"
                                alt="troi-dem-huyen-dieu">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Cuốn Sách Khám Phá: Trời Đêm Huyền Diệu</h3>
                                <small class="tacgia text-muted">Disney Learning</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Bộ Sách Những Câu Chuyện Cho Con Thành Người Tử Tế (Bộ 5 Cuốn)">
                            <img class="card-img-top anh"
                                src="images/bo-sach-nhung-cau-chuyen-cho-con-thanh-nguoi-tu-te.jpg"
                                alt="bo-sach-nhung-cau-chuyen-cho-con-thanh-nguoi-tu-te">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Bộ Sách Những Câu Chuyện Cho Con Thành Người Tử Tế (Bộ 5
                                    Cuốn)</h3>
                                <small class="tacgia text-muted">Nhiều Tác Giả</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Lịch Sử Thế Giới">
                            <img class="card-img-top anh" src="images/lich-su-the-gioi.jpg" alt="lich-su-the-gioi">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Lịch Sử Thế Giới</h3>
                                <small class="tacgia text-muted">Nam Phong tùng thư - Phạm Quỳnh chủ nhiệm</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- khoi sach combo hot  -->
    <section class="_1khoi combohot mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header -->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">COMBO SÁCH HOT - GIẢM ĐẾN 25%</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn">
                            <img class="card-img-top anh" src="images/combo-chuyen-nghe-chuyen-doi.jpg"
                                alt="combo-chuyen-nghe-chuyen-doi">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Chuyện Nghề Và Chuyện Đời - Bộ 4 Cuốn</h3>
                                <small class="tacgia text-muted">Nguyễn Hữu Long</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt">
                            <img class="card-img-top anh" src="images/combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat.jpg"
                                alt="combo-me-con-su-tu-bo-tat-ngan-tay-ngan-mat">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Mẹ Con Sư Tử - Bồ Tát Ngàn Tay Ngàn Mắt</h3>
                                <small class="tacgia text-muted">Thích Nhất Hạnh</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành
                            Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong">
                            <img class="card-img-top anh" src="images/combo-hanh-phuc-sang-tao.jpg"
                                alt="combo-hanh-phuc-sang-tao">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Osho: Hạnh Phúc Tại Tâm, Can Đảm Biến Thách Thức Thành
                                    Sức Mạnh & Sáng Tạo Bừng Cháy Sức Mạnh Bên Trong
                                </h3>
                                <small class="tacgia text-muted">Gosho Aoyama, Mutsuki Watanabe, Takahisa Taira</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với Đời Mình?">
                            <img class="card-img-top anh" src="images/combo-giao-duc-va-y-nghia-cuoc-song.jpg"
                                alt="combo-giao-duc-va-y-nghia-cuoc-song">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Giáo Dục Và Ý Nghĩa Cuộc Sống Và Bạn Đang Nghịch Gì Với
                                    Đời Mình?</h3>
                                <small class="tacgia text-muted"> J.Krishnamurti</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Combo Dinh Dưỡng Xanh - Thần dược xanh">
                            <img class="card-img-top anh" src="images/combo-dinh-duong-than-duoc-xanh.jpg"
                                alt="combo-dinh-duong-than-duoc-xanh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Dinh Dưỡng Xanh - Thần dược xanh</h3>
                                <small class="tacgia text-muted">Ryu Seung-SunVictoria Boutenko</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ">
                            <img class="card-img-top anh" src="images/combo-an-xanh-song-lanh.jpg"
                                alt="combo-an-xanh-song-lanh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Ăn Xanh Để Khỏe - Sống Lành Để Trẻ</h3>
                                <small class="tacgia text-muted">Norman W. Walker</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom"
                            title="Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho Thế Kỷ 21">
                            <img class="card-img-top anh" src="images/combo-luoc-su-loai-nguoi.jpg"
                                alt="combo-luoc-su-loai-nguoi">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Combo Lược Sử Loài Người - Lược Sử Tương Lai - 21 Bài Học Cho
                                    Thế Kỷ 21</h3>
                                <small class="tacgia text-muted">Yuval Noah Harari</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)">
                            <img class="card-img-top anh" src="images/combo-phong-cach-song.jpg"
                                alt="combo-phong-cach-song">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Bộ Sách Phong Cách Sống (Bộ 5 Cuốn)</h3>
                                <small class="tacgia text-muted">Marie Tourell Soderberg, Joanna Nylund, Yukari
                                    Mitsuhashi, Margareta Magnusson, Linnea Dunne</small>
                                <div class="gia d-flex align-items-baseline">
                                    <div class="giamoi">111.200 ₫</div>
                                    <div class="giacu text-muted">139.000 ₫</div>
                                    <div class="sale">-20%</div>
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- khoi sach sap phathanh  -->
    <section class="_1khoi sapphathanh mt-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-light">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH SẮP PHÁT HÀNH / ĐẶT TRƯỚC</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                </div>
                <div class="khoisanpham">
                    <!-- 1 san pham -->
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Ngoại Giao Của Chính Quyền Sài Gòn">
                            <img class="card-img-top anh" src="images/ngoai-giao-cua-chinh-quyen-sai-gon.jpg"
                                alt="ngoai-giao-cua-chinh-quyen-sai-gon">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Ngoại Giao Của Chính Quyền Sài Gòn</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trên Đất Hoa">
                            <img class="card-img-top anh" src="images/duong-may-tren-dat-hoa.jpg"
                                alt="duong-may-tren-dat-hoa">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Đường Mây Trên Đất Hoa</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Muôn Kiếp Nhân Sinh">
                            <img class="card-img-top anh" src="images/muon-kiep-nhan-sinh.jpg"
                                alt="muon-kiep-nhan-sinh">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Muôn Kiếp Nhân Sinh</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="card">
                        <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                            data-toggle="tooltip" data-placement="bottom" title="Đường Mây Trong Cõi Mộng">
                            <img class="card-img-top anh" src="images/duong-may-trong-coi-mong.jpg"
                                alt="duong-may-trong-coi-mong.jpg">
                            <div class="card-body noidungsp mt-3">
                                <h3 class="card-title ten">Đường Mây Trong Cõi Mộng</h3>
                                <small class="tacgia text-muted">Brian Finch</small>
                                <div class="gia d-flex align-items-baseline">
                                </div>
                                <div class="danhgia">
                                    <ul class="d-flex" style="list-style: none;">
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li class="active"><i class="fa fa-star"></i></li>
                                        <li><i class="fa fa-star"></i></li>
                                        <li><span class="text-muted">0 nhận xét</span></li>
                                    </ul>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- div _1khoi -- khoi sachnendoc -->
    <section class="_1khoi sachnendoc bg-white mt-4">
        <div class="container">
            <div class="noidung" style=" width: 100%;">
                <div class="row">
                    <!--header-->
                    <div class="col-12 d-flex justify-content-between align-items-center pb-2 bg-transparent pt-4">
                        <h2 class="header text-uppercase" style="font-weight: 400;">SÁCH HAY NÊN ĐỌC</h2>
                        <a href="#" class="btn btn-warning btn-sm text-white">Xem tất cả</a>
                    </div>
                    <!-- 1 san pham -->
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Từng bước chân nở hoa: Khi câu kinh bước tới">
                                <img class="card-img-top anh" src="images/tung-buoc-chan-no-hoa.jpg"
                                    alt="tung-buoc-chan-no-hoa">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Từng bước chân nở hoa: Khi câu kinh bước tới</h3>
                                    <small class="thoigian text-muted">03/04/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom" title="Cảm ơn vì đã được thương">
                                <img class="card-img-top anh" src="images/cam-on-vi-da-duoc-thuong.jpg"
                                    alt="cam-on-vi-da-duoc-thuong">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Cảm ơn vì đã được thương</h3>
                                    <small class="thoigian text-muted">31/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Hào quang của vua Gia Long trong mắt Michel Gaultier">
                                <img class="card-img-top anh" src="images/vua-gia-long.jpg" alt="vua-gia-long">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Hào quang của vua Gia Long trong mắt Michel Gaultier</h3>
                                    <small class="thoigian text-muted">21/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Suối nguồn” và cái tôi hiện sinh trong từng cá thể">
                                <img class="card-img-top anh" src="images/suoi-nguon-va-cai-toi-trong-tung-ca-the.jpg"
                                    alt="suoi-nguon-va-cai-toi-trong-tung-ca-the">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">"Suối nguồn” và cái tôi hiện sinh trong từng cá thể</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg col-sm-4">
                        <div class="card cuoicung">
                            <a href="#" class="motsanpham" style="text-decoration: none; color: black;"
                                data-toggle="tooltip" data-placement="bottom"
                                title="Đại dịch trên những con đường tơ lụa">
                                <img class="card-img-top anh" src="images/dai-dich-tren-con-duong-to-lua.jpg"
                                    alt="dai-dich-tren-con-duong-to-lua">
                                <div class="card-body noidungsp mt-3">
                                    <h3 class="card-title ten">Đại dịch trên những con đường tơ lụa</h3>
                                    <small class="thoigian text-muted">16/03/2020</small>
                                    <div><a class="detail" href="#">Xem chi tiết</a></div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </section>
    <!-- thanh cac dich vu :mien phi giao hang, qua tang mien phi ........ -->
    <section class="abovefooter text-white" style="background-color: #CF111A;">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-books.png" alt="icon-books">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">HƠN 14.000 TỰA SÁCH HAY</h3>
                            <p class="detail">Tuyển chọn bởi DealBooks</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">MIỄN PHÍ GIAO HÀNG</h3>
                            <p class="detail">Từ 150.000đ ở TP.HCM</p>
                            <p class="detail">Từ 300.000đ ở tỉnh thành khác</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">QUÀ TẶNG MIỄN PHÍ</h3>
                            <p class="detail">Tặng Bookmark</p>
                            <p class="detail">Bao sách miễn phí</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h3 class="tieude font-weight-bold">ĐỔI TRẢ NHANH CHÓNG</h3>
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
                    <div class="gioithieu">
                        <h3 class="header text-uppercase font-weight-bold">Về DealBook</h3>
                        <a href="#">Giới thiệu về DealBook</a>
                        <a href="#">Tuyển dụng</a>
                        <div class="fb-like" data-href="https://www.facebook.com/DealBook-110745443947730/"
                            data-width="300px" data-layout="button" data-action="like" data-size="small"
                            data-share="true"></div>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="hotrokh">
                        <h3 class="header text-uppercase font-weight-bold">HỖ TRỢ KHÁCH HÀNG</h3>
                        <a href="#">Hướng dẫn đặt hàng</a>
                        <a href="#">Phương thức thanh toán</a>
                        <a href="#">Phương thức vận chuyển</a>
                        <a href="#">Chính sách đổi trả</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h3 class="header text-uppercase font-weight-bold">HỢP TÁC VÀ LIÊN KẾT</h3>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h3 class="header text-uppercase font-weight-bold">Phương thức thanh toán</h3>
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