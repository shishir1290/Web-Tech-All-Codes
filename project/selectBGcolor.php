<?php 
	$pageColor = "white";
	if (isset($_COOKIE['bgcolor'])) {
		$pageColor = $_COOKIE['bgcolor'];
	}
?>

<body style="<?php echo "background-color: " . $pageColor; ?>">


	<form action="setBGcolor.php" method="POST" novalidate>	
		<input type="color" name="bgcolor" id="bgcolor" value="#FFFFFF">
		<input type="submit" value="Set color">
	</form>

</body>
