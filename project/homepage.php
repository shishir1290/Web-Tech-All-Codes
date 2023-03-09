<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home Page</title>
</head>
<body align="center">
	<?php
		include 'header.php';
	?>
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
			<td><button><a href="http://localhost/project/forgetPass.php" style="text-decoration:none;">Forget password</a></button> </td>
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

	<?php 

		include 'product.php';
	?>
	
	<br><br><br><br><br><br>
	

</body>

<body>
	<?php
		include 'footer.php';
	?>

</body>
</html>