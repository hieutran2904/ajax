<?php
$arrProduct = [
    'id' => 10
];
if (isset($_POST['quick-view-btn'])) {
    header('Location: quick-view.php?id=' . $_POST['productId']);
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"> -->
    <title>Demo Ajax</title>


</head>

<body>
    <h1>demo ajax</h1>
    <!-- <form id="add-to-cart-form">
        <input type="text" name="productId" id="product_id" value="123">
        <input type="text" class="product_name" value="ao thun">
        <input type="text" class="product_price" value="10.00">
        <input type="text" class="product_qty" value="1">
        <input type="text" class="product_desc" value="ao thun mua he">
        <button type="submit" id="add-to-cart-btn">Add to Cart</button>
        <button type="submit" id="add-to-wishlist-btn">Add to Wishlist</button>
    </form> -->
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo '<form id="add-to-cart-form">
            <input type="text" name="productId' . $i . '" id="product_id_' . $i . '" value="' . $i . '">
            <input type="text" class="product_name" value="ao thun">
            <input type="text" class="product_price" value="10.00">
            <input type="text" class="product_qty" value="1">
            <input type="text" class="product_desc" value="ao thun mua he">
            <button type="submit" class="btnAddAction" id="add-to-cart-btn" data-itemid=' . $i . '>Add to Cart</button>
            <button type="submit" id="add-to-wishlist-btn-' . $i . '">Add to Wishlist</button>
        </form>';
    }
    ?>

    <div style="margin-top: 50px;" id="cart-count">
    <div class="result"></div>

    </div>

    <link rel="stylesheet" href="css/toastr.css">
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/toastr.min.js"></script>
    <script src="js/plugins.min.js"></script>
    <script src="js/nouislider.min.js"></script>
    <script src="js/main.js"></script>


    <script src="./node_modules/jquery/dist/jquery.js"></script>
    <script src="./node_modules/jquery/dist/jquery.min.js"></script>

    <script>
        // jQuery(document).on('click', 'button.btnAddAction', function() {
        //     var item_id = jQuery(this).data('itemid');
        //     // var qty = jQuery('#qty-' + item_id).val();
        //     // var sku = jQuery(this).data('sku');
        //     //var product_name = jQuery(this).data('proname');
        //     jQuery.ajax({
        //         type: 'POST',
        //         url: './handle/cart.php',
        //         data: {
        //             product_id: item_id,
        //             quantity: qty,
        //             sku: sku
        //         },
        //         success: function(data) {
        //             jQuery('#cart-count').html(data);
        //             toastr.info('đã được thêm vào giỏ hàng', 'THÀNH CÔNG');
        //         }
        //     });
        // });
        $(document).ready(function() {
            $(".btnAddAction").click(function(e) {
                e.preventDefault();
                // var product_id = $(this).data('itemid');
                // var product_id = $('#product_id').val();
                // var product_name = $('.product_name').val();
                // var product_price = $('.product_price').val();
                // var product_qty = $('.product_qty').val();
                // var product_desc = $('.product_desc').val();
                $.ajax({
                    url: './handle/cart.php',
                    type: 'POST',
                    data: {
                        product_id: $(this).data('itemid'),
                        // product_name: product_name,
                        // product_price: product_price,
                        // product_qty: product_qty,
                        // product_desc: product_desc
                    },
                    success: function(data) {
                        $('.result').html(data);
                    }
                });
            });

            $('#add-to-wishlist-btn').click(function(e) {
                e.preventDefault();
                var product_id = $('#product_id').val();
                var product_name = $('.product_name').val();
                var product_price = $('.product_price').val();
                var product_qty = $('.product_qty').val();
                var product_desc = $('.product_desc').val();
                $.ajax({
                    url: './handle/wishlist.php',
                    type: 'POST',
                    data: {
                        product_id: product_id,
                        product_name: product_name,
                        product_price: product_price,
                        product_qty: product_qty,
                        product_desc: product_desc
                    },
                    success: function(data) {
                        $('.result').html(data);
                    }
                });
            });
        });
    </script>
</body>

</html>