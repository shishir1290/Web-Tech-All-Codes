<?php 
   session_start();
	
	if ($_SERVER['REQUEST_METHOD'] === "POST") {
		setcookie("bgcolor", $_POST['bgcolor'], time() + 600);
		if(!empty($_SESSION['username']) && !empty($_SESSION['password'])){
			header("Location: HomePage2.php");
		}
		else{
			header("Location: homepage.php");
		}
	}
?>