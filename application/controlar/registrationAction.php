<?php
      session_start();

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

    	if($_SERVER['REQUEST_METHOD'] === "POST"){

        $id = sanitize($_POST['id']);
        $name = sanitize($_POST['name']);
        $email = sanitize($_POST['email']);
        $department = sanitize($_POST['department']);
        $password = sanitize($_POST['password']);
        if(isset($_POST['role'])){
        $role = $_POST['role'];}
        
        $flag = true;
        

        if(empty($id)){
          $_SESSION['id']="ID can not be empty";
          $flag = false;
        }

        if(empty($name)){
          $_SESSION['name']="Name can not be empty";
          $flag = false;
        }

        if(empty($email)){
          $_SESSION['mail']="Email can not be empty";
          $flag = false;
        }
        else{
          if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $_SESSION['mail']="Email can not be empty";
            $flag = false;
          }
        }


        if(empty($department)){
          $_SESSION['department']="department can not be empty";
          $flag = false;
        }

        if(empty($role)){
          $_SESSION['role']="Status can not be empty";
          $flag = false;
        }

        if(empty($password)){
          header("Location: ../view/registration.php?msg1="."Password can not be empty");
          $flag = false;
        }

        if($role === "Student"){
          $sql = "SELECT * FROM studentinfo WHERE studentId='$id'";
          $result = mysqli_query($conn, $sql);

          if (!$result) {
              die("Error: " . mysqli_error($conn));
          }

          if (mysqli_num_rows($result) > 0) {
            header("Location: ../view/registration.php?msg1="."This id already exist. Please try another one for registration.");

          }else{
            if($flag === true){
          
              $sql = "INSERT INTO studentinfo (studentId, studentPassword,studentName,studentMail,studentDept)
              VALUES ('$id','$password','$name','$email','$department')";

              if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
             header("Location: ../view/registration.php");
            }

          }
        }else{
          echo "Error";
        }


        if($role === "Teacher"){
          $sql = "SELECT * FROM teacherinfo WHERE teacherId='$id'";
          $result = mysqli_query($conn, $sql);

          if (!$result) {
              die("Error: " . mysqli_error($conn));
          }

          if (mysqli_num_rows($result) > 0) {
            header("Location: ../view/registration.php?msg1="."This id already exist. Please try another one for registration.");

          }else{
            if($flag === true){
          
              $sql = "INSERT INTO teacherinfo (teacherId, teacherPassword,teacherName,teacherMail,teacherDept)
              VALUES ('$id','$password','$name','$email','$department')";

              if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
              } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
              }
            header("Location: ../view/registration.php");
            }

          }
        }
      }
      mysqli_close($conn);

    	function sanitize($data){
        $data = trim($data);
    		$data = stripcslashes($data);
    		$data = htmlspecialchars($data);
    		return $data;
    	}
  ?>