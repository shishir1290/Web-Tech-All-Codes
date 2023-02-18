<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Set Cookie</title>
</head>
<body>
	<h1>Cookies</h1>
	<?php
		$value = "color";
		$color = $_POST['color'];
		setcookie($value, $color, time() + $_POST['expires'], "/"); 
	?>
	<?php
		
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		 if(empty($color)){
		 	header("Location: cookie.php");
		 }
		 else{
		 	echo '<label for="expire">Expire on:</label> ';
		 	header("Location: cookie.php?color="."$color");
		 	

		 }
		}
		else{
			echo " Invalid Request";
		}
		?>

</body>
</html>