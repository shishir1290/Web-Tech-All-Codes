<?php
session_start();
include 'header.php';
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gore gore";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//get user id from URL parameter
$username = $_GET['username'];

//retrieve user data from database
$sql = "SELECT * FROM userinfo WHERE username='$username'";
$result = mysqli_query($conn, $sql);

if (!$result) {
      die("Error: " . mysqli_error($conn));
  }

  if (mysqli_num_rows($result) == 0) {
      die("User not found.");
  }

  $row = mysqli_fetch_assoc($result);

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $firstname = $_POST['fname'];
  $lastname = $_POST['lname'];
  $fathername = $_POST['fathername'];
  $mothername = $_POST['mothername'];
  $phone = $_POST['phone'];
  $address = $_POST['address'];

  $sql = "UPDATE userinfo SET firstname='$firstname', lastname='$lastname', fathername='$fathername', mothername='$mothername', phone='$phone', address='$address' WHERE username='$username'";

  if (mysqli_query($conn, $sql)) {
    echo "User updated successfully";
    $row['firstname'] = $firstname;
    $row['lastname'] = $lastname;
    $row['fathername'] = $fathername;
    $row['mothername'] = $mothername;
  } else {
    echo "Error updating user: " . mysqli_error($conn);
  }
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
  <title>Edit Profile</title>
</head>
<body>
  <h1>Edit Profile</h1>
  <form method="POST">
    <fieldset>
    <legend>Change Password:</legend>
    <table>

      <tr>
        <th align="center"><label for="fname">First Name</label></th>
        <td align="left">:<input type="text" id="fname" name="fname" value="<?php echo $row['firstname']; ?>"></td>
      </tr>
      <tr>
        <th align="center"><label for="lname">Last Name</label></th>
        <td align="left">:<input type="text" id="lname" name="lname" value="<?php echo $row['lastname']; ?>"></td>
      </tr>
      <tr>
        <th align="center"><label for="fathername">Father's Name</label></th>
        <td align="left">:<input type="text" id="fathername" name="fathername" value="<?php echo $row['fathername']; ?>"></td>
      </tr>

      <tr>
        <th align="center"><label for="mothername">Mother's Name</label></th>
        <td align="left">:<input type="text" id="mothername" name="mothername" value="<?php echo $row['mothername']; ?>"></td>
      </tr>

      <tr>
    <th align="center"><label for="phone">Phone/Mobile</label></th>
    <td align="left">:<input type="number" id="phone"name="phone" value="<?php echo $row['phone']; ?>"></td>
  </tr>
  <tr>
    <th align="center"><label for="address">Present Address</label></th>
    <td align="left">:<input type="text" id="address"name="address" value="<?php echo $row['address']; ?>"></td>
  </tr>



      <tr>
        <td> </td>
        <td align="right"><input type="submit" value="Update"></td>
      </tr>
    </table>
  </fieldset>
    
  </form>
</body>
</html>


<?php 
  include 'footer.php';
?>
