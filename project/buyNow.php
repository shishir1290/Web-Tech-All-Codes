<?php
session_start(); // Start a session to store the selected payment method
include 'header.php';

echo "<h1 align='center'>Select Payment Method</h1>";

$productId = $_GET['productId'];
$servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "gore gore";
  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

  // Check the connection
  if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
  }

  // Get the product ID from the URL parameter
  if (isset($_GET['productId'])) {
      $product_id = $_GET['productId'];
  } else {
      die("Product ID not specified.");
  }

  
  $product_Price = $_GET['product_price'];
  $product_id = $_GET['productId'];
  $customerId = $_GET['customerId'];
  $customerName = $_GET['customerName'];
  $prodictPic = $_GET['pic'];
  $product_name = $_GET['product_name'];


  echo "
    <h1>".$product_name."</h1>
    
    <p><b>Price: ".$product_Price." TK</b></p>
    <img src='". $prodictPic."' alt='". $product_name."' height='150' width='150'>";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  
  if (isset($_POST['payment_method'])) {
    $payment_method = $_POST['payment_method'];
    $_SESSION['payment_method'] = $_POST['payment_method'];
    $sql = "INSERT INTO orderinfo (customerId,customerName, product_id, productPrice, payment_method  ) VALUES ($customerId,'$customerName',           $product_id, $product_Price, '$payment_method')";
    if (mysqli_query($conn, $sql)) {
            header("Location: checkout.php?payment_method=$payment_method&price=$product_Price");
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }
    
    // exit;
  } else {
    $error = 'Please select a payment method.';
  }
}
?>

<!DOCTYPE html>
<html>
<head>
  <title>Select Payment Method</title>
</head>
<body>

  <?php if (isset($error)): ?>
    <p style="color: red;"><?php echo $error; ?></p>
  <?php endif; ?>

  <form method="POST" novalidate>
    <p>
      <label>
        <input type="radio" name="payment_method" value="cash_on_delivary" <?php echo ($_SESSION['payment_method'] ?? '') === 'cash_on_delivary' ? 'checked' : ''; ?>>
        Cash on delivary
      </label>
    </p>
    <p>
      <label>
        <input type="radio" name="payment_method" value="bkash" <?php echo ($_SESSION['payment_method'] ?? '') === 'bkash' ? 'checked' : ''; ?>>
        Bkash
      </label>
    </p>
    <p>
      <button type="submit">Continue to Checkout</button>
    </p>
  </form>

</body>
</html>

<?php 
  include 'footer.php';
?>