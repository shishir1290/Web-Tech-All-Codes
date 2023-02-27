<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Action</title>
</head>
<body align="center">
	<h3>Login Action</h3>
    <?php

    	if($_SERVER['REQUEST_METHOD'] === "POST"){

    		$username = sanitize($_POST['username']);
    		$password = sanitize($_POST['password']);
    		$flag=true;

    		if(empty($username) && empty($password)){
    			header("Location: homepage.php?msg1="."Username and password can not be empty");
    			$flag = false;
    		}
    		else{
    		
    		if(empty($username)){
    			header("Location: homepage.php?msg1="."Username can not be empty");
    			$flag = false;
    		}
    		

    		if(empty($password)){
    			header("Location: homepage.php?msg1="."Password can not be empty");
    			$flag = false;
    		
    		}
    		
	    	}
	    	if($flag === true){

    			// header('Location: loginConfirm.php');
    			$servername = "localhost";
				$dbusername = "root";
				$dbpassword = "";
				$dbname = "gore gore";

				// Create connection
				$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
				// Check connection
				if (!$conn) {
				  die("Connection failed: " . mysqli_connect_error());
				}

				$sql = "SELECT * FROM userinfo WHERE username='$username'and password='$password'";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 0) {
					header('Location: profile.php');
				  // output data of each row
				  // while($row = mysqli_fetch_assoc($result)) {
				  //   header('Location: profile.php');
				  // }
				} else {
				  header("Location: homepage.php?msg1="."Username and password is wrong. Please try again.");
				}

				mysqli_close($conn);
    		
	    		}
	    }
	    		

    	function sanitize($data){
    		$data = stripcslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
    	}
    ?>
    

</body>
</html>
