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
    		else{

    		if(empty($password)){
    			header("Location: homepage.php?msg1="."Password can not be empty");
    			$flag = false;
    		}
    		}
    		if($flag === true){

    			header('Location: homepage.php');
    			}
    		// else{
    		// 	echo '</br>Try to login again. <a href="http://localhost/project/homepage.php"><u>Login</u></a>';
    		// }
    		}
    		}
    	// else{
    	// 	echo '</br>Try to login again. <a href="http://localhost/project/homepage.php"><u>Login</u></a>';

    	// 	}

    	function sanitize($data){
    		$data = stripcslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
    	}
    ?>
    

</body>
</html>
