<?php 
	session_start();
	include 'header.php';

	
	$payment_method = $_GET['payment_method']; 
	$product_price = $_GET['price']; 

	if($payment_method === 'cash_on_delivary'){
		echo "Thanks for order.You have to pay ".$product_price." TK after receive your product. Thank you.";
	}

	if($payment_method === 'bkash'){
		echo "You selected $payment_method as your payment method, and the price of the product is $product_price TK.<br>";
		?>
		<br><br>
		<form method="post" novalidate>
		<input type="number" name="bkashNumber" placeholder="Enter Bkash Number:"><br><br>
		<input type="number" name="price" placeholder="Enter amount"><br><br>
		<input type="submit" name="confirm" value="Confirm">
		</form>
		<?php
	}
	if(isset($_POST['confirm']))
	{
		echo "Thanks for your payment. You will get your product on time.";
	}

	include 'footer.php';


?>