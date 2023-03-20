<?php 
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Page</title>
</head>
<body>
	<div align="center">
		<h1>Registration Page</h1>
		<form action="../controlar/registrationAction.php" method="post" novalidate>
			<fieldset>
			    <legend>General Information:</legend>
			    <table>

			    	<tr>
			        <th align="center"><label for="id">ID</label></th>
			        <td align="left">:<input type="number" id="id"name="id"></td>
			      </tr>

			      <tr>
				      <td align="center" colspan="2" style="color: #ff0000;">
				        <?php 
				          if (isset($_SESSION['id'])) {
				            echo $_SESSION['id'];
				          }
				        ?>
				      </td>
				    </tr>

			      <tr>
			        <th align="center"><label for="name">Name</label></th>
			        <td align="left">:<input type="text" id="name"name="name"></td>
			  	  </tr>

			      <tr>
				      <td align="center" colspan="2" style="color: #ff0000;">
				        <?php 
				          if (isset($_SESSION['name'])) {
				            echo $_SESSION['name'];
				          }
				        ?>
				      </td>
				    </tr>

			  <tr>
			    <th align="center"><label for="email">Email</label></th>
			    <td align="left">:<input type="text" id="email"name="email"></td>
			  </tr>

			      <tr>
			      <td align="center" colspan="2" style="color: #ff0000;">
			        <?php 
			          if (isset($_SESSION['mail'])) {
			            echo $_SESSION['mail'];
			          }
			        ?>
			      </td>
			    </tr>

			  <tr>
			    <th align="center"><label for="department">Department</label></th>
			    <td align="left">:<input type="text" id="department"name="department"></td>
			  </tr>

			      <tr>
			      <td align="center" colspan="2" style="color: #ff0000;">
			        <?php 
			          if (isset($_SESSION['department'])) {
			            echo $_SESSION['department'];
			          }
			        ?>
			      </td>
			    </tr>

			    <tr>
			    <th align="center"><label for="password">Password</label></th>
			    <td align="left">:<input type="password" id="password" name="password"></td>
			  </tr>

			      </tr>
			      <td align="center" colspan="2" style="color: #ff0000;">
			        <?php 
			          if (isset($_GET['msg1'])) {
			            echo $_GET['msg1'];
			          }
			        ?>
			      </td>
			    <tr>

			  <tr>
			    <td align="right"><input type="radio" id="student" name="role" value="Student"><label for="student">Student</label></td>
			    <td align="left"><input type="radio" id="teacher" name="role" value="Teacher"><label for="teacher">Teacher</label></td>
			  </tr>

			      </tr>
			      <td align="center" colspan="2" style="color: #ff0000;">
			        <?php 
			          if (isset($_SESSION['role'])) {
			            echo $_SESSION['role'];
			          }
			        ?>
			      </td>
			    <tr>
			    	<tr>
			    		<td> </td>
			    		<td align="right"><input type="submit" value="Submit"></td>
			    	</tr>

			    </table>
			  
			  </fieldset>
			  If you have your account please click here for <a href="login.php">Login</a>
			
		</form>
		
	</div>

</body>
</html>