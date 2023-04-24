<?php
include_once '../include/tail.php';
//include_once '../include/tail.php';
//xu ly them vao gio hang
include '../Controller/Toastr.php';
$toastr = new Toastr();
$toastr->info_toast("Sản phẩmđã được thêm vào giỏ hàng", "THÀNH CÔNG");

echo $_POST['product_id'];
?>
