
<?php
if(isset($_POST['add_to_cart'])) {
    // Get product details
    $product_id = $_POST['product_id'];
    $product_name = $_POST['product_name'];
    $product_price = $_POST['product_price'];
    
    // Set cart item as a cookie
    setcookie("cart[$product_id][name]", $product_name,time() + (86400 * 30));
    setcookie("cart[$product_id][price]", $product_price,time() + (86400 * 30));
    
    header("Location: setCart.php");
    exit;
}
?>

