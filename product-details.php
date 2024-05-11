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
        $MaHoa = "";
        include("KetNoi.php");
        // Kiểm tra xem tham số 'loai' đã được truyền qua URL hay chưa
        if(isset($_GET['hoa'])) {
            $MaHoa = $_GET['hoa'];
            $sql = "SELECT * FROM san_pham WHERE Ma_Hoa = '$MaHoa'";
            $_SESSION["ma1"] = $MaHoa; 
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
                        <h3 class="title-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin chi tiết sản phẩm</font></font></h3>
                        <ul>
                            <li><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thông tin chi tiết sản phẩm</font></font></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Single Product Main Area Start -->
    <div class="single-product-main-area">
        <div class="container container-default custom-area">
        <?Php foreach($SP as $sp)
                            { ?>
            <form action="cart.php" method="post">
                <div class="row">
                    <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 col-custom">
                        <div class="product-details-img">
                            <div class="single-product-img swiper-container gallery-top popup-gallery swiper-container-initialized swiper-container-horizontal">
                                <div class="swiper-wrapper" id="swiper-wrapper-98107826f5c9e45c1" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-active" role="group" aria-label="1/6" style="width: 450px; margin-right: 10px;">
                                        <a class="w-100" href="assets/images/product/large-size/<?php echo $sp['Hinh_anh'] ?>">
                                            <img class="w-100" name="hinhAnh" src="assets/images/product/large-size/<?php echo $sp['Hinh_anh'] ?>" alt="Sản phẩm">
                                        </a>
                                    </div>
                                    <div class="swiper-slide swiper-slide-next" role="group" aria-label="2/6" style="width: 450px; margin-right: 10px;">
                                        <a class="w-100" href="assets/images/product/large-size/2.jpg">
                                            <img class="w-100" src="assets/images/product/large-size/2.jpg" alt="Sản phẩm">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="3/6" style="width: 450px; margin-right: 10px;">
                                        <a class="w-100" href="assets/images/product/large-size/3.jpg">
                                            <img class="w-100" src="assets/images/product/large-size/3.jpg" alt="Sản phẩm">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="4/6" style="width: 450px; margin-right: 10px;">
                                        <a class="w-100" href="assets/images/product/large-size/4.jpg">
                                            <img class="w-100" src="assets/images/product/large-size/4.jpg" alt="Sản phẩm">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5/6" style="width: 450px; margin-right: 10px;">
                                        <a class="w-100" href="assets/images/product/large-size/5.jpg">
                                            <img class="w-100" src="assets/images/product/large-size/5.jpg" alt="Sản phẩm">
                                        </a>
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="6/6" style="width: 450px; margin-right: 10px;">
                                        <a class="w-100" href="assets/images/product/large-size/6.jpg">
                                            <img class="w-100" src="assets/images/product/large-size/6.jpg" alt="Sản phẩm">
                                        </a>
                                    </div>
                                </div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true">
                                
                            </span>
                        </div>
                            <div class=" single-product-thumb swiper-container gallery-thumbs swiper-container-initialized swiper-container-horizontal swiper-container-free-mode swiper-container-thumbs">
                                <div class="swiper-wrapper" id="swiper-wrapper-ce9a3ed8bfc35cbc" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-active swiper-slide-thumb-active" role="group" aria-label="1/6" style="width: 105px; margin-right: 10px;">
                                        <img src="assets/images/product/small-size/1.jpg" alt="Sản phẩm">
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible swiper-slide-next" role="group" aria-label="2/6" style="width: 105px; margin-right: 10px;">
                                        <img src="assets/images/product/small-size/2.jpg" alt="Sản phẩm">
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible" role="group" aria-label="3/6" style="width: 105px; margin-right: 10px;">
                                        <img src="assets/images/product/small-size/3.jpg" alt="Sản phẩm">
                                    </div>
                                    <div class="swiper-slide swiper-slide-visible" role="group" aria-label="4/6" style="width: 105px; margin-right: 10px;">
                                        <img src="assets/images/product/small-size/4.jpg" alt="Sản phẩm">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="5/6" style="width: 105px; margin-right: 10px;">
                                        <img src="assets/images/product/small-size/5.jpg" alt="Sản phẩm">
                                    </div>
                                    <div class="swiper-slide" role="group" aria-label="6/6" style="width: 105px; margin-right: 10px;">
                                        <img src="assets/images/product/small-size/6.jpg" alt="Sản phẩm">
                                    </div>
                                </div>
                                <!-- Add Arrows -->
                                <div class="swiper-button-next swiper-button-white" tabindex="0" role="button" aria-label="Trang trình bày tiếp theo" aria-controls="swiper-wrapper-98107826f5c9e45c1" aria-disabled="false"><i class="lnr lnr-arrow-right"></i></div>
                                <div class="swiper-button-prev swiper-button-white swiper-button-disabled" tabindex="-1" role="button" aria-label="Slide trước" aria-controls="swiper-wrapper-98107826f5c9e45c1" aria-disabled="true"><i class="lnr lnr-arrow-left"></i></div>
                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-custom">
                        <div class="product-summery position-relative">
                            <div class="product-head mb-3">
                                <input type="hidden" name="Ma_Hoa" value="<?php echo $sp['Ma_Hoa']; ?>">
                                <h2 class="product-title"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><?Php echo $sp["Ten_Hoa"];?></font></font></h2>
                            </div>
                            <div class="price-box mb-2">
                                <span class="regular-price"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$<?Php echo $sp["Don_Gia"];?></font></font></span>
                                <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$100</font></font></del></span>
                            </div>
                            <div class="product-rating mb-3">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="sku mb-3">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã hàng: 12345</font></font></span>
                            </div>
                            <p class="desc-content mb-5"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tôi phải giải thích cho bạn làm thế nào tất cả những ý tưởng sai lầm về việc tố cáo niềm vui và ca ngợi nỗi đau đã ra đời và tôi sẽ cung cấp cho bạn một bản tường trình đầy đủ về hệ thống, đồng thời giải thích những lời dạy thực tế của nhà thám hiểm vĩ đại về sự thật, bậc thầy xây dựng nên hạnh phúc của con người. .</font></font></p>
                            <div class="quantity-with_btn mb-5">
                                <div class="quantity">
                                    <div class="cart-plus-minus">                                  
                                        <input class="cart-plus-minus-box" name="sl" value="1" type="number">
                                        <div class="dec qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">-</font></font></div>
                                        <div class="inc qtybutton"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">+</font></font></div>
                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div><div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                </div>                               
                                <div class="add-to_cart">
                                    <button class="btn product-cart button-icon flosun-button dark-btn" name="add_to_cart" value="add to cart" type="submit"><font style="vertical-align: inherit;" name="add_to_cart"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></button>
                                    <a class="btn flosun-button secondary-btn secondary-border rounded-0" href="wishlist.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào danh sách yêu thích</font></font></a>
                                </div>
                            </div>
                            <div class="social-share mb-4">
                                <span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chia sẻ :</font></font></span>
                                <a href="#"><i class="fa fa-facebook-square facebook-color"></i></a>
                                <a href="#"><i class="fa fa-twitter-square twitter-color"></i></a>
                                <a href="#"><i class="fa fa-linkedin-square linkedin-color"></i></a>
                                <a href="#"><i class="fa fa-pinterest-square pinterest-color"></i></a>
                            </div>
                            <div class="payment">
                                <a href="#"><img class="border" src="assets/images/payment/payment-icon.png" alt="Sự chi trả"></a>
                            </div>
                        </div>
                    </div>
                </div>              
            </form>
           
        <?php } ?>


            <div class="row mt-no-text">
                <div class="col-lg-12 col-custom">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-uppercase" id="home-tab" data-bs-toggle="tab" href="#connect-1" role="tab" aria-selected="true"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sự miêu tả</font></font></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-uppercase" id="profile-tab" data-bs-toggle="tab" href="#connect-2" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá</font></font></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-uppercase" id="contact-tab" data-bs-toggle="tab" href="#connect-3" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">chính sách vận chuyển</font></font></a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-uppercase" id="review-tab" data-bs-toggle="tab" href="#connect-4" role="tab" aria-selected="false" tabindex="-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Biểu đồ kích thước</font></font></a>
                        </li>
                    </ul>
                    <div class="tab-content mb-text" id="myTabContent">
                        <div class="tab-pane fade show active" id="connect-1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="desc-content">
                                <p class="mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mặt khác, chúng tôi tố cáo với sự phẫn nộ chính đáng và không thích những người bị mê hoặc và mất tinh thần bởi sự quyến rũ của thú vui nhất thời, mù quáng bởi ham muốn đến mức họ không thể thấy trước nỗi đau và rắc rối sắp xảy ra sau đó; </font><font style="vertical-align: inherit;">và sự đổ lỗi tương đương thuộc về những người thất bại trong nhiệm vụ của mình do yếu kém về ý chí, điều này cũng giống như nói rằng do chùn bước trước sự vất vả và đau đớn. </font><font style="vertical-align: inherit;">Những trường hợp này là hoàn toàn đơn giản và dễ dàng để phân biệt. </font><font style="vertical-align: inherit;">Trong giờ phút rảnh rỗi, khi khả năng lựa chọn của chúng ta không bị cản trở và khi không có gì ngăn cản chúng ta có thể làm điều mình thích nhất, thì mọi niềm vui đều được đón nhận và mọi nỗi đau đều có thể tránh được. </font><font style="vertical-align: inherit;">Nhưng trong một số trường hợp nhất định và do các yêu cầu về nghĩa vụ hoặc nghĩa vụ kinh doanh, thường xảy ra trường hợp niềm vui phải bị từ chối và những khó chịu phải chấp nhận. </font><font style="vertical-align: inherit;">Do đó, người khôn ngoan luôn tuân theo nguyên tắc lựa chọn này trong những vấn đề này: anh ta từ chối những thú vui để đảm bảo những thú vui khác lớn hơn, hoặc nếu không thì anh ta chịu đựng nỗi đau để tránh những nỗi đau tồi tệ hơn.</font></font></p>
                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Et harum quidem rerum facilis est et expedita Differentio. </font><font style="vertical-align: inherit;">Nam libero tạm thời, cum soluta nobis est eligendi optio cumque nihil impedit quo trừ id quod maxime placeat facere possimus, omnis voluptas giả định, omnis dolor đẩy lùi. </font><font style="vertical-align: inherit;">Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe Eveniet ut et voluptates Repudiandae sint et molestiae non recusandae. </font><font style="vertical-align: inherit;">Itaque Earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores bí danh consequatur aut perferendis doloribus asperiores đẩy lùi.</font></font></p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-2" role="tabpanel" aria-labelledby="profile-tab">
                            <!-- Start Single Content -->
                            <div class="product_tab_content  border p-3">
                                <div class="review_address_inner">
                                    <!-- Start Single Review -->
                                    <div class="pro_review mb-5">
                                        <div class="review_thumb">
                                            <img alt="xem lại hình ảnh" src="assets/images/review/1.jpg">
                                        </div>
                                        <div class="review_details">
                                            <div class="review_info mb-2">
                                                <div class="product-rating mb-2">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star-o"></i>
                                                    <i class="fa fa-star-o"></i>
                                                </div>
                                                <h5><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quản trị viên - </font></font><span><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">19 tháng 12 năm 2022</font></font></span></h5>
                                            </div>
                                            <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. </font><font style="vertical-align: inherit;">Proin in viverra ex, vitae vestibulum arcu. </font><font style="vertical-align: inherit;">Duis sollicitudin metus sed lorem commodo, eu dapibus libero interdum. </font><font style="vertical-align: inherit;">Morbi convallis viverra erat, et aliquet orci congue vel. </font><font style="vertical-align: inherit;">Số nguyên trong odio enim. </font><font style="vertical-align: inherit;">Pellentesque trong dignissim leo. </font><font style="vertical-align: inherit;">Vivamus varius ex sit amet quam tincidunt iaculis.</font></font></p>
                                        </div>
                                    </div>
                                    <!-- End Single Review -->
                                </div>
                                <!-- Start RAting Area -->
                                <div class="rating_wrap">
                                    <h5 class="rating-title-1 font-weight-bold mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm một bài đánh giá</font></font></h5>
                                    <p class="mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ email của bạn sẽ không được công bố. </font><font style="vertical-align: inherit;">Các trường bắt buộc được đánh dấu *</font></font></p>
                                    <h6 class="rating-title-2 mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đánh giá của bạn</font></font></h6>
                                    <div class="rating_list mb-4">
                                        <div class="review_info">
                                            <div class="product-rating mb-3">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End RAting Area -->
                                <div class="comments-area comments-reply-area">
                                    <div class="row">
                                        <div class="col-lg-12 col-custom">
                                            <form action="#" class="comment-form-area">
                                                <div class="row comment-input">
                                                    <div class="col-md-6 col-custom comment-form-author mb-3">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                                        <input type="text" required="required" name="Name">
                                                    </div>
                                                    <div class="col-md-6 col-custom comment-form-emai mb-3">
                                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Email </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                                        <input type="text" required="required" name="email">
                                                    </div>
                                                </div>
                                                <div class="comment-form-comment mb-3">
                                                    <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bình luận</font></font></label>
                                                    <textarea class="comment-notes" required="required"></textarea>
                                                </div>
                                                <div class="comment-form-submit">
                                                    <button class="btn flosun-button secondary-btn rounded-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nộp</font></font></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- End Single Content -->
                        </div>
                        <div class="tab-pane fade" id="connect-3" role="tabpanel" aria-labelledby="contact-tab">
                            <div class="shipping-policy">
                                <h4 class="title-3 mb-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chính sách vận chuyển của cửa hàng chúng tôi</font></font></h4>
                                <p class="desc-content mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. </font><font style="vertical-align: inherit;">Với điều kiện tối thiểu là có thể thực hiện được, điều này sẽ không thể thực hiện được khi bạn bị lobortis lobortis và không có đủ tiền sau mỗi giao dịch. </font><font style="vertical-align: inherit;">Duis autem vel eum iriure dolor in hendrerit in vulputate</font></font></p>
                                <ul class="policy-list mb-2">
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1-2 ngày làm việc (Thường là vào cuối ngày)</font></font></li>
                                    <li><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đảm bảo hoàn tiền trong 30 ngày</font></font></a></li>
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hỗ trợ trực tiếp 24/7</font></font></li>
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">odio dignissim qui blandit praesent</font></font></li>
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">luptatum zzril delenit augue duis dolore</font></font></li>
                                    <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">te feugait nulla facilisi.</font></font></li>
                                </ul>
                                <p class="desc-content mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nam tự do tạm thời kiêm soluta nobis eleifend tùy chọn congue nihil imperdiet doming id quod mazim placerat facer possim assum. </font><font style="vertical-align: inherit;">Typi non-habent claritatem insitam; </font><font style="vertical-align: inherit;">est usus legentis in iis qui facit eorum</font></font></p>
                                <p class="desc-content mb-2">claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius. Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per</p>
                                <p class="desc-content mb-2">seacula quarta decima et quinta decima. Eodem modo typi, qui nunc nobis videntur parum clari, fiant sollemnes in futurum.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="connect-4" role="tabpanel" aria-labelledby="review-tab">
                            <div class="size-tab table-responsive-lg">
                                <h4 class="title-3 mb-4">Size Chart</h4>
                                <table class="table border">
                                    <tbody>
                                        <tr>
                                            <td class="cun-name"><span>UK</span></td>
                                            <td>18</td>
                                            <td>20</td>
                                            <td>22</td>
                                            <td>24</td>
                                            <td>26</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>European</span></td>
                                            <td>46</td>
                                            <td>48</td>
                                            <td>50</td>
                                            <td>52</td>
                                            <td>54</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>usa</span></td>
                                            <td>14</td>
                                            <td>16</td>
                                            <td>18</td>
                                            <td>20</td>
                                            <td>22</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Australia</span></td>
                                            <td>28</td>
                                            <td>10</td>
                                            <td>12</td>
                                            <td>14</td>
                                            <td>16</td>
                                        </tr>
                                        <tr>
                                            <td class="cun-name"><span>Canada</span></td>
                                            <td>24</td>
                                            <td>18</td>
                                            <td>14</td>
                                            <td>42</td>
                                            <td>36</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Product Main Area End -->
    <!--Product Area Start-->
    <div class="product-area mt-text-3">
        <div class="container custom-area-2 overflow-hidden">
            <div class="row">
                <!--Section Title Start-->
                <div class="col-12 col-custom">
                    <div class="section-title text-center mb-30">
                        <span class="section-title-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hợp thời trang nhất</font></font></span>
                        <h3 class="section-title-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm nổi bật</font></font></h3>
                    </div>
                </div>
                <!--Section Title End-->
            </div>
            <div class="row product-row">
                <div class="col-12 col-custom">
                    <div class="product-slider swiper-container anime-element-multi swiper-container-initialized swiper-container-horizontal">
                        <div class="swiper-wrapper" id="swiper-wrapper-4a821b5efb443b13" aria-live="polite" style="transform: translate3d(0px, 0px, 0px);">
                            <div class="single-item swiper-slide swiper-slide-active" role="group" aria-label="1/6" style="width: 235.333px; margin-right: 10px;">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php">
                                            <img src="assets/images/product/1.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/2.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <span class="onsale"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Doanh thu!</font></font></span>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.php" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.php" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Lục bình trắng</font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide swiper-slide-next" role="group" aria-label="2/6" style="width: 235.333px; margin-right: 10px;">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php">
                                            <img src="assets/images/product/5.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/6.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.php" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.php" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bó hoa hồng trắng</font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide" role="group" aria-label="3/6" style="width: 235.333px; margin-right: 10px;">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php">
                                            <img src="assets/images/product/7.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/8.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.php" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.php" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa phong lan que đỏ</font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide" role="group" aria-label="4/6" style="width: 235.333px; margin-right: 10px;">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php">
                                            <img src="assets/images/product/3.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/4.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.php" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.php" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bó hoa nở hoa</font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide" role="group" aria-label="5/6" style="width: 235.333px; margin-right: 10px;">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php">
                                            <img src="assets/images/product/8.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/7.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.php" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.php" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
                                        <div class="product-title">
                                            <h4 class="title-2"> <a href="product-details.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoa nhài màu trắng</font></font></a></h4>
                                        </div>
                                        <div class="product-rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                        <div class="price-box">
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                            <div class="single-item swiper-slide" role="group" aria-label="6/6" style="width: 235.333px; margin-right: 10px;">
                                <!--Single Product Start-->
                                <div class="single-product position-relative mb-30">
                                    <div class="product-image">
                                        <a class="d-block" href="product-details.php">
                                            <img src="assets/images/product/2.jpg" alt="" class="product-image-1 w-100">
                                            <img src="assets/images/product/1.jpg" alt="" class="product-image-2 position-absolute w-100">
                                        </a>
                                        <div class="add-action d-flex flex-column position-absolute">
                                            <a href="compare.php" title="So sánh">
                                                <i class="lnr lnr-sync" data-toggle="tooltip" data-placement="left" aria-label="So sánh" data-bs-original-title="Compare"></i>
                                            </a>
                                            <a href="wishlist.php" title="Thêm vào danh sách yêu thích">
                                                <i class="lnr lnr-heart" data-toggle="tooltip" data-placement="left" aria-label="Danh sách yêu thích" data-bs-original-title="Wishlist"></i>
                                            </a>
                                            <a href="#exampleModalCenter" title="Xem lướt qua" data-bs-toggle="modal" data-bs-target="#exampleModalCenter">
                                                <i class="lnr lnr-eye" data-toggle="tooltip" data-placement="left" aria-label="Xem lướt qua" data-bs-original-title="Quick View"></i>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="product-content">
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
                                            <span class="regular-price "><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$80,00</font></font></span>
                                            <span class="old-price"><del><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$90,00</font></font></del></span>
                                        </div>
                                        <a href="cart.php" class="btn product-cart"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thêm vào giỏ hàng</font></font></a>
                                    </div>
                                </div>
                                <!--Single Product End-->
                            </div>
                        </div>
                        <!-- Slider pagination -->
                        <div class="swiper-pagination default-pagination swiper-pagination-clickable swiper-pagination-bullets"><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 3"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
                </div>
            </div>
        </div>
    </div>
    <!--Product Area End-->
    <!--Footer Area Start-->
    <?php 
        require "Layout-Chung/footer.php";
    ?>
    <!--Footer Area End-->

    <!-- Modal -->
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
                                            <h4 class="title">Product dummy name</h4>
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
                                            <span>1 Review</span>
                                        </div>
                                        <p class="desc-content">we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame bel...</p>
                                        <form class="d-flex flex-column w-100" action="#">
                                            <div class="form-group">
                                                <select class="form-control nice-select w-100" style="display: none;">
                                                    <option>S</option>
                                                    <option>M</option>
                                                    <option>L</option>
                                                    <option>XL</option>
                                                    <option>XXL</option>
                                                </select><div class="nice-select form-control w-100" tabindex="0"><span class="current">S</span><ul class="list"><li data-value="S" class="option selected">S</li><li data-value="M" class="option">M</li><li data-value="L" class="option">L</li><li data-value="XL" class="option">XL</li><li data-value="XXL" class="option">XXL</li></ul></div>
                                            </div>
                                        </form>
                                        <div class="quantity-with-btn">
                                            <div class="quantity">
                                                <div class="cart-plus-minus">
                                                    <input class="cart-plus-minus-box" name="soluong" value="0" type="text">
                                                    <div class="dec qtybutton">-</div>
                                                    <div class="inc qtybutton">+</div>
                                                    <div class="dec qtybutton"><i class="fa fa-minus"></i></div>
                                                    <div class="inc qtybutton"><i class="fa fa-plus"></i></div>
                                                <div class="dec qtybutton"><i class="fa fa-minus"></i></div><div class="inc qtybutton"><i class="fa fa-plus"></i></div></div>
                                            </div>
                                            <div class="add-to_btn">
                                                <a class="btn product-cart button-icon flosun-button dark-btn" href="cart.php">Add to cart</a>
                                                <a class="btn flosun-button secondary-btn rounded-0" href="wishlist.php">Add to wishlist</a>
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
    <script src="assets/js/main.js"></script><div id="goog-gt-tt" class="VIpgJd-yAWNEb-L7lbkb skiptranslate" style="border-radius: 12px; margin: 0 0 0 -23px; padding: 0; font-family: 'Google Sans', Arial, sans-serif;" data-id=""><div id="goog-gt-vt" class="VIpgJd-yAWNEb-hvhgNd"><div class=" VIpgJd-yAWNEb-hvhgNd-l4eHX-i3jM8c"><img src="https://fonts.gstatic.com/s/i/productlogos/translate/v14/24px.svg" width="24" height="24" alt=""></div><div class=" VIpgJd-yAWNEb-hvhgNd-k77Iif-i3jM8c"><div class="VIpgJd-yAWNEb-hvhgNd-IuizWc" dir="ltr">Văn bản gốc</div><div id="goog-gt-original-text" class="VIpgJd-yAWNEb-nVMfcd-fmcmS VIpgJd-yAWNEb-hvhgNd-axAV1"></div></div><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid ltr"><div class="VIpgJd-yAWNEb-hvhgNd-N7Eqid-B7I4Od ltr" dir="ltr"><div class="VIpgJd-yAWNEb-hvhgNd-UTujCb">Đánh giá bản dịch này</div><div class="VIpgJd-yAWNEb-hvhgNd-eO9mKe">Ý kiến phản hồi của bạn sẽ được dùng để góp phần cải thiện Google Dịch</div></div><div class="VIpgJd-yAWNEb-hvhgNd-xgov5 ltr"><button id="goog-gt-thumbUpButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Bản dịch tốt" aria-label="Bản dịch tốt" aria-pressed="false"><span id="goog-gt-thumbUpIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7H2v13h16c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM7 18H4V9h3v9zm14-7l-3 7H9V8l4.34-4.34L12 9h9v2z"></path></svg></span><span id="goog-gt-thumbUpIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M21 7h-6.31l.95-4.57.03-.32c0-.41-.17-.79-.44-1.06L14.17 0S7.08 6.85 7 7v13h11c.83 0 1.54-.5 1.84-1.22l3.02-7.05c.09-.23.14-.47.14-.73V9c0-1.1-.9-2-2-2zM5 7H1v13h4V7z"></path></svg></span></button><button id="goog-gt-thumbDownButton" type="button" class="VIpgJd-yAWNEb-hvhgNd-bgm6sf" title="Bản dịch kém" aria-label="Bản dịch kém" aria-pressed="false"><span id="goog-gt-thumbDownIcon"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7h5V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zM17 6h3v9h-3V6zM3 13l3-7h9v10l-4.34 4.34L12 15H3v-2z"></path></svg></span><span id="goog-gt-thumbDownIconFilled"><svg width="24" height="24" viewBox="0 0 24 24" focusable="false" class="VIpgJd-yAWNEb-hvhgNd-THI6Vb NMm5M"><path d="M3 17h6.31l-.95 4.57-.03.32c0 .41.17.79.44 1.06L9.83 24s7.09-6.85 7.17-7V4H6c-.83 0-1.54.5-1.84 1.22l-3.02 7.05c-.09.23-.14.47-.14.73v2c0 1.1.9 2 2 2zm16 0h4V4h-4v13z"></path></svg></span></button></div></div><div id="goog-gt-votingHiddenPane" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><form id="goog-gt-votingForm" action="//translate.googleapis.com/translate_voting?client=te_lib" method="post" target="votingFrame" class="VIpgJd-yAWNEb-hvhgNd-aXYTce"><input type="text" name="sl" id="goog-gt-votingInputSrcLang"><input type="text" name="tl" id="goog-gt-votingInputTrgLang"><input type="text" name="query" id="goog-gt-votingInputSrcText"><input type="text" name="gtrans" id="goog-gt-votingInputTrgText"><input type="text" name="vote" id="goog-gt-votingInputVote"></form><iframe name="votingFrame" frameborder="0"></iframe></div></div></div>






</body>