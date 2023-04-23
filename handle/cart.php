<?php
// include_once '../include/tail.php';
include_once '../include/tail.php';
//xu ly them vao gio hang

?>

<?php
echo '<script type="text/javascript"> 
            success_toast("Sản phẩm đã được thêm vào giỏ hàng", "THÀNH CÔNG")
            </script>';
echo $_POST['product_id'];
echo $_POST['product_name'];
?>