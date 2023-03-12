
<?php
session_start();
include 'header.php';

if(isset($_COOKIE['cart'])) {
    $cart_items = $_COOKIE['cart'];
    
    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gore gore";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    
    foreach($cart_items as $product_id => $product) {
        $product_name = mysqli_real_escape_string($conn, $product['name']);
        $product_price = mysqli_real_escape_string($conn, $product['price']);
        $query = "SELECT * FROM product WHERE productId = '$product_id'";
        $result = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($result);

        echo '
        <td><img src="'.$row['pic'].'" height="200" width="200"></td>
        <td>'.$row['productName'].'('.$row['price'].') </td>
        <td> </td>';
        echo '<td><button><a href="productInfo.php?productId='.$product_id.'" style="text-decoration:none;">Buy Now</a></button></td>';
    }
    
    mysqli_close($conn);
} else {
    echo "Your cart is empty.";
}

include 'footer.php';
?>

