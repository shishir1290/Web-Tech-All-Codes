<?php
  session_start();

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

  // Get the product ID from the URL parameter
  if (isset($_GET['productId'])) {
      $product_id = $_GET['productId'];
  } else {
      die("Product ID not specified.");
  }

  // Get the product details from the database
  $sql = "SELECT * FROM product WHERE productId = $product_id";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
      die("Error: " . mysqli_error($conn));
  }

  if (mysqli_num_rows($result) == 0) {
      die("Product not found.");
  }

  $product = mysqli_fetch_assoc($result);
  $details = $product['productDetails'];
  $product_price = $product['price'];
  $product_name = $product['productName'];

  

    echo "
    <h1>".$product['productName']."</h1>
    
    <p><b>Price: ".$product_price." TK</b></p>
    <img src='". $product['pic']."' alt='". $product['productName']."' height='400' width='400'>
    <p>".nl2br($details)."</p>";
    
      echo '<form method="post" novalidate>
            <input type="submit" name="buy" value="Buy Now">
            </form>';

      // echo "<a href='cart.php?product_id=$product_id&product_name=$product_name&product_price= $product_price'>Add to cart</a>";
        echo '<form action="cart.php" method="POST">
                <input type="hidden" name="product_id" value="'.$product_id.'">
                <input type="submit" value="Add to cart">
              </form>';


      if (isset($_POST['buy'])) {
          $customerName = $_SESSION['username'];
          $sql = "SELECT userId FROM userinfo WHERE username = '$customerName'";
          $result = mysqli_query($conn, $sql);

          $row = mysqli_fetch_assoc($result);
          $customerId = $row['userId'];
          
          if(isset($customerName)){
            $sql = "INSERT INTO orderinfo (customerId,customerName, product_id, productPrice) VALUES ($customerId,'$customerName',           $product_id, $product_price)";
            if (mysqli_query($conn, $sql)) {
                echo "Order placed successfully!";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
          }
          else{
            header("Location: homepage.php?msg1="."Please Login Fisrt.");
          }
      }
      mysqli_close($conn);
    


  include 'footer.php';
?>
