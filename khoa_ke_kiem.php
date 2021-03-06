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
                <!-- form t??m ki???m  -->
                <form class="form-inline ml-auto my-2 my-lg-0 mr-3">
                    <div class="input-group" style="width: 520px;">
                        <input type="text" class="form-control" aria-label="Small"
                            placeholder="Nh???p s??ch c???n t??m ki???m...">
                        <div class="input-group-append">
                            <button type="button" class="btn" style="background-color: #CF111A; color: white;">
                                <i class="fa fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>

                <!-- ?? ????ng nh???p ????ng k?? gi??? h??ng tr??n header  -->
                <ul class="navbar-nav mb-1 ml-auto">
                    <div class="dropdown">
                        <li class="nav-item account" type="button" class="btn dropdown" data-toggle="dropdown">
                            <a href="#" class="btn btn-secondary rounded-circle">
                                <i class="fa fa-user"></i>
                            </a>
                            <a class="nav-link text-dark text-uppercase" href="#" style="display:inline-block">T??i
                                kho???n</a>
                        </li>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item nutdangky text-center mb-2" href="#" data-toggle="modal"
                                data-target="#formdangky">????ng k??</a>
                            <a class="dropdown-item nutdangnhap text-center" href="#" data-toggle="modal"
                                data-target="#formdangnhap">????ng nh???p</a>
                        </div>
                    </div>
                    <li class="nav-item giohang">
                        <a href="gio-hang.php" class="btn btn-secondary rounded-circle">
                            <i class="fa fa-shopping-cart"></i>
                            <div class="cart-amount">0</div>
                        </a>
                        <a class="nav-link text-dark giohang text-uppercase" href="gio-hang.html"
                            style="display:inline-block">Gi???
                            H??ng</a>
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
                            <a class=" text-decoration-none">????ng nh???p</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">????ng k??</a>
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
                            <input type="text" class="form-control" placeholder="Nh???p h??? v?? t??n" name="name" required
                                autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="email" class="form-control" placeholder="Nh???p ?????a ch??? email" name="email"
                                required>
                        </div>
                        <div class="form-label-group">
                            <input type="password" id="inputPassword" class="form-control" placeholder="Nh???p m???t kh???u" name="password"
                                required>
                        </div>
                        <div class="form-label-group mb-4">
                            <input type="password" class="form-control" placeholder="Nh???p l???i m???t kh???u" name="confirm_password"
                                required>
                        </div>
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white mt-3" type="submit" name="dangki"
                            style="background: #F5A623">????ng k??</button>
                        <hr class="mt-3 mb-2">
                        <div class="custom-control custom-checkbox">
                            <p class="text-center">B???ng vi???c ????ng k??, b???n ???? ?????ng ?? v???i Nh?? s??ch HVNH v???</p>
                            <a href="#" class="text-decoration-none text-center" style="color: #F5A623">??i???u kho???n d???ch
                                v??? & Ch??nh s??ch b???o m???t</a>
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
                            <a class=" text-decoration-none">????ng nh???p</a>
                            <hr>
                        </li>
                        <li class="tab tab-dangky text-center">
                            <a class="text-decoration-none">????ng k??</a>
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
                            <input type="email" class="form-control" placeholder="Nh???p ?????a ch??? email" name="email"
                                required autofocus>
                        </div>
                        <div class="form-label-group">
                            <input type="password" class="form-control" placeholder="M???t kh???u" name="password" required>
                        </div>
                        
                        <button class="btn btn-lg btn-block btn-signin text-uppercase text-white" type="submit" name="dang_nhap" 
                            style="background: #F5A623">????ng nh???p</button>
                        <hr class="my-4">
                    </form>
                </div>
            </div>
        </div>
    </div>

    

    <!-- thanh "danh muc sach" ???? ???????c ???n b??n trong + hotline + ho tro truc tuyen -->
    <section class="duoinavbar">
        <div class="container text-white">
            <div class="row justify">
                <div class="col-lg-3 col-md-5">
                    <div class="categoryheader">
                        <div class="noidungheader text-white">
                            <i class="fa fa-bars"></i>
                            <span class="text-uppercase font-weight-bold ml-1">Danh m???c s??ch</span>
                        </div>
                        <!-- CATEGORIES -->
                    <div class="categorycontent">
                        <ul>
                            <li> <a href="sach-kinh-te.html">Khoa L?? lu???n ch??nh tr???</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa L?? lu???n ch??nh tr???</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Kinh T??? - Ch??nh Tr???</a></li>
                                        <li><a href="#">S??ch Kh???i Nghi???p</a></li>
                                        <li><a href="#">S??ch T??i Ch??nh, K??? To??n</a></li>
                                        <li><a href="#">S??ch Qu???n Tr??? Nh??n S???</a></li>
                                        <li><a href="#">S??ch K??? N??ng L??m Vi???c</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nh??n V???t - B??i H???c Kinh Doanh</a></li>
                                        <li><a href="#">S??ch Qu???n Tr??? - L??nh ?????o</a></li>
                                        <li><a href="#">S??ch Kinh T??? H???c</a></li>
                                        <li><a href="#">S??ch Ch???ng Kho??n - B???t ?????ng S???n - ?????u T??</a></li>
                                        <li><a href="#">S??ch Marketing - B??n H??ng</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Khoa Ng??n h??ng</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Ng??n h??ng</a></li>
                                    <div class="content trai">
                                        <li><a href="#">S??ch Ngh??? Thu???t S???ng</a></li>
                                        <li><a href="#">S??ch T??m L??</a></li>
                                        <li><a href="#">S??ch H?????ng Nghi???p</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">S??ch Ngh??? Thu???t S???ng ?????p</a></li>
                                        <li><a href="#">S??ch T?? Duy </a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="khoa_luat_kinh_te.php">Khoa Lu???t kinh t???</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="khoa_luat_kinh_te.php" class="header text-uppercase">Khoa Lu???t kinh t???</a></li>
                                    <div class="content trai">
                                        <li><a href="#">TLHT Ph??p lu???t ?????i c????ng</a></li>
                                        <li><a href="#">H??? th???ng v??n b???n QPPL - M??n h???c PLDC</a></li>
                                        <li><a href="#">H??? th???ng v??n b???n QPPL - M??n PL ng??n h??ng</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">T??i li???u m??n h???c Lu???t kinh t???</a></li>
                                        <li><a href="#">TLHT Nh?? n?????c v?? ph??p lu???t ?????i c????ng</a></li>
                                        <li><a href="#">TLHT Ph??p lu???t kinh t???</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="khoa_ke_kiem.php">Khoa K??? to??n - Ki???m to??n</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="khoa_ke_kiem.php" class="header text-uppercase">Khoa K??? to??n - Ki???m to??n</a></li>
                                    <div class="content trai">
                                        <li><a href="#">K??? to??n t??i ch??nh</a></li>
                                        <li><a href="#">K??? to??n qu???n tr???</a></li>
                                        <li><a href="#">Ki???m to??n</a></li>
                                        <li><a href="#">L?? thuy???t k??? to??n</a></li>
                                        <li><a href="#">Th???ng k?? doanh nghi???p</a></li>
                                    </div>
                                    
                                </ul>
                            </li>
                            <li><a href="#">Khoa H??? th???ng th??ng tin qu???n l??</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa H??? th???ng th??ng tin qu???n l??</a>
                                    </li>
                                    <div class="content trai">
                                        <li><a href="#">M???u Gi??o</a></li>
                                        <li><a href="#">Thi???u Ni??n</a></li>
                                        <li><a href="#">Ki???n Th???c - B??ch Khoa</a></li>
                                        <li><a href="#">Truy???n C??? T??ch</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Nhi ?????ng</a></li>
                                        <li><a href="#">V??n H???c Thi???u Nhi</a></li>
                                        <li><a href="#">K??? N??ng S???ng</a></li>
                                        <li><a href="#">Truy???n Tranh</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Khoa T??i Ch??nh</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa T??i Ch??nh</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Gi??o d???c</a></li>
                                        <li><a href="#">Thai Gi??o</a></li>
                                        <li><a href="#">S??ch Dinh D?????ng - Ch??m S??c Tr???</a></li>
                                        <li><a href="#">???m Th???c - N???u ??n</a></li>
                                        <li><a href="#">S??ch Tham Kh???o</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Gi???i T??nh</a></li>
                                        <li><a href="#">S??ch L??m Cha M???</a></li>
                                        <li><a href="#">Ki???n Th???c - K??? N??ng Cho Tr???</a></li>
                                        <li><a href="#">Ngo???i Ng??? - T??? ??i???n</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">B??? m??n To??n</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">B??? m??n To??n</a></li>
                                    <div class="content trai">
                                        <li><a href="#">L???ch S??? Vi???t Nam</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">L???ch S??? Th??? Gi???i</a></li>
                                    </div>
                                </ul>
                            </li>
                           
                            <li><a href="#">Khoa Ng??n ng??? Anh</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Ng??n ng??? Anh</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Tri???t H???c Ph????ng T??y</a></li>
                                        <li><a href="#">Khoa H???c C?? B???n</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Minh Ti???t Ph????ng ????ng</a></li>
                                    </div>
                                </ul>
                            </li>

                            <li><a href="#">Khoa Qu???n tr??? Kinh Doanh</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Qu???n tr??? Kinh Doanh</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Ch??m S??c S???c Kh???e</a></li>
                                        <li><a href="#">Y H???c</a></li>
                                        <li><a href="#">Thi???n - Yoga</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Th???c D?????ng</a></li>
                                        <li><a href="#">????ng Y - C??? Truy???n</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Khoa Kinh t???</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Kinh t???</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Ch??m S??c S???c Kh???e</a></li>
                                        <li><a href="#">Y H???c</a></li>
                                        <li><a href="#">Thi???n - Yoga</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Th???c D?????ng</a></li>
                                        <li><a href="#">????ng Y - C??? Truy???n</a></li>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="#">Khoa Kinh doanh Qu???c t???</a><i class="fa fa-chevron-right float-right"></i>
                                <ul>
                                    <li class="liheader"><a href="#" class="header text-uppercase">Khoa Kinh doanh Qu???c t???</a></li>
                                    <div class="content trai">
                                        <li><a href="#">Ch??m S??c S???c Kh???e</a></li>
                                        <li><a href="#">Y H???c</a></li>
                                        <li><a href="#">Thi???n - Yoga</a></li>
                                    </div>
                                    <div class="content phai">
                                        <li><a href="#">Th???c D?????ng</a></li>
                                        <li><a href="#">????ng Y - C??? Truy???n</a></li>
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
                        <a href="#">H??? tr??? tr???c tuy???n </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- breadcrumb  -->
    <section class="breadcrumbbar">
        <div class="container">
            <ol class="breadcrumb mb-0 p-0 bg-transparent">
                <li class="breadcrumb-item"><a href="index.php">Trang ch???</a></li>
                <li class="breadcrumb-item active"><a href="khoa_luat_kinh_te.php">Khoa K??? to??n - Ki???m to??n</a></li>
            </ol>
        </div>
    </section>

    <!-- ???nh banner  -->
    <section class="banner">
        <div class="container">
            <a href="khoa_ke_kiem.php"><img src="images/khoa-ke-kiem.png" alt="khoa-ke-kiem"
                    class="img-fluid"></a>
        </div>
    </section>

    <!-- th??? lo???i s??ch: kinh t??? ch??nh tr??? nh??n v???t b??i h???c kinh doanh ( t???ng ?? vu??ng) -->
    <section class="page-content my-3">
        <div class="container">
            <div>
                <h1 class="header text-uppercase">Khoa K??? to??n - Ki???m to??n</h1>
            </div>
            <div class="the-loai-sach">
                <ul class="list-unstyled d-flex">

       <?php 
            // 1. Load file c???u h??nh ????? k???t n???i ?????n m??y ch??? CSDL, CSDL
            include('./config.php');

            // 2. Vi???t c??u l???nh truy v???n ????? l???y ra ???????c D??? LI???U MONG MU???N (TIN T???C ???? l??u trong CSDL)
            $sql = "
                      SELECT tbl_san_pham.ten_san_pham,tbl_san_pham.anh
                      FROM tbl_san_pham INNER JOIN tbl_khoa ON tbl_san_pham.khoa_id=tbl_khoa.khoa_id
                      WHERE  ten_khoa = N'Khoa K??? to??n - Ki???m to??n'
                    ";

            // 3. Th???c thi c??u l???nh truy v???n (m???c ????ch tr??? v??? d??? li???u c??c b???n c???n)
            $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

            // 4. Hi???n th??? ra d??? li???u m?? c??c b???n v???a l???y ???????c
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
            // 5. ????ng k???t n???i sau khi s??? d???ng xong
            mysqli_close($ket_noi); 
        ;?> 
                    
                </ul>
            </div>
        </div>
    </section>

    <!-- kh???i s???n ph???m  -->
    <section class="content my-4">
        <div class="container">
            <div class="noidung bg-white" style=" width: 100%;">
                <!-- header c???a kh???i s???n ph???m : tag(t??c gi???), b??? l???c v?? s???p x???p  -->
                <div class="header-khoi-sp d-flex">
                    <div class="sort d-flex ml-auto">
                        <div class="hien-thi">
                            <label for="hienthi-select" class="label-select">Hi???n th???</label>
                            <select class="hienthi-select">
                                <option value="30">30</option>
                                <option value="60">60</option>
                            </select>
                        </div>
                        <div class="sap-xep">
                            <label for="sapxep-select" class="label-select">S???p x???p</label>
                            <select class="sapxep-select">
                                <option value="moinhat">M???i nh???t</option>
                                <option value="thap-cao">Gi??: Th???p - Cao</option>
                                <option value="cao-thap">Gi??: Cao - Th???p</option>
                            </select>
                        </div>
                    </div>
                </div>
                
                <!-- c??c s???n ph???m  -->     
                <div >
                    <div class="row">
                     <?php 
                    
                    include('./config.php');

                    
                    $sql = "
                              SELECT * 
                              FROM tbl_san_pham inner join tbl_khoa on tbl_san_pham.khoa_id=tbl_khoa.khoa_id
                              WHERE ten_khoa=N'Khoa K??? to??n - Ki???m to??n'
                              
                              ";

                    // 3. Th???c thi c??u l???nh truy v???n (m???c ????ch tr??? v??? d??? li???u c??c b???n c???n)
                    $noi_dung_san_pham = mysqli_query($ket_noi, $sql);

                    // 4. Hi???n th??? ra d??? li???u m?? c??c b???n v???a l???y ???????c
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
                                            <div class="tacgia", style="color: #0066CC">T??c gi???: <?php echo $row['tac_gia'];?></div>
                                            <div class="nxb", style="color:#0066CC">NXB: <?php echo $row['nha_xuat_ban'];?></div>
                                            <div class="gia d-flex align-items-baseline">
                                                <div class="gia", style="color: red">Gi??: <?php echo $row['gia'];?>??</div>
                                            </div>
                                            <div class="danhgia">
                                                <ul class="d-flex" style="list-style: none;">
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li class="active"><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <span class="text-muted">0 nh???n x??t</span>
                                                </ul>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            
                            <?php 
                    }

                    // 5. ????ng k???t n???i sau khi s??? d???ng xong
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
                            <h6 class="tieude font-weight-bold">GI??O TR??NH M???I NH???T</h6>
                            <p class="detail">b???i H???c Vi???n Ng??n H??ng</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-ship.png" alt="icon-ship">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">MI???N PH?? GIAO H??NG</h6>
                            <p class="detail">T???i tr??? s??? ch??nh HVNH</p>
                            <p class="detail">T??? 150.000?? ??? H?? N???i</p>
                            <p class="detail">T??? 300.000?? ??? t???nh th??nh kh??c</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-gift.png" alt="icon-gift">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">QU?? T???NG MI???N PH??</h6>
                            <p class="detail">T???ng Bookmark</p>
                            <p class="detail">Bao s??ch mi???n ph??</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="dichvu d-flex align-items-center">
                        <img src="images/icon-return.png" alt="icon-return">
                        <div class="noidung">
                            <h6 class="tieude font-weight-bold">?????I TR??? NHANH CH??NG</h6>
                            <p class="detail">H??ng b??? l???i ???????c ?????i tr??? nhanh ch??ng</p>
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
                        <h6 class="header text-uppercase font-weight-bold">H??? TR??? KH??CH H??NG</h6>
                        <a href="#">H?????ng d???n ?????t h??ng</a>
                        <a href="#">Ph????ng th???c thanh to??n</a>
                        <a href="#">Ph????ng th???c v???n chuy???n</a>
                        <a href="#">Ch??nh s??ch ?????i tr???</a>
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="lienket">
                        <h6 class="header text-uppercase font-weight-bold">H???P T??C V?? LI??N K???T</h6>
                        <img src="images/dang-ky-bo-cong-thuong.png" alt="dang-ky-bo-cong-thuong">
                    </div>
                </div>
                <div class="col-md-3 col-xs-6">
                    <div class="ptthanhtoan">
                        <h6 class="header text-uppercase font-weight-bold">Ph????ng th???c thanh to??n</h6>
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