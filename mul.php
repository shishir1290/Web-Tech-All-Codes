<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiplication</title>
</head>
<body>
	<h1 align="center">Multiplicaltion</h1>
	<form align="center">
		<input type="text" name="num">
		<input type="submit">
		<br><br>

	</form>
	<?php
	$val = $_GET['num'];
	echo "<table border=1 align=center>";
	echo "<center><b>The multiplication of $val</b></center>";
	echo "<br>";
	for($i =1;$i<=10;$i++)
	{
		$result = $val*$i;
		echo "<tr> <td>$val</td> <td>*</td> <td>$i</td> <td>=</td> <td>$result</td></tr>";
	}
	?>

</body>
</html>