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
                        <h3 class="title-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thủ tục thanh toán</font></font></h3>
                        <ul>
                            <li><a href="index.php"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Trang chủ</font></font></a></li>
                            <li><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thủ tục thanh toán</font></font></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End Here -->
    <!-- Checkout Area Start Here -->
    <div class="checkout-area mt-no-text">
        <div class="container custom-container">
            <div class="row">
                <div class="col-12 col-custom">
                    <div class="coupon-accordion">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Phản hồi khách hàng? </font></font><span id="showlogin"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nhấn vào đây để đăng nhập</font></font></span></h3>
                        <div id="checkout-login" class="coupon-content">
                            <div class="coupon-info">
                                <p class="coupon-text"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quisque gradida turpis ngồi amet nulla posuere lacinia. </font><font style="vertical-align: inherit;">Cras sed est sit amet ipsum luctus.</font></font></p>
                                <form action="#">
                                    <p class="form-row-first">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên người dùng hoặc email </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input type="text">
                                    </p>
                                    <p class="form-row-last">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mật khẩu </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input type="password">
                                    </p>
                                    <p class="form-row">
                                        <input type="checkbox" id="remember_me">
                                        <label for="remember_me"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nhớ tôi</font></font></label>
                                    </p>
                                    <p class="lost-password"><a href="#"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quên mật khẩu?</font></font></a></p>
                                </form>
                            </div>
                        </div>
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Có phiếu giảm giá? </font></font><span id="showcoupon"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bấm vào đây để nhập mã của bạn</font></font></span></h3>
                        <div id="checkout_coupon" class="coupon-checkout-content">
                            <div class="coupon-info">
                                <form action="#">
                                    <p class="checkout-coupon">
                                        <input placeholder="Mã giảm giá" type="text">
                                        <font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"><input class="coupon-inner_btn" value="Áp dụng phiếu giảm giá" type="submit"></font></font></font></font>
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 col-12 col-custom">
                    <form action="#">
                        <div class="checkbox-form">
                            <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Chi tiết thanh toán</font></font></h3>
                            <div class="row">
                                <div class="col-md-12 col-custom">
                                    <div class="country-select clearfix">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quốc gia</font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <select class="myniceselect nice-select wide rounded-0" style="display: none;">
                                            <option data-display="Bangladesh"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></option>
                                            <option value="uk"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">London</font></font></option>
                                            <option value="rou"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rumani</font></font></option>
                                            <option value="fr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">người Pháp</font></font></option>
                                            <option value="de"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Đức</font></font></option>
                                            <option value="aus"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Châu Úc</font></font></option>
                                        </select><div class="nice-select myniceselect wide rounded-0" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></span><ul class="list"><li data-value="Bangladesh" data-display="Bangladesh" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></li><li data-value="uk" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">London</font></font></li><li data-value="rou" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rumani</font></font></li><li data-value="fr" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">người Pháp</font></font></li><li data-value="de" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Đức</font></font></li><li data-value="aus" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Châu Úc</font></font></li></ul></div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên đầu tiên </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên công ty</font></font></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="Địa chỉ đường phố" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <input placeholder="Căn hộ, dãy phòng, căn hộ, v.v. (tùy chọn)" type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thị trấn / Thành phố </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiểu bang / Quận </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã bưu / Zip </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ email </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6 col-custom">
                                    <div class="checkout-form-list">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điện thoại </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input type="text">
                                    </div>
                                </div>
                                <div class="col-md-12 col-custom">
                                    <div class="checkout-form-list create-acc">
                                        <input id="cbox" type="checkbox">
                                        <label for="cbox"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tạo một tài khoản?</font></font></label>
                                    </div>
                                    <div id="cbox-info" class="checkout-form-list create-account">
                                        <p class="mb-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tạo một tài khoản bằng cách nhập thông tin dưới đây. </font><font style="vertical-align: inherit;">Nếu bạn là khách hàng cũ, vui lòng đăng nhập ở đầu trang.</font></font></p>
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mật khẩu tài khoản </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                        <input placeholder="mật khẩu" type="password">
                                    </div>
                                </div>
                            </div>
                            <div class="different-address">
                                <div class="ship-different-title">
                                    <div>
                                        <input id="ship-box" type="checkbox">
                                        <label for="ship-box"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Gửi đến một địa chỉ khác?</font></font></label>
                                    </div>
                                </div>
                                <div id="ship-box-info" class="row mt-2">
                                    <div class="col-md-12 col-custom">
                                        <div class="myniceselect country-select clearfix">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Quốc gia</font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <select class="myniceselect nice-select wide rounded-0" style="display: none;">
                                                <option data-display="Bangladesh"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></option>
                                                <option value="uk"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">London</font></font></option>
                                                <option value="rou"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rumani</font></font></option>
                                                <option value="fr"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">người Pháp</font></font></option>
                                                <option value="de"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Đức</font></font></option>
                                                <option value="aus"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Châu Úc</font></font></option>
                                            </select><div class="nice-select myniceselect wide rounded-0" tabindex="0"><span class="current"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></span><ul class="list"><li data-value="Bangladesh" data-display="Bangladesh" class="option selected"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Bangladesh</font></font></li><li data-value="uk" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">London</font></font></li><li data-value="rou" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Rumani</font></font></li><li data-value="fr" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">người Pháp</font></font></li><li data-value="de" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">nước Đức</font></font></li><li data-value="aus" class="option"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Châu Úc</font></font></li></ul></div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên đầu tiên </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Họ </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tên công ty</font></font></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input placeholder="Địa chỉ đường phố" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <input placeholder="Căn hộ, dãy phòng, căn hộ, v.v. (tùy chọn)" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thị trấn / Thành phố </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiểu bang / Quận </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Mã bưu / Zip </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input placeholder="" type="text">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Địa chỉ email </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input placeholder="" type="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-custom">
                                        <div class="checkout-form-list">
                                            <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Điện thoại </font></font><span class="required"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">*</font></font></span></label>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="order-notes mt-3">
                                    <div class="checkout-form-list checkout-form-list-2">
                                        <label><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Ghi chú đặt hàng</font></font></label>
                                        <textarea id="checkout-mess" cols="30" rows="10" placeholder="Ghi chú về đơn hàng của bạn, ví dụ như ghi chú đặc biệt khi giao hàng."></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-12 col-custom">
                    <div class="your-order">
                        <h3><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đơn hàng của bạn</font></font></h3>
                        <div class="your-order-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th class="cart-product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Sản phẩm</font></font></th>
                                        <th class="cart-product-total"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng cộng</font></font></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiền đình hồi hộp </font></font><strong class="product-quantity"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            × 1</font></font></strong></td>
                                        <td class="cart-product-total text-center"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">£165,00</font></font></span></td>
                                    </tr>
                                    <tr class="cart_item">
                                        <td class="cart-product-name"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tiền đình hồi hộp </font></font><strong class="product-quantity"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                            × 1</font></font></strong></td>
                                        <td class="cart-product-total text-center"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">£165,00</font></font></span></td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr class="cart-subtotal">
                                        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng phụ của giỏ hàng</font></font></th>
                                        <td class="text-center"><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">£215,00</font></font></span></td>
                                    </tr>
                                    <tr class="order-total">
                                        <th><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Tổng số đơn hàng</font></font></th>
                                        <td class="text-center"><strong><span class="amount"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">£215,00</font></font></span></strong></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <div class="payment-method">
                            <div class="payment-accordion">
                                <div id="accordion">
                                    <div class="card">
                                        <div class="card-header" id="#payment-1">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Chuyển khoản trực tiếp.
                                                </font></font></a>
                                            </h5>
                                        </div>
                                        <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. </font><font style="vertical-align: inherit;">Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. </font><font style="vertical-align: inherit;">Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font></font></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-2">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    Thanh toán séc
                                                </font></font></a>
                                            </h5>
                                        </div>
                                        <div id="collapseTwo" class="collapse" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. </font><font style="vertical-align: inherit;">Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. </font><font style="vertical-align: inherit;">Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font></font></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="#payment-3">
                                            <h5 class="panel-title mb-3">
                                                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">
                                                    PayPal
                                                </font></font></a>
                                            </h5>
                                        </div>
                                        <div id="collapseThree" class="collapse" data-parent="#accordion">
                                            <div class="card-body mb-2 mt-2">
                                                <p><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Thực hiện thanh toán trực tiếp vào tài khoản ngân hàng của chúng tôi. </font><font style="vertical-align: inherit;">Vui lòng sử dụng ID đơn hàng của bạn làm tài liệu tham khảo thanh toán. </font><font style="vertical-align: inherit;">Đơn đặt hàng của bạn sẽ không được chuyển cho đến khi tiền đã được xóa trong tài khoản của chúng tôi.</font></font></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="order-button-payment">
                                    <button class="btn flosun-button secondary-btn black-color rounded-0 w-100"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Đặt hàng</font></font></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout Area End Here -->
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