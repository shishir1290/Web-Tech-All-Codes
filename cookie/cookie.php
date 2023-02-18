<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie</title>
</head>
<body>
	<h1>Cookie Example</h1>
	<form action="setcookie.php" method="post">

		Time zone: Asia/Dhaka
		<hr></br></br>
		<b>Set Cookie</b></br></br><br><hr>

		<label for="color">Select a color:</label>

		<input type="color" id="color" name="color" value="#000000">

		<br><br>
		<label for="expire">Expire on:</label> 
		<input type="datetime-local" id="expire" name="expire">
		<br><br>
	    <input type="submit" value="Set Cookie"><hr>
	</form>
	<form action="destroycookie.php">
	    <br><br>
	    <b>Destroy Cookie</b>
	    <br><br>
	    <hr>
	    <a href="http://localhost/webtach/cookie.php"><input type="submit" method="get"value="Destroy Cookie"></a>
	    <hr>


	</form>

</body>
</html>