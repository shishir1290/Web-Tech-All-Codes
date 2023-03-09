<?php
	session_start();

	include 'header.php';

	echo '<h1 align="center"><u>Profile Page</u></h1>';

    $servername = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "gore gore";

    $username = $_SESSION['username'];

    // Create connection
    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    $sql = "SELECT * FROM userinfo WHERE username='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
      
      while ($row = mysqli_fetch_assoc($result)){
      	$_SESSION['firstName'] = $row['firstname'];
      	$_SESSION['lastName'] = $row['lastname'];
      	echo '<b>'.$_SESSION['firstName']. ' '.$_SESSION['lastName'].'</b><br>';
      	// echo "Welcome, {$user['name']}!<br>";
		echo "Email: ".$row['email']."<br>";
		echo "Address: ".$row['address']."<br>";
		echo "Phone: ".$row['phone']."<br>";
      }

    } else {
      header("Location: homepage.php?msg1="."Username and password is wrong. Please try again.");
    }

    mysqli_close($conn);

    echo '<p style="color: #ff0000;">';

    if (isset($_GET['msg1'])) {
    	echo $_GET['msg1'];
    }
    echo '</p><br>';

?>
<!DOCTYPE html>
<html>

<body>
	<button><a href="changepass.php?username=<?php echo $username; ?>" style="text-decoration:none;">Change Password</a></button>
	<br><br>
	<button><a href="editProfile.php?username=<?php echo $username; ?>" style="text-decoration:none;">Edit profile</a></button>

</body>
</html>
<?php

	echo '
		<table align="center">
			<tr>
				<td align="center"><button align="center"><a href="http://localhost/project/logout.php">Logout</a></button></td>
			</tr>
		</table>';

    include 'footer.php';
?>
