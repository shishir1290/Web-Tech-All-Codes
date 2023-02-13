<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Action</title>
</head>
<body>
    <?php

    	if($_SERVER['REQUEST_METHOD'] === "POST"){

    		$username = sanitize($_POST['username']);
    		$password = sanitize($_POST['password']);
    		$flag=true;

    		if(empty($username)){
    			echo "Please fil up the username properly";
    			$flag = false;
    		}
    		// else{
    		// 	if(!filter_var($username)){
    		// 		echo "this is not an email";
    		// 		$flag = false;
    		// 	}
    		// }

    		if(empty($password)){
    			echo "Please fil up the password properly";
    			$flag = false;
    		}
    		if($flag === true){

    			echo "Successfully Login";
    			}
    		else{
    			echo 'Try to login again. <a href="http://localhost/webtach/login.html"><u>Login</u></a>';
    		}
    		}
    	else{
    		echo 'Try to login again. <a href="http://localhost/webtach/login.html"><u>Login</u></a>';

    		}

    	function sanitize($data){
    		$data = stripcslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
    	}
    ?>
    

</body>
</html>

<!-- ------------------------------------------------------------------- -->
<!-- ------------------------------------------------------------------- -->

<!-- <h3>SERVER</h3>
    <?php
    	var_dump($_SERVER);
    ?>
    <hr><hr>
    <h3>REQUEST</h3>
    <?php
    	var_dump($_REQUEST);
    ?>

    <hr><hr>
    <h3>POST</h3>
    <?php
    	var_dump($_POST);
    ?>

    <hr><hr>
    <h3>GET</h3>
    <?php
    	var_dump($_GET);
     ?> -->

<!-- $GLOBALS
	 $_SERVER *
	 $_FILES *
	 $_REQUEST *
	 $_POST *
	 $-GET *
	 $_ENV
	 $_SESSION *
	 $_COOKIE *
	 ALL ARE GLOBAL VARIABLE -->

	 <!-- filter_var 
	 	  frag_match 
	 	  for filter input -->