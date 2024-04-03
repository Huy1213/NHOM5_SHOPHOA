<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FloSun - Mẫu HTML5 của cửa hàng hoa</title>
    <meta name="robots" content="noindex, follow">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/favicon.ico">

    <!-- CSS
	============================================ -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/css/vendor/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="assets/css/vendor/font.awesome.min.css">
    <!-- Linear Icons CSS -->
    <link rel="stylesheet" href="assets/css/vendor/linearicons.min.css">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="assets/css/plugins/swiper-bundle.min.css">
    <!-- Animation CSS -->
    <link rel="stylesheet" href="assets/css/plugins/animate.min.css">
    <!-- Jquery ui CSS -->
    <link rel="stylesheet" href="assets/css/plugins/jquery-ui.min.css">
    <!-- Nice Select CSS -->
    <link rel="stylesheet" href="assets/css/plugins/nice-select.min.css">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="assets/css/plugins/magnific-popup.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">
    <?php 
        $loai_san_pham = "";
        include("KetNoi.php");
    
        // Kiểm tra xem tham số 'loai' đã được truyền qua URL hay chưa
        if(isset($_GET['loai'])) {
            $loai_san_pham = $_GET['loai'];
            $sql = "SELECT * FROM san_pham WHERE Ma_Loai = '$loai_san_pham'";
        } else {
            $sql = "SELECT * FROM san_pham";
        }
    
        $SP = $con->query($sql);
    ?>

<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=wA/d=0/rs=AN8SPfq5gedF4FIOWZgYyMCNZA5tU966ig/m=el_main_css"></head>
<body style="overflow: visible;">

 

    <!-- Header Area Start Here -->
    <?php 
        require "Layout-Chung/header.php";
    ?>
    <!-- Header Area End Here -->
    <!-- Breadcrumb Area Start Here -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thanh bên cửa hàng</font></font></h3>
                        <ul>
                            <li><a href="index.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cửa hàng</font></font></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Shop Main Area Start Here -->
    <div class="shop-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!--shop toolbar start-->
                    <div class="shop_toolbar_wrapper mb-30">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="btn-grid-3 active" title="Lưới"><i class="fa fa-th"></i></button>
                            <button data-role="grid_list" type="button" class="btn-list" title="Danh sách"><i class="fa fa-th-list"></i></button>
                        </div>
                        <div class="shop-select">
                            <form class="d-flex flex-column w-100" action="#">
                                <div class="form-group">
                                    <select class="form-control nice-select w-100" style="display: none;">
                                        <option selected="" value="1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Theo bảng chữ cái, AZ</font></font></option>
                                        <option value="2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo mức độ phổ biến</font></font></option>
                                        <option value="3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo độ mới</font></font></option>
                                        <option value="4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo giá: thấp đến cao</font></font></option>
                                        <option value="5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo giá: cao đến thấp</font></font></option>
                                        <option value="6"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên sản phẩm: Z</font></font></option>
                                    </select><div class="nice-select form-control w-100" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Theo bảng chữ cái, AZ</font></font></span><ul class="list"><li data-value="1" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Theo bảng chữ cái, AZ</font></font></li><li data-value="2" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo mức độ phổ biến</font></font></li><li data-value="3" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo độ mới</font></font></li><li data-value="4" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo giá: thấp đến cao</font></font></li><li data-value="5" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sắp xếp theo giá: cao đến thấp</font></font></li><li data-value="6" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên sản phẩm: Z</font></font></li></ul></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!--shop toolbar end-->
                    <!-- Shop Wrapper Start -->
                    <div class="row shop_wrapper grid_3">
                        <?php foreach($SP as $sp) {?>
                        <div class="col-custom product-area col-lg-4 col-md-6 col-sm-6">
                            <div class="product-item">
                                <div class="single-product position-relative mr-0 ml-0">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php?hoa=<?php echo $sp['Ma_Hoa']; ?>">
                                            <img src="assets/images/product/<?php echo $sp["Hinh_anh"] ?>" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <span class="onsale"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Doanh thu!</font></font></span>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.html" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.html" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $sp['Ten_Hoa'] ?></font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$<?php echo $sp["Don_Gia"] ?></font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$100</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                    <div class="product-content-listview">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa cúc hồng dính</font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$60,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$70,00</font></font></del></span>
                                        </div>
                                        <p class="desc-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </font><font style="vertical-align: inherit;">Fusce posuere metus vitae arcu imperdiet, id aliquet ante scelerisque. </font><font style="vertical-align: inherit;">Sed sit amet sem vitae urna fringilla tempus.</font></font></p>
                                        <div class="button-listview">
                                            <a href="cart.php" class="btn product-cart button-icon flosun-button dark-btn" data-toggle="tooltip" data-placement="top" data-bs-original-title="Add to Cart"> <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></span> </a>
                                            <a class="list-icon" href="compare.html" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="top" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a class="list-icon" href="wishlist.html" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="top" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    <!-- Shop Wrapper End -->
                    <!-- Bottom Toolbar Start -->
                    <div class="row">
                        <div class="col-sm-12 col-custom">
                            <div class="toolbar-bottom">
                                <div class="pagination">
                                    <ul>
                                        <li class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></a></li>
                                        <li class="next"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiếp</font></font></a></li>
                                        <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">&gt;&gt;</font></font></a></li>
                                    </ul>
                                </div>
                                <p class="desc-content text-center text-sm-right mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hiển thị 1 - 12 trên 34 kết quả</font></font></p>
                            </div>
                        </div>
                    </div>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Sidebar Widget Start -->
                    <aside class="sidebar_widget widget-mt">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tìm kiếm</font></font></h3>
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Tìm kiếm cửa hàng của chúng tôi" aria-label="Tìm kiếm cửa hàng của chúng tôi">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Danh mục thực đơn</font></font></h3>
                                <!-- Widget Menu Start -->
                                <nav>
                                    <ul class="mobile-menu p-0 m-0">
                                        <li class="menu-item-has-children"><span class="menu-expand"><i></i></span><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bó hoa sinh nhật</font></font></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hoa thị</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aubrieta</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Giỏ vàng</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i></i></span><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa tang lễ</font></font></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Cleome</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Columbine</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa lược</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">cốt lõi</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i></i></span><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang trí nội thất</font></font></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">lịch</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đậu thầu dầu</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bạc hà</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hẹ</font></font></a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children"><span class="menu-expand"><i></i></span><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn đặt hàng tùy chỉnh</font></font></a>
                                            <ul class="dropdown" style="display: none;">
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa loa kèn</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa hồng</font></font></a></li>
                                                <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">hướng dương</font></font></a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Widget Menu End -->
                            </div>
                           
                        </div>
                    </aside>
                    <!-- Sidebar Widget End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Shop Main Area End Here -->
    <!--Footer Area Start-->
    <?php 
        require "Layout-Chung/footer.php";
    ?>
    <!--Footer Area End-->

    <!-- Modal -->
    <div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-bs-dismiss="modal" aria-label="Đóng">
                    <span class="close-icon" aria-hidden="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">x</font></font></span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid custom-area">
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="modal-product-img">
                                    <a class="w-100" href="#">
                                        <img class="w-100" src="assets/images/product/large-size/1.jpg" alt="Sản phẩm">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên giả của sản phẩm</font></font></h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1 đánh giá</font></font></span>
                                        </div>
                                        <p class="desc-content"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chúng tôi tố cáo với sự phẫn nộ chính đáng và không thích những người bị mê hoặc và mất tinh thần bởi sự quyến rũ của thú vui nhất thời, mù quáng vì ham muốn, đến mức họ không thể thấy trước nỗi đau và rắc rối sắp xảy ra sau đó; </font><font style="vertical-align: inherit;">và đổ lỗi ngang nhau...</font></font></p>
                                        <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                                <select class="form-control nice-select w-100" style="display: none;">
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XL</font></font></option>
                                                    <option><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXL</font></font></option>
                                                </select><div class="nice-select form-control w-100" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S</font></font></span><ul class="list"><li data-value="S" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S</font></font></li><li data-value="M" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">M</font></font></li><li data-value="L" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">L</font></font></li><li data-value="XL" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XL</font></font></li><li data-value="XXL" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">XXL</font></font></li></ul></div>
                                            </div>
                                        </form>
                                        <div class="quantity-with-btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="0" type="text">
                                                    <div class="dec qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></div>
                                                    <div class="inc qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div><div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                            </div>
                                            <div class="add-to_btn">
                                                <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                                <a class="btn flosun-button secondary-btn rounded-0" href="wishlist.html"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào danh sách yêu thích</font></font></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Scroll to Top Start -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Scroll to Top End -->

    <!-- JS
============================================ -->


    <!-- jQuery JS -->
    <script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
    <!-- jQuery Migrate JS -->
    <script src="assets/js/vendor/jquery-migrate-3.3.2.min.js"></script>
    <!-- Modernizer JS -->
    <script src="assets/js/vendor/modernizr-3.7.1.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/vendor/bootstrap.bundle.min.js"></script>


    <!-- Swiper Slider JS -->
    <script src="assets/js/plugins/swiper-bundle.min.js"></script>
    <!-- nice select JS -->
    <script src="assets/js/plugins/nice-select.min.js"></script>
    <!-- Ajaxchimpt js -->
    <script src="assets/js/plugins/jquery.ajaxchimp.min.js"></script>
    <!-- Jquery Ui js -->
    <script src="assets/js/plugins/jquery-ui.min.js"></script>
    <!-- Jquery Countdown js -->
    <script src="assets/js/plugins/jquery.countdown.min.js"></script>
    <!-- jquery magnific popup js -->
    <script src="assets/js/plugins/jquery.magnific-popup.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js">
        
    </script><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Văn bản gốc</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Đánh giá bản dịch này</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Ý kiến phản hồi của bạn sẽ được dùng để góp phần cải thiện Google Dịch</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Bản dịch tốt" aria-label="Bản dịch tốt" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Bản dịch kém" aria-label="Bản dịch kém" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div>






</body>