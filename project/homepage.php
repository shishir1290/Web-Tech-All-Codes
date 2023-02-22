<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body align="center">
	<a href="http://localhost/project/homepage.php"><img src="logo2.png" height="120" width="180"></a>
	<hr color="red" size="5">
	<table align="right">
		<tr>
			<td>

	<form method="post" action="login.php" novalidate>
	<table align="right">
		<tr>
			<th align="left">Login</th>
		</tr>
		<tr>
			<td><input type="text" id="username" name="username" placeholder="User name"></td>
			<td><input type="password" id="password" name="password" placeholder="Password"></td>
		</tr>
			<td align="left" colspan="2" style="color: #ff0000;">
				<?php 
					if (isset($_GET['msg1'])) {
						echo $_GET['msg1'];
					}
				?>
			</td>
		<tr>
			<td> </td>
			<td align="right"><input type="submit" value="Login"></td>
		</tr>
	</table>
	</form>
		</td>

		</tr>
		<tr>
			<td align="right">
	<form method="post" action="registrationpage.php" novalidate>
		<input type="submit" value="Create new account" >

		</form>
		</td>
	</tr>
	</table>
	
	<br><br><br><br><br><br>
	<hr color="red" size="5">

</body>

<body>
	<h3 align="left">Customer Care</h3>
	<table align="left">
		<tr>
			<td align="left">
				<a href="http://localhost/project/helpcenter.php">Help Center</a>
				<br>
				<a href="http://localhost/project/howtobuy.php">How to buy</a>
				<br>
				<a href="http://localhost/project/return.php">Returns & Refunds</a>
				
			</td>
		</tr>
	</table>

</body>
</html>