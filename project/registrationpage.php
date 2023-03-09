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
<body align="center">
  <?php 
    include 'header.php';
  ?>
	<form method="post" action="registration.php" novalidate>
	<h2 align="center">Registration Page</h2>
	<table align="center">
		<tr>
			<td>

  <fieldset>
    <legend>General Information:</legend>
    <table>

    	<tr>
        <th align="center"><label for="firstname">First name</label></th>
        <td align="left">:<input type="text" id="firstname"name="firstname"></td>
      </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['firstname'])) {
            echo $_SESSION['firstname'];
          }
        ?>
      </td>
    <tr>

      <tr>
        <th align="center"><label for="lastname">Last name</label></th>
        <td align="left">:<input type="text" id="lastname"name="lastname"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['lastname'])) {
            echo $_SESSION['lastname'];
          }
        ?>
      </td>
    <tr>

  <tr>
    <th align="center"><label for="fathername">Father's Name</label></th>
    <td align="left">:<input type="text" id="fathername"name="fathername"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['fathername'])) {
            echo $_SESSION['fathername'];
          }
        ?>
      </td>
    <tr>

  <tr>
    <th align="center"><label for="mothername">Mother's Name</label></th>
    <td align="left">:<input type="text" id="mothername"name="mothername"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['mothername'])) {
            echo $_SESSION['mothername'];
          }
        ?>
      </td>
    <tr>

  <tr>
    <th align="center"><label for="gender">Gender</label></th>
    <td align="left">:<input type="radio" id="gender" name="gender" value="Male"><label for="mgender">Male</label><input type="radio" id="gender" name="gender" value="Female"><label for="fgender">Female</label></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['gender'])) {
            echo $_SESSION['gender'];
          }
        ?>
      </td>
    <tr>

  <tr>
    <th align="center"><label for="birthday">Date of Birth</label></th>
    <td align="left">:<input type="date" id="birthday" name="birthday"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['birthday'])) {
            echo $_SESSION['birthday'];
          }
        ?>
      </td>
    <tr>

  <tr>
    <th align="center"><label for="blood">Blood group</label></th>
    <td align="left">:<select id="blood" name="blood">
    <option value="a+">A+</option>
    <option value="b+">B+</option>
    <option value="o+">O+</option>
    <option value="ab+">AB+</option>
  </select></td>
  </tr>


    </table>
  
  </fieldset>
  </td>
  </tr>
  <tr>


  	<td>

  <fieldset>
    <legend>Contact Information:</legend>
    <table>
    	<tr>
    		<th align="center"><label for="email">Email</label></th>
    <td align="left">:<input type="email" id="email"name="email"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['email'])) {
            echo $_SESSION['email'];
          }
        ?>
      </td>
    <tr>

  <tr>
  	<td><br></td>
  </tr>
  <tr>
  	<th align="center"><label for="phone">Phone/Mobile</label></th>
    <td align="left">:<input type="number" id="phone"name="phone"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['phone'])) {
            echo $_SESSION['phone'];
          }
        ?>
      </td>
    <tr>

  <tr>
  	<td><br></td>
  </tr>
  <tr>
  	<th align="center"><label for="address">Present Address</label></th>
    <td align="left">:<input type="address" id="address"name="address"></td>
  </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['address'])) {
            echo $_SESSION['address'];
          }
        ?>
      </td>
    <tr>

  <tr>
  	<td><br></td>
  </tr>

    </table>
  
  </fieldset>
  </td>


</tr>
<tr>
  <td>
  <fieldset>
    <legend>Account Information:</legend>
    <table>
      <tr>
        <th align="center"><label for="user">Username</label></th>
        <td align="left">:<input type="text" id="user" name="user"></td>
      </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['user'])) {
            echo $_SESSION['user'];
          }
        ?>
      </td>
    <tr>

      <tr>
        <th align="center"><label for="pass">Password</label></th>
        <td align="left">:<input type="passwprd" id="pass" name="pass"></td>
      </tr>

      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_GET['msg11'])) {
            echo $_GET['msg11'];
          }
        ?>
      </td>
    <tr>
      <tr>
        <td align="center" colspan="2" style="color: #ff0000;">
          <?php 
            if(isset($_GET['msg12'])){
            echo $_GET['msg12'];
          }
          ?>
        </td>
      </tr>

    </table>
  </fieldset>
</td>
</tr>
<tr>
	<td align="center" colspan="2"><input type="submit" value="Register"></td>
</tr>
<tr>
  <td align="center">Already have an account? Login <a href="http://localhost/project/homepage.php"><u>here</u></a></td>
</tr>
</table>

<?php
  include 'footer.php';
?>

</form>

</body>
</html>