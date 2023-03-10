
<?php 

	if(!empty($_SESSION['username']) && !empty($_SESSION['password'])){
	echo '
		<p align="center"><a href="http://localhost/project/HomePage2.php"><img src="logo2.png" height="120" width="180"></a></p>
		<hr color="red" size="5">
		<table align="right">
		<tr>
			<td align="center">';
		include 'selectBGcolor.php';
			echo '</td>
			<td align="right"><button><a href="http://localhost/project/profile.php" style="text-decoration:none;">Profile</a></button></td>
		</tr>
		
		</table>';
	}
	else{
		echo '
		<p align="center"><a href="http://localhost/project/homepage.php"><img src="logo2.png" height="120" width="180"></a></p>
		<hr color="red" size="5">';
		echo '<table align="right">
		<tr>
		<td align="center">';

		include 'selectBGcolor.php';
		echo '</td>
		</tr>
		</table>';

	}
?>
