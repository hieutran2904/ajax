<?php
include_once '../include/tail.php';
//xu ly them vao danh sach yeu thich
?>

<?php
if ($_POST['product_id'] > 0) {
    echo '<script type="text/javascript"> 
            success_toast("Sản phẩm đã được thêm vào danh sách yêu thích", "THÀNH CÔNG")
            </script>';
} else {
    echo '<script type="text/javascript"> 
        warning_toast("Bạn chưa đăng nhập", "CẢNH BÁO")
        </script>';
}
?>

