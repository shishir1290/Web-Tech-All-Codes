<?php
// Start a session
session_start();

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
  // Redirect to login page
  header("Location: login.php");
  exit();
}
include 'header.php';

  $servername = "localhost";
  $dbusername = "root";
  $dbpassword = "";
  $dbname = "gore gore";
  $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);

// Handle form submission
if (isset($_POST['submit'])) {
  // Get the current user's username
  $username = $_SESSION['username'];
  
  // Get the current password, new password, and confirm password from the form
  $current_password = $_POST['current_password'];
  $new_password = $_POST['new_password'];
  $confirm_password =  $_POST['confirm_password'];
  
  // Check if the current password is correct
  $sql = "SELECT password FROM userinfo WHERE username = '$username'";
  $result = mysqli_query($conn, $sql);

  if (!$result) {
      die("Error: " . mysqli_error($conn));
  }

  if (mysqli_num_rows($result) == 0) {
      die("Product not found.");
  }

  $row = mysqli_fetch_assoc($result);
  $password = $row['password'];
  
  if ($current_password != $password) {
    $_SESSION['currentPass'] = "Current password do not match.";
    // echo "Current password is incorrect.";
  } elseif ($new_password != $confirm_password) {
    $_SESSION['notSame'] = "New password and confirm password do not match.";
    // echo "New password and confirm password do not match.";
  } else {
    $query = "UPDATE userinfo SET password = '$new_password' WHERE username = '$username'";
    mysqli_query($conn, $query);
    $_SESSION['currentPass'] = "";
    $_SESSION['notSame'] = "";
    header("Location: profile.php?msg1= Password changed successfully.");
  }
}

?>

<h1 align="center">Change Password</h1>

<form method="post">
  <fieldset>
    <legend>Change Password:</legend>
    <table>

      <tr>
        <th align="center"><label for="current_password">Current Password:</label></th>
        <td align="left">:<input type="password" name="current_password" required></td>
      </tr>
      <td align="center" colspan="2" style="color: #ff0000;">
        <?php 
          if (isset($_SESSION['currentPass'])) {
            echo $_SESSION['currentPass'];
          }
        ?>
      </td>
    <tr>
      <tr>
        <th align="center"><label for="new_password">New Password:</label></th>
        <td align="left">:<input type="password" name="new_password" required></td>
      </tr>
      <tr>
        <th align="center"><label for="confirm_password">Confirm Password:</label></th>
        <td align="left">:<input type="password" name="confirm_password" required></td>
      </tr>
        <td align="center" colspan="2" style="color: #ff0000;">
          <?php 
            if (isset($_SESSION['notSame'])) {
              echo $_SESSION['notSame'];
            }
          ?>
        </td>
      <tr>
      <tr>
        <td> </td>
        <td align="right"><input type="submit" name="submit" value="Change Password"></td>
      </tr>
    </table>
  </fieldset>
</form>

