<?php
  session_start();
  if (isset($_COOKIE['product_id'])) {
    $product_id = $_COOKIE['product_id'];
  }

  include 'header.php';

  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "gore gore";
  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

  // Check the connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }
  $sql = "SELECT * FROM product WHERE productId = $product_id";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
      die("Error: " . mysqli_error($conn));
  }

  if (mysqli_num_rows($result) == 0) {
      die("Product not found.");
  }
  $cart = mysqli_fetch_assoc($result);
  echo '<table>
        <tr>
        <td><img src="'.$cart['pic'].'" height="200" width="200"></td>
        <td>'.$cart['productName'].'('.$cart['price'].') </td>
        <td><?td>
        </tr>
        </table>';
  echo '<button><a href="productInfo.php" style="text-decoration:none;">Buy Now</a></button>';
mysqli_close($conn);

?>