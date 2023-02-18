<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Destroy Cookies</title>
</head>
<body>

	<?php
	setcookie("color", "", time() - 3600); 
	header("Location: cookie.php?msg="."Cookie is destroyed")
	?>

</body>
</html>