<?php
    session_start();

    // Kiểm tra xem 'ma_mon' đã được gửi qua phương thức POST chưa
    if(isset($_POST['Ma_Hoa'])) {
        $MaHoa = $_POST['Ma_Hoa']; // Lấy mã sản phẩm cần xóa

        // Kiểm tra xem giỏ hàng có tồn tại không
        if(isset($_SESSION['cart_items']) && !empty($_SESSION['cart_items'])) {
            // Duyệt qua mỗi sản phẩm trong giỏ hàng
            foreach($_SESSION['cart_items'] as $key => $cart_item) {
                // Nếu mã sản phẩm trong giỏ hàng trùng với mã sản phẩm cần xóa, thì xóa sản phẩm đó
                if($cart_item['Ma_Hoa'] == $MaHoa) {
                    unset($_SESSION['cart_items'][$key]); // Xóa sản phẩm khỏi giỏ hàng
                    break; // Dừng vòng lặp sau khi xóa sản phẩm
                }
            }
        }
    }

    // Chuyển hướng người dùng trở lại trang giỏ hàng sau khi xóa sản phẩm
    header("Location: cart.php");
    exit; // Dừng kịch bản để chắc chắn không có mã lệnh PHP nào được thực thi sau khi chuyển hướng
?>
