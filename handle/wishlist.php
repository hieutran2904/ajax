<?php
//include_once '../include/tail.php';
//xu ly them vao danh sach yeu thich
include '../Controller/Toastr.php';
$toastr = new Toastr();
$toastr->success_toast("Sản phẩm đã được thêm vào danh sách yêu thích", "THÀNH CÔNG")
?>

