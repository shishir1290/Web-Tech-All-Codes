<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Page</title>
</head>
<body>
	<div align="center">
		<h1>Login Page</h1>
		<form action="../controlar/loginAction.php" method="post" novalidate>
			<fieldset>
			    <legend>General Information:</legend>
			    <table>
			    	<tr>
			    		<th align="center"><label for="id">ID</label></th>
			    		<td align="left">:<input type="number" id="id" name="id"></td>
			    	</tr>
			    	<tr>
			    		<td align="center" colspan="2" style="color: #ff0000;">
					        <?php 
					          if (isset($_SESSION['errorId'])) {
					            echo $_SESSION['errorId'];
					          }
					        ?>
					    </td>
			    	</tr>
			    	<tr>
			    		<th align="center"><label for="password">Password</label></th>
			    		<td align="left">:<input type="password" id="password" name="password"></td>
			    	</tr>
			    	<tr>
			    		<td align="center" colspan="2" style="color: #ff0000;">
					        <?php 
					          if (isset($_SESSION['errorPass'])) {
					            echo $_SESSION['errorPass'];
					          }
					        ?>
					    </td>
			    	</tr>
			    	<tr>
			    		<td align="center" colspan="2" style="color: #ff0000;">
					        <?php 
					          if (isset($_GET['msg1'])) {
					            echo $_GET['msg1'];
					          }
					        ?>
					    </td>
			    	</tr>
			    	<tr>
			    		<td> </td>
			    		<td align="right"><input type="submit" value="Login"></td>
			    	</tr>
			    </table>
			</fieldset>
			If you don't have any id please click here for <a href="registration.php">Registration</a>
		</form>
	</div>

</body>
</html>