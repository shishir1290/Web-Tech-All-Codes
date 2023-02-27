<?php 
  session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Action</title>
</head>
<body align="center">
	<?php

    	if($_SERVER['REQUEST_METHOD'] === "POST"){

        $firstname = sanitize($_POST['firstname']);
        $lastname = sanitize($_POST['lastname']);
        $fathername = sanitize($_POST['fathername']);
        $mothername = sanitize($_POST['mothername']);
        if(isset($_POST['gender'])){
        $gender = $_POST['gender'];}
        $birthday = sanitize($_POST['birthday']);
        $blood = sanitize($_POST['blood']);
        $email = sanitize($_POST['email']);

        $phone = sanitize($_POST['phone']);
        $address = sanitize($_POST['address']);
        
        $username = sanitize($_POST['username']);
        $password = sanitize($_POST['password']);
        $flag = true;
        

        if(empty($firstname)){
          $_SESSION['firstname']="First name can not be empty";
          // header("Location: registrationpage.php?msg1="."First name can not be empty");
          $flag = false;
        }

        if(empty($lastname)){
          $_SESSION['lastname']="Last name can not be empty";
          $flag = false;
        }

        if(empty($fathername)){
          $_SESSION['fathername']="Father's name can not be empty";
          // header("Location: registrationpage.php?msg3="."Father's name can not be empty");
          $flag = false;
        }


        if(empty($mothername)){
          $_SESSION['mothername']="Mother's name can not be empty";
          // header("Location: registrationpage.php?msg4="."Mother's name can not be empty");
          $flag = false;
        }

        if(empty($gender)){
          $_SESSION['gender']="Gender can not be empty";
          // header("Location: registrationpage.php?msg5="."Gender is not selected");
          $flag = false;
        }

        if(empty($birthday)){
          $_SESSION['birthday']="Date of birth can not be empty";
          // header("Location: registrationpage.php?msg6="."Date of birth can not be empty");
          $flag = false;
        }

        if(empty($email)){
          $_SESSION['email']="Email can not be empty";
          // header("Location: registrationpage.php?msg7="."Email can not be empty");
          $flag = false;
        }
        else{
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['email']="Email can not be empty";
            // header("Location: registrationpage.php?msg7="."This is not an email");
            $flag = false;
          }
        }

        if(empty($phone)){
          $_SESSION['phone']="Phone number can not be empty";
          // header("Location: registrationpage.php?msg8="."Phone number can not be empty");
          $flag = false;
        }

        if(empty($address)){
          $_SESSION['address']="Address can not be empty";
          // header("Location: registrationpage.php?msg9="."Address can not be empty");
          $flag = false;
        }

        if(empty($username)){
          $_SESSION['username']="Username can not be empty";
          // header("Location: registrationpage.php?msg10="."Username can not be empty");
          $flag = false;
        }

        if(empty($password)){
          header("Location: registrationpage.php?msg11="."Password can not be empty");
          $flag = false;
        }
      
        if($flag === true){
          $_SESSION['firstname']="";
          $_SESSION['lastname']="";
          $_SESSION['fathername']="";
          $_SESSION['mothername']="";
          $_SESSION['gender']="";
          $_SESSION['birthday']="";
          $_SESSION['email']="";
          $_SESSION['phone']="";
          $_SESSION['address']="";
          $_SESSION['username']="";
          $_SESSION['password']="";

                    
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

          $sql = "INSERT INTO userinfo (username, password,firstname,lastname,fathername,mothername,gender,birthday,email,phone,address,blood)
          VALUES ('$username','$password','$firstname','$lastname','$fathername','$mothername','$gender','$birthday','$email','$phone','$address','$blood')";

          if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
          } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
          }

          mysqli_close($conn);
          

        header("Location: profile.php");
        }
    		
      }
      
    		

    	function sanitize($data){
        $data = trim($data);
    		$data = stripcslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
    	}
  ?>

</body>
</html>