

<?php 
  
  if ($_SERVER['REQUEST_METHOD'] === "POST") {
    setcookie("product_id", $_POST['product_id'], time() + 600);

    header("Location: setCart.php");
  }
?>







<!-- <?php 
  session_start();
  include 'header.php';
?>

<<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Change Password</title>
</head>
<body>

  <h1>Change Password</h1>
  <form method="post" novalidate>
  <fieldset>
    <legend>General Information:</legend>
    <table>
      <tr>
        <th align="center"><label for="currentPass">Current Password</label></th>
          <td align="left">:<input type="password" id="currentPass"name="currentPass"></td>
      </tr>
      <tr>
      <td align="center" colspan="2" style="color: #ff0000;">
          <?php 
            if (isset($_SESSION['currentpass'])) {
              echo $_SESSION['currentpass'];
            }
          ?>
        </td>
      </tr>
      <tr>
        <th align="center"><label for="newPass">New Password</label></th>
          <td align="left">:<input type="password" id="newPass"name="newPass"></td>
      </tr>
      <tr>
        <th align="center"><label for="confirmPass">Confirm Password</label></th>
          <td align="left">:<input type="password" id="confirmPass"name="confirmPass"></td>
      </tr>
      <tr>
      <td align="center" colspan="2"><input type="submit" value="Register"></td>
    </tr>
    <tr>
      <td align="center" colspan="2" style="color: #ff0000;">
          <?php 
            if (isset($_SESSION['pass'])) {
              echo $_SESSION['pass'];
            }
          ?>
        </td>
      </tr>
      <tr>
    </table>
</fieldset>
</form>

</body>
</html>

<?php 
  $username = $_GET['username'];
  

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gore gore";
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

    // Check the connection
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT password FROM userinfo WHERE username = $username";
    $result = mysqli_query($conn, $sql);

    if (!$result) {
        die("Error: " . mysqli_error($conn));
    }

    if (mysqli_num_rows($result) == 0) {
        die("Password not found.");
    }
    $currentPass = mysqli_fetch_assoc($result);

  $newpass=$_POST['newPass'];
  if(isset($_POST['currentPass']))
  {
    if($currentPass === $_POST['currentPass'])
    {
      if(isset($_POST['newPass']) && isset($_POST['confirmPass']))
      {
        if($_POST['newPass'] === $_POST['confirmPass'])
        {
          $sql = "UPDATE userinfo SET password='$newpass' WHERE username='$username'";
          $stmt = mysqli_prepare($conn, $sql);
          // mysqli_stmt_bind_param($stmt, "ss", $newPass, $username);

          if (mysqli_stmt_execute($stmt)) {
            echo "Password updated successfully";
          }
        }
        else{$_SESSION['pass']="New password and confirm password is not same!";}
        
      }
      else{$_SESSION['newpass']="New password and confirm password can not be empty!";}
    }
    else{$_SESSION['currentpass']="Current password is not match!";}
  }
  else{$_SESSION['currentpass']="Current password can not be empty!";}

?>

 -->