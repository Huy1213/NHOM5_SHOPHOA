<!doctype html>
<html class="no-js" lang="en">


<!-- Mirrored from htmldemo.net/flosun/flosun/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:17 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>FloSun - Flower Shop HTML5 Template</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Biểu tượng yêu thích -->
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

</head>

<body>

   <!-- Header Area Start Here -->
   <?php 
        require "Layout-Chung/header.php";
    ?>
    <?php 
         $loai_san_pham = "";
         include("KetNoi.php");
 
         // Số sản phẩm trên mỗi trang
         $products_per_page = 6;
 
         // Lấy số trang hiện tại từ tham số truyền qua URL
         $page = isset($_GET['page']) ? $_GET['page'] : 1;
 
         // Lấy loại sản phẩm từ tham số truyền qua URL
         $loai_san_pham = isset($_GET['loai']) ? $_GET['loai'] : "";
 
         // Tính offset (bắt đầu từ bản ghi nào trong database)
         $offset = ($page - 1) * $products_per_page;
 
         // Truy vấn SQL để lấy sản phẩm của trang hiện tại và theo loại sản phẩm
         $sql = "SELECT * FROM san_pham";
         if (!empty($loai_san_pham)) {
             $sql .= " WHERE Ma_Loai = '$loai_san_pham'";
         }
         $sql .= " LIMIT $products_per_page OFFSET $offset";
 
         // Thực thi truy vấn SQL
         $result = $con->query($sql);
 
         
    ?>

    <!-- Sắp xếp theo tên theo giá -->
    <?php 
        // Thêm biến sắp xếp vào truy vấn SQL
        $sapxep = isset($_GET['sapxep']) ? $_GET['sapxep'] : 1;
        // Lấy từ khóa tìm kiếm từ tham số GET
        $keyword = isset($_GET['TimKiemHoa']) ? $_GET['TimKiemHoa'] : '';
        $sql = "SELECT * FROM san_pham";
        $sqlseach = "";
        if (!empty($loai_san_pham)) {
            $sql .= " WHERE Ma_Loai = '$loai_san_pham'";
        }
        if (!empty($keyword)) {
            $sql .= " WHERE Ten_Hoa LIKE '%$keyword%'";
        }
        // Thay đổi truy vấn SQL dựa trên lựa chọn sắp xếp
        $sql_order = $sql; // Sao chép truy vấn hiện tại
        switch ($sapxep) {
            case '1':
                // Theo thứ tự bảng chữ cái, A-Z
                $sql_order .= " ORDER BY Ten_Hoa ASC";
                break;
            case '2':
                // Sắp xếp theo giá: thấp đến cao
                $sql_order .= " ORDER BY Don_Gia ASC";
                break;
            case '3':
                // Sắp xếp theo giá: cao xuống thấp
                $sql_order .= " ORDER BY Don_Gia DESC";
                break;
        }
        
        $sql_order .= " LIMIT $products_per_page OFFSET $offset";

        // Thực thi truy vấn SQL mới
        $result = $con->query($sql_order);
    ?>

        
    <!-- Header Area End Here -->
    <!-- Khu vực Breadcrumb bắt đầu ở đây -->
    <div class="breadcrumbs-area position-relative">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-content position-relative section-content">
                        <h3 class="title-3">Thanh Bên Cửa Hàng</h3>
                        <ul>
                            <li><a href="index.html">Trang Chủ</a></li>
                            <li>Cửa Hàng</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Khu vực Breadcrumb kết thúc ở đây -->
    <!-- Mua sắm tại khu vực chính Bắt đầu tại đây -->
    <div class="shop-main-area">
        <div class="container container-default custom-area">
            <div class="row flex-row-reverse">
                <div class="col-lg-9 col-12 col-custom widget-mt">
                    <!--bắt đầu thanh công cụ cửa hàng-->
                    <div class="shop_toolbar_wrapper mb-30">
                        <div class="shop_toolbar_btn">
                            <button data-role="grid_3" type="button" class="active btn-grid-3" title="Grid"><i
                                    class="fa fa-th"></i></button>

                        </div>
                        <div class="shop-select">
                            <form class="d-flex flex-column w-100" action="#">
                                <div class="form-group">
                                    <select class="form-control nice-select w-100 " onchange="changeSorting(this)">
                                        <option selected value="1">Theo thứ tự bảng chữ cái, A-Z</option>                                    
                                        <option value="2">Sắp xếp theo giá: thấp đến cao</option>
                                        <option value="3">Sắp xếp theo giá: cao xuống thấp</option>
                                    </select>
                                </div>
                            </form>
                        </div>                       
                    </div>
                    <!--cuối thanh công cụ cửa hàng-->
                   <!-- Shop Wrapper Start -->
                   <div class="row shop_wrapper grid_3">                      
                        <?php 
                            // Kiểm tra xem có sản phẩm nào được trả về không
                            if ($result->rowCount() > 0) {
                                // Lặp qua kết quả và hiển thị tên sản phẩm
                                foreach($result as $sp) {
                        ?>
                        <div class="col-custom product-area col-lg-4 col-md-6 col-sm-6">
                            <div class="product-item">
                                <div class="single-product position-relative mr-0 ml-0">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php?hoa=<?php echo $sp['Ma_Hoa']; ?>">
                                            <img src="assets/images/product/<?php echo $sp["Hinh_anh"]; ?>" alt="" class="product-image-1 w-100">
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
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?php echo $sp['Ten_Hoa']; ?></font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$<?php echo $sp["Don_Gia"]; ?></font></font></span>
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
                        <?php
                                }
                                // Đếm tổng số hàng trong bảng san_pham theo loại sản phẩm
                                $sql_count = "SELECT COUNT(*) AS total FROM san_pham";
                                if (!empty($loai_san_pham)) {
                                    $sql_count .= " WHERE Ma_Loai = '$loai_san_pham'";
                                }
                                $total_result = $con->query($sql_count);
                                $total_row = $total_result->fetch(PDO::FETCH_ASSOC)['total'];

                                // Tính tổng số trang
                                $total_pages = ceil($total_row / $products_per_page);

                                // Hiển thị nút "Trang trước"                             
                            } else {
                                echo '<p class="h1 text-center text-black">Không có sản phẩm nào.</p>';
                            }
                        ?>    
                    </div>
                    <!-- Shop Wrapper End -->
                   <!-- Bottom Toolbar Start -->
                   <?php
                    // Kiểm tra xem có sản phẩm nào được trả về từ cơ sở dữ liệu hay không
                    if ($result->rowCount() > 0) {
                    ?>
                        <div class="row">
                            <div class="col-sm-12 col-custom">
                                <div class="toolbar-bottom">
                                    <div class="pagination">
                                        <ul>
                                            <?php
                                            // Hiển thị nút "Trang trước"
                                            if ($page > 1) {
                                                echo '<li><a href="?page=' . ($page - 1) . '&loai=' . $loai_san_pham . '"> < </a></li>';
                                            }

                                            // Hiển thị các số trang
                                            for ($i = 1; $i <= $total_pages; $i++) {
                                                echo '<li ' . ($i == $page ? 'class="current"' : '') . '><a href="?page=' . $i . '&loai=' . $loai_san_pham . '">' . $i . '</a></li>';
                                            }

                                            // Hiển thị nút "Trang tiếp theo"
                                            if ($page < $total_pages) {
                                                echo '<li class="next"><a href="?page=' . ($page + 1) . '&loai=' . $loai_san_pham . '"> > </a></li>';
                                            }                                       
                                            ?>
                                        </ul>
                                    </div>
                                    <p class="desc-content text-center text-sm-right mb-0">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hiển thị <?php echo $offset + 1; ?> - <?php echo min($offset + $products_per_page, $total_row); ?> trên <?php echo $total_row; ?> kết quả</font></font>
                                    </p>
                                </div>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                    <!-- Bottom Toolbar End -->
                </div>
                <div class="col-lg-3 col-12 col-custom">
                    <!-- Bắt đầu tiện ích thanh bên -->
                    <aside class="sidebar_widget widget-mt">
                        <div class="widget_inner">
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Tìm kiếm</h3>
                                <div class="search-box">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search Our Store"
                                            aria-label="Search Our Store">
                                        <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Danh Mục Thực Đơn</h3>
                                <!-- Bắt đầu menu tiện ích -->
                                <nav>
                                    <ul class="mobile-menu p-0 m-0">
                                        <li class="menu-item-has-children">
                                            <a href="#">Bó Hoa Sinh Nhật</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Hoa Thị</a></li>
                                                <li><a href="#">Aubrieta</a></li>
                                                <li><a href="#">Giỏ Vàng</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Hoa Tang Lễ</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Cleome</a></li>
                                                <li><a href="#">Columbine</a></li>
                                                <li><a href="#">Hoa Lược</a></li>
                                                <li><a href="#">Cốt Lõi</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Trang Trí Nội Thất</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Lịch</a></li>
                                                <li><a href="#">Đậu Thầu Dầu</a></li>
                                                <li><a href="#">Bạc Hà</a></li>
                                                <li><a href="#">Hẹ</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <a href="#">Đơn Đặt Hàng Tùy Chỉnh</a>
                                            <ul class="dropdown">
                                                <li><a href="#">Hoa Loa Kèn</a></li>
                                                <li><a href="#">Hoa Hồng</a></li>
                                                <li><a href="#">Hướng Dương</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                                <!-- Kết thúc menu tiện ích -->
                            </div>
                           
                            <div class="widget-list widget-mb-1">
                                <h3 class="widget-title">Thể Loại</h3>
                                <div class="sidebar-body">
                                    <ul class="sidebar-list">
                                        <li><a href="#">Tất cả sản phẩm</a></li>
                                        <li><a href="#">Bán chạy nhất (5)</a></li>
                                        <li><a href="#">Nổi bật (4)</a></li>
                                        <li><a href="#">Sản phẩm mới (6)</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-2">
                                <h3 class="widget-title">Màu Sắc</h3>
                                <div class="sidebar-body">
                                    <ul class="checkbox-container categories-list">
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label" for="customCheck12">Màu Đen
                                                    (20)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck13">
                                                <label class="custom-control-label" for="customCheck13">Màu Đỏ
                                                    (6)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck14">
                                                <label class="custom-control-label" for="customCheck14">Màu Xanh
                                                    (8)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label" for="customCheck11">Màu Xanh Lá Cây
                                                    (5)</label>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck15">
                                                <label class="custom-control-label" for="customCheck15">Màu Hồng
                                                    (4)</label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list widget-mb-3">
                                <h3 class="widget-title">Thẻ</h3>
                                <div class="sidebar-body">
                                    <ul class="tags">
                                        <li><a href="#">Hoa hồng</a></li>
                                        <li><a href="#">Hướng dương</a></li>
                                        <li><a href="#">Hoa Tulip</a></li>
                                        <li><a href="#">Hoa loa kèn</a></li>
                                        <li><a href="#">Thông minh</a></li>
                                        <li><a href="#">Hiện đại</a></li>
                                        <li><a href="#">Quà</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="widget-list mb-0">
                                <h3 class="widget-title">Sản Phẩm Mới</h3>
                                <div class="sidebar-body">
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="assets/images/cart/1.jpg" alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Vinh Quang Của
                                                        Tuyết</a></h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$80.00</span>
                                                <span class="old-price"><del>$90.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="assets/images/cart/2.jpg" alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Ngọc Trai Vĩnh
                                                        Cửu</a></h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$50.00</span>
                                                <span class="old-price"><del>$60.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="sidebar-product align-items-center">
                                        <a href="product-details.html" class="image">
                                            <img src="assets/images/cart/3.jpg" alt="product">
                                        </a>
                                        <div class="product-content">
                                            <div class="product-title">
                                                <h4 class="title-2"> <a href="product-details.html">Jack Trên Bục
                                                        Giảng</a></h4>
                                            </div>
                                            <div class="price-box">
                                                <span class="regular-price ">$40.00</span>
                                                <span class="old-price"><del>$50.00</del></span>
                                            </div>
                                            <div class="product-rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </aside>
                    <!-- Kết thúc tiện ích thanh bên -->
                </div>
            </div>
        </div>
    </div>
    <!-- Khu vực mua sắm chính kết thúc ở đây -->
    <!--Bắt đầu khu vực chân trang-->
    <?php 
        require "Layout-Chung/footer.php";
    ?>

    <!--Cuối khu vực chân trang-->
    <!-- Phương thức -->
    <div class="modal flosun-modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close close-button" data-bs-dismiss="modal" aria-label="Close">
                    <span class="close-icon" aria-hidden="true">x</span>
                </button>
                <div class="modal-body">
                    <div class="container-fluid custom-area">
                        <div class="row">
                            <div class="col-md-6 col-custom">
                                <div class="modal-product-img">
                                    <a class="w-100" href="#">
                                        <img class="w-100" src="assets/images/product/large-size/1.jpg" alt="Product">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-custom">
                                <div class="modal-product">
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title">Tên giả của sản phẩm</h4>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price ">$80.00</span>
                                            <span class="old-price"><del>$90.00</del></span>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <span>1 Phê bình</span>
                                        </div>
                                        <p class="desc-content">chúng tôi tố cáo với sự phẫn nộ chính đáng và không
                                            thích những người bị mê hoặc và mất tinh thần bởi sự quyến rũ của thú vui
                                            nhất thời, mù quáng vì ham muốn, đến mức họ không thể thấy trước nỗi đau và
                                            rắc rối sắp xảy ra sau đó; và đổ lỗi ngang nhau...</p>
                                        <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                                <select class="form-control nice-select w-100">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select>
                                            </div>
                                        </form>
                                        <div class="quantity-with-btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" value="0" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                </div>
                                            </div>
                                            <div class="add-to_btn">
                                                <a class="btn product-cart button-icon flosun-button dark-btn"
                                                    href="cart.html">Thêm vào giỏ hàng</a>
                                                <a class="btn flosun-button secondary-btn rounded-0"
                                                    href="wishlist.html">Thêm vào danh sách yêu thích</a>
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

    <!-- Di chuyển lên trên cùng -->
    <a class="scroll-to-top" href="#">
        <i class="lnr lnr-arrow-up"></i>
    </a>
    <!-- Di chuyển lên trên cùng -->
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
    <script src="assets/js/main.js"></script>
    <script>
        function changeSorting(selectElement) {
            var selectedValue = selectElement.value;
            window.location.href = '?page=1&loai=<?php echo $loai_san_pham; ?>&sapxep=' + selectedValue;
        }
    </script>

</body>


<!-- Mirrored from htmldemo.net/flosun/flosun/shop.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Dec 2022 05:03:17 GMT -->

</html>