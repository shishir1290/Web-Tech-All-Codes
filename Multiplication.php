<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Multiply</title>
</head>
<body>
	<h1>Multyply</h1>
	<form align="center">
		<input type="text" name="num">
		<input type="submit">
		<br><br>

	</form>
	<?php
	$val = $_GET['num'];
	?>
	<table align="center" border="1">
		<tr>
			<td colspan="5">The multiplication of <?php echo $val; ?></td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>1</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*1;  //1st
				echo $t;
				?>
			</td>
		</tr>

		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>2</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*2; //2nd
				echo $t;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>3</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*3;  //3rd
				echo $t;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>4</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*4;  //4th
				echo $t;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>5</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*5;   //5th
				echo $t;
				?>
			</td>
		</tr>

		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>6</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*6;  //6th
				echo $t;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>7</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*7;  //7th
				echo $t;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>8</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*8;  //8th
				echo $t;
				?>
			</td>
		</tr>

		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>9</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*9;  //9th
				echo $t;
				?>
			</td>
		</tr>
		<tr>
			<td>
				<?php
				echo $val;
				?>
			</td>

			<td>*</td>
			<td>10</td>
			<td>=</td>
			<td>
				<?php
				$t=$val*10;  //10th
				echo $t;
				?>
			</td>
		</tr>
		
	</table>

</body>
</html>