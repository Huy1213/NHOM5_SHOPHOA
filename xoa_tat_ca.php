<?php
    session_start();

    // Xóa toàn bộ sản phẩm khỏi giỏ hàng bằng cách gán giỏ hàng bằng một mảng rỗng
    $_SESSION['cart_items'] = array();

    // Chuyển hướng người dùng trở lại trang giỏ hàng sau khi xóa tất cả sản phẩm
    header("Location: cart.php");
    exit; // Dừng kịch bản để chắc chắn không có mã lệnh PHP nào được thực thi sau khi chuyển hướng
?>