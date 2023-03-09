<?php
	include 'header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Forget Password Page</title>
</head>
<body align="center">
	<form align="center" method="post" action="sendPass.php">
		<fieldset align="center">
		    <legend>Forget Password:</legend>
		    <table align="center">
			    	<tr>
			    		<th align="center"><label for="email">Email</label></th>
				    	<td align="left">:<input type="email" id="email"name="email"></td>
			    	</tr>
			    	<tr>
				    	<td align="left" colspan="2" style="color: #ff0000;">
				    		<?php 
					          if (isset($_GET['msg1'])) {
					            echo $_GET['msg1'];
					          }
					        ?>
				    	</td>
				  	</tr>
				  	<tr>
				  		<td> </td>
				  		<td align="right"><input type="submit" value="Submit"></td>
				  	</tr>
		  	</table>
	  	</fieldset>
  	</form>
</body>
</html>