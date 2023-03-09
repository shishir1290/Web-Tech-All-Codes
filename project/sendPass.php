<?php 
	session_start();

	if($_SERVER['REQUEST_METHOD'] === "POST"){

		$email= $_POST['email'];
		$flag=true;

		if(empty($email)){
          header("Location: forgetPass.php?msg1="."Submit your email id!");
          $flag = false;
        }
        else{
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            header("Location: forgetPass.php?msg1="."Submit your email id!");
            $flag = false;
          }
        }

        if($flag === true){
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

			$sql = "SELECT password FROM userinfo WHERE email = '$email'";
			$result = mysqli_query($conn, $sql);

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
					$password = $row['password'];
					$to      = $email;
					$subject = 'Forget password';
					$message = "Your password is: ".$password;
					$headers = 'From: sssshishir1290@gmail.com' . "\r\n" .
					    'Reply-To: sssshishir1290@gmail.com' . "\r\n" .
					    'X-Mailer: PHP/' . phpversion();


					if(mail($to, $subject, $message, $headers)){
					header('Location: homepage.php?msg1='.'Check your email for your password');

					}
				}
				
			} 
			else {
			  header("Location: forgetPass.php?msg1="."Submit your email id!");
			}

			mysqli_close($conn);
		}

	}
    		
?>