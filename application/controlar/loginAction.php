<?php 
	session_start();

	if($_SERVER['REQUEST_METHOD'] === "POST"){

    		$id = sanitize($_POST['id']);
    		$password = sanitize($_POST['password']);
    		$flag=true;
    		
    		if(empty($username)){
    			$_SESSION['errorId'] = "Id can not be empty";
    			$flag = false;
    		}
    		

    		if(empty($password)){
    			$_SESSION['errorPass'] = "Password can not be empty";
    			$flag = false;
    		
    		}
    		
	    	if($flag === true){

			    $servername = "localhost";
			    $dbusername = "root";
			    $dbpassword = "";
			    $dbname = "application";

			    // Create connection
			    $conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
			    // Check connection
			    if (!$conn) {
			      die("Connection failed: " . mysqli_connect_error());
			    }

			    $sql = "SELECT * FROM studetninfo WHERE studentId='$id'";
			    $result = mysqli_query($conn, $sql);

			    if (mysqli_num_rows($result) > 0) {
			      while ($row = mysqli_fetch_assoc($result)){
			        if($password === $row['studentPassword']){
			          header('Location: ../view/studentDashboard.php');
			        }
			        else {
				      header("Location: ../view/login.php?msg1="."ID and password is wrong. Please try again.");
				    }
			      }
			    }
			    else {
			      $sql = "SELECT * FROM teacherinfo WHERE teacherId='$id'";
			      $result = mysqli_query($conn, $sql);
			      if (mysqli_num_rows($result) > 0) {
				      while ($row = mysqli_fetch_assoc($result)){
				        if($password === $row['teacherPassword']){
				          header('Location: ../view/teacherDashboard.php');
				        }
				        else {
					      header("Location: ../view/login.php?msg1="."ID and password is wrong. Please try again.");
					    }
				      }
				    }
				    else{
				    	echo "No user found!";
				    }
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