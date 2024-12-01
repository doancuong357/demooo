<p>Giỏ Hàng:
    <?php
    if(isset($_SESSION['dangky'])){
        echo 'xin chào <span style="color:red">'. $_SESSION['dangky'] . '</span><br>';
    }
    ?>
</p>
<?php
// Kiểm tra nếu giỏ hàng chưa được khởi tạo
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

// Thêm sản phẩm vào giỏ hàng
if (isset($_POST['add_to_cart'])) {
    $product_id = $_POST['product_id'];
    $quantity = $_POST['quantity'];

    // Kiểm tra xem sản phẩm đã có trong giỏ hàng chưa
    if (isset($_SESSION['cart'][$product_id])) {
        $_SESSION['cart'][$product_id] += $quantity; // Cập nhật số lượng
    } else {
        $_SESSION['cart'][$product_id] = $quantity; // Thêm mới sản phẩm
    }
}

// Cập nhật số lượng sản phẩm trong giỏ hàng
if (isset($_POST['update_cart'])) {
    foreach ($_POST['quantity'] as $product_id => $quantity) {
        if ($quantity == 0) {
            unset($_SESSION['cart'][$product_id]); // Xóa sản phẩm nếu số lượng là 0
        } else {
            $_SESSION['cart'][$product_id] = $quantity; // Cập nhật số lượng
        }
    }
}

// Hàm hiển thị giỏ hàng
function display_cart() {
    if (empty($_SESSION['cart'])) {
        echo " Giỏ hàng của bạn trống.";
    } else {
        echo "<h2>Giỏ hàng của bạn</h2>";
        echo "<form method='POST' action='giohang.php'>";
        echo "<table border='1'>";
        echo "<tr><th>Sản phẩm</th><th>Số lượng</th><th>Thao tác</th></tr>";
        
        foreach ($_SESSION['cart'] as $product_id => $quantity) {
            // Giả sử bạn có một hàm lấy thông tin sản phẩm theo ID
            $product = get_product($product_id);
            echo "<tr>";
            echo "<td>{$product['name']}</td>";
            echo "<td><input type='number' name='quantity[$product_id]' value='$quantity' min='0'></td>";
            echo "<td><a href='giohang.php?remove=$product_id'>Xóa</a></td>";
            echo "</tr>";
        }

        echo "</table>";
        echo "<input type='submit' name='update_cart' value='Cập nhật giỏ hàng'>";
        echo "</form>";
    }
}

// Xóa sản phẩm khỏi giỏ hàng
if (isset($_GET['remove'])) {
    $product_id = $_GET['remove'];
    unset($_SESSION['cart'][$product_id]);
}

// Hàm giả để lấy thông tin sản phẩm
function get_product($id) {
    // Đây chỉ là một ví dụ, bạn nên lấy dữ liệu từ cơ sở dữ liệu
    $products = [
        1 => ['name' => 'Áo thun', 'price' => 200000],
        2 => ['name' => 'Quần jeans', 'price' => 300000],
        // Thêm sản phẩm khác ở đây
    ];
    return isset($products[$id]) ? $products[$id] : null;
}

// Hiển thị giỏ hàng
display_cart();
?>
