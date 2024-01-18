<?php
	session_start();
      require 'connection.php';

    //User(Login Data)
    $username = $_POST['email'];
    $password = $_POST['password'];

	//to prevent from mysqli injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($con, $username);
	$password = mysqli_real_escape_string($con, $password);

	$sql = "select *from `test` where email = '$username' and password = '$password'";
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count == 1){
			//echo "<h1><center> Login successful </center></h1>";
            header("location:user.php");
	}
	else{
		echo "<h1> Login failed. Invalid username or password.</h1>";
	}

	/*if(isset($_REQUEST['email'])){
		$email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

		$query = "INSERT INTO `test` (`email`, `password`) VALUES ('$email', '$password')";
		$run = mysqli_query($con,$query);
		if($run){
			$_SESSION['user'] = $name;
			//echo "successfully";
			header("location:user.php");
		}else{
			echo "Error";
		}
	}*/


?>