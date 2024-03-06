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

<link type="text/css" rel="stylesheet" charset="UTF-8" href="https://www.gstatic.com/_/translate_http/_/ss/k=translate_http.tr.qhDXWpKopYk.L.W.O/am=wA/d=0/rs=AN8SPfq5gedF4FIOWZgYyMCNZA5tU966ig/m=el_main_css">
</head>
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
                        <h3 class="title-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tài khoản của tôi</font></font></h3>
                        <ul>
                            <li><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tài khoản của tôi</font></font></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- my account wrapper start -->
    <div class="my-account-wrapper mt-no-text">
        <div class="container container-default-2 custom-area">
            <div class="row">
                <div class="col-lg-12 col-custom">
                    <!-- My Account Page Start -->
                    <div class="myaccount-page-wrapper">
                        <!-- My Account Tab Menu Start -->
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-custom">
                                <div class="myaccount-tab-menu nav" role="tablist">
                                    <a href="#dashboad" class="active" data-bs-toggle="tab" aria-selected="true" role="tab"><i class="fa fa-dashboard"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                        bảng điều khiển</font></font></a>
                                    <a href="#orders" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-cart-arrow-down"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn đặt hàng</font></font></a>
                                    <a href="#download" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-cloud-download"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải xuống</font></font></a>
                                    <a href="#payment-method" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-credit-card"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phương thức thanh toán</font></font></a>
                                    <a href="#address-edit" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-map-marker"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ</font></font></a>
                                    <a href="#account-info" data-bs-toggle="tab" aria-selected="false" tabindex="-1" role="tab"><i class="fa fa-user"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi tiết tài khoản</font></font></a>
                                    <a href="login.php"><i class="fa fa-sign-out"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng xuất</font></font></a>
                                </div>
                            </div>
                            <!-- My Account Tab Menu End -->

                            <!-- My Account Tab Content Start -->
                            <div class="col-lg-9 col-md-8 col-custom">
                                <div class="tab-content" id="myaccountContent">
                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade show active" id="dashboad" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">bảng điều khiển</font></font></h3>
                                            <div class="welcome">
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xin chào, </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alex Aya</font></font></strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> (Nếu không phải </font></font><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Aya!</font></font></strong><a href="login-register.php" class="logout"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đăng xuất</font></font></a><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">)</font></font></p>
                                            </div>
                                            <p class="mb-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Từ bảng điều khiển tài khoản của bạn. </font><font style="vertical-align: inherit;">bạn có thể dễ dàng kiểm tra và xem các đơn đặt hàng gần đây của mình, quản lý địa chỉ giao hàng và thanh toán cũng như chỉnh sửa chi tiết mật khẩu và tài khoản của mình.</font></font></p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="orders" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn đặt hàng</font></font></h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đặt hàng</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trạng thái</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng cộng</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hoạt động</font></font></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">1</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày 22 tháng 8 năm 2022</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chưa giải quyết</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$3000</font></font></td>
                                                            <td><a href="cart.php" class="btn flosun-button secondary-btn theme-color  rounded-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem</font></font></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">2</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày 22 tháng 7 năm 2022</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tán thành</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$200</font></font></td>
                                                            <td><a href="cart.php" class="btn flosun-button secondary-btn theme-color  rounded-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem</font></font></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">3</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày 12 tháng 6 năm 2022</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đang chờ</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">$990</font></font></td>
                                                            <td><a href="cart.php" class="btn flosun-button secondary-btn theme-color  rounded-0"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Xem</font></font></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="download" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải xuống</font></font></h3>
                                            <div class="myaccount-table table-responsive text-center">
                                                <table class="table table-bordered">
                                                    <thead class="thead-light">
                                                        <tr>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Hết hạn</font></font></th>
                                                            <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải xuống</font></font></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Haven - Mẫu PSD bất động sản miễn phí</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày 22 tháng 8 năm 2022</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đúng</font></font></td>
                                                            <td><a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-cloud-download mr-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải tập tin</font></font></a></td>
                                                        </tr>
                                                        <tr>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">HasTech - Mẫu hồ sơ kinh doanh</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ngày 12 tháng 9 năm 2022</font></font></td>
                                                            <td><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Không bao giờ</font></font></td>
                                                            <td><a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-cloud-download mr-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tải tập tin</font></font></a></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="payment-method" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phương thức thanh toán</font></font></h3>
                                            <p class="saved-message"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bạn chưa thể lưu phương thức thanh toán của mình.</font></font></p>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="address-edit" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ thanh toán</font></font></h3>
                                            <address>
                                                <p><strong><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Alex Aya</font></font></strong></p>
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chợ 1234 ##, Suite 900 </font></font><br><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                            Lorem Ipsum, ## 12345</font></font></p>
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Di động: (123) 123-456789</font></font></p>
                                            </address>
                                            <a href="#" class="btn flosun-button secondary-btn theme-color  rounded-0"><i class="fa fa-edit mr-2"></i><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">sửa địa chỉ</font></font></a>
                                        </div>
                                    </div>
                                    <!-- Single Tab Content End -->

                                    <!-- Single Tab Content Start -->
                                    <div class="tab-pane fade" id="account-info" role="tabpanel">
                                        <div class="myaccount-content">
                                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi tiết tài khoản</font></font></h3>
                                            <div class="account-details-form">
                                                <form action="#">
                                                    <div class="row">
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="first-name" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên đầu tiên</font></font></label>
                                                                <input type="text" id="first-name" placeholder="First Name">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-custom">
                                                            <div class="single-input-item mb-3">
                                                                <label for="last-name" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ</font></font></label>
                                                                <input type="text" id="last-name" placeholder="Last Name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="display-name" class="required mb-1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên hiển thị</font></font></label>
                                                        <input type="text" id="display-name" placeholder="Display Name">
                                                    </div>
                                                    <div class="single-input-item mb-3">
                                                        <label for="email" class="required mb-1">Email Addres</label>
                                                        <input type="email" id="email" placeholder="Email Address">
                                                    </div>
                                                    <fieldset>
                                                        <legend>Password change</legend>
                                                        <div class="single-input-item mb-3">
                                                            <label for="current-pwd" class="required mb-1">Current Password</label>
                                                            <input type="password" id="current-pwd" placeholder="Current Password">
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="new-pwd" class="required mb-1">New Password</label>
                                                                    <input type="password" id="new-pwd" placeholder="New Password">
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-6 col-custom">
                                                                <div class="single-input-item mb-3">
                                                                    <label for="confirm-pwd" class="required mb-1">Confirm Password</label>
                                                                    <input type="password" id="confirm-pwd" placeholder="Confirm Password">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                    <div class="single-input-item single-item-button">
                                                        <button class="btn flosun-button secondary-btn theme-color  rounded-0">Save Changes</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div> <!-- Single Tab Content End -->
                                </div>
                            </div> <!-- My Account Tab Content End -->
                        </div>
                    </div> <!-- My Account Page End -->
                </div>
            </div>
        </div>
    </div>
    <!-- my account wrapper end -->
    <!--Footer Area Start-->
    <?php 
        require "Layout-Chung/footer.php";
    ?>
    <!--Footer Area End-->

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