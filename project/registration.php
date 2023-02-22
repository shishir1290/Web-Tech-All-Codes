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
    		// $website = sanitize($_POST['site']);
    		$username = sanitize($_POST['username']);
    		$password = sanitize($_POST['password']);
    		
    		$flag=true;

    		if(empty($firstname)){
    			header("Location: registrationpage.php?msg1="."First name can not be empty");
    			$flag = false;
    		}

    		if(empty($lastname)){
    			header("Location: registrationpage.php?msg2="."Last name can not be empty");
    			$flag = false;
    		}

    		if(empty($fathername)){
    			header("Location: registrationpage.php?msg3="."Father's name can not be empty");
    			$flag = false;
    		}


    		if(empty($mothername)){
    			header("Location: registrationpage.php?msg4="."Mother's name can not be empty");
    			$flag = false;
    		}

    		if(empty($gender)){
    			header("Location: registrationpage.php?msg5="."Gender is not selected");
    			$flag = false;
    		}

    		if(empty($birthday)){
    			header("Location: registrationpage.php?msg6="."Date of birth can not be empty");
    			$flag = false;
    		}

    		if(empty($email)){
    			header("Location: registrationpage.php?msg7="."Email can not be empty");
    			$flag = false;
    		}
    		else{
    			if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    				header("Location: registrationpage.php?msg7="."This is not an email");
    				$flag = false;
    			}
    		}

    		if(empty($phone)){
    			header("Location: registrationpage.php?msg8="."Phone number can not be empty");
    			$flag = false;
    		}

    		if(empty($address)){
    			header("Location: registrationpage.php?msg9="."Address can not be empty");
    			$flag = false;
    		}

    		// if(empty($website)){
    		// 	echo "</br>Please fil up the web site properly";
    		// 	$flag = false;
    		// }

    		if(empty($username)){
    			header("Location: registrationpage.php?msg10="."Username can not be empty");
    			$flag = false;
    		}

    		if(empty($password)){
    			header("Location: registrationpage.php?msg11="."Password can not be empty");
    			$flag = false;
    		}
    		if($flag === true){
    			echo '<h2 align="center">Registration Page</h2>';

    			echo '<table align="center"><tr><td><fieldset><legend>General Information:</legend><table><tr>';
    			echo '<th align="center"><label for="firstname">First name</label></th>';
    			echo '<td align="left">:'.$firstname.'</td></tr>';

    			echo '<tr><th align="center"><label for="lastname">Last name</label></th>';
    			echo '<td align="left">:'.$lastname.'</td></tr>';

    			echo '<tr><th align="center"><label for="fathername">Fathers Name</label></th>';
    			echo '<td align="left">:'.$fathername.'</td></tr>';

    			echo '<tr>
    <th align="center"><label for="mothername">Mothers Name</label></th>
    <td align="left">:'.$mothername.'</td>
  </tr>';

  				echo '<tr>
    <th align="center"><label for="gender">Gender</label></th>
    <td align="left">:'.$gender.'</td>
  </tr>';

  				echo '<tr>
    <th align="center"><label for="birthday">Date of Birth</label></th>
    <td align="left">:'.$birthday.'</td>
  </tr>';

  				echo '<tr>
    <th align="center"><label for="blood">Blood group</label></th>
    <td align="left">:'.$blood.'</td>
  </tr></table></fieldset></td></tr>';

  				echo '<tr><td><fieldset>
    <legend>Contact Information:</legend>
    <table><tr>
    		<th align="center"><label for="email">Email</label></th>
    <td align="left">:'.$email.'</td></tr>';

    			echo '<tr><td><br></td></tr><tr>
  	<th align="center"><label for="phone">Phone/Mobile</label></th>
    <td align="left">:'.$phone.'</td></tr><tr><td><br></td></tr>';

    			echo '<tr>
  	<th align="center"><label for="address">Present Address</label></th>
    <td align="left">:'.$address.'</td></tr><tr><td><br></td></tr>';

    // 			echo '<tr>
  	// <th align="center"><label for="site">Web Site</label></th>
    // <td align="left">:'.$website.'</td></tr></table></fieldset></td></tr>';

    			echo '<tr><td><fieldset>
    <legend>Account Information:</legend>
    <table><tr>
        <th align="center"><label for="username">Username</label></th>
        <td align="left">:'.$username.'</td></tr>';

        		echo '<tr>
        <th align="center"><label for="passwprd">Password</label></th>
        <td align="left">:'.$password.'</td></tr></table></fieldset></td></tr>';

        		echo '<tr>
  <td align="center">Now login using username and password <a href="http://localhost/project/homepage.php"><u>here</u></a></td>
</tr>
</table>';
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