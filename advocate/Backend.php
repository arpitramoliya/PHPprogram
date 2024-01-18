<?php
	require 'config.php';
    // Contact Us Insert Data
    if(isset($_REQUEST['name'])){
        //$id = $_REQUEST['id'];
        $fullnam = $_REQUEST['name'];
        $email  =  $_REQUEST['email'];
        $contact   = $_REQUEST['contact'];
       // $password   = $_REQUEST['password'];

        //into database
         $query = "INSERT INTO `contactus` (`name`, `email`, `contact`) VAlUES ('$fullnam', '$email', '$contact')";
        $run = mysqli_query($conn,$query);
        if($run){
            //echo "Success";
            header("location:Home.php");
           //sheader("location:data.php");
        }else{
            echo "Error";
        }
    }


    //Bank Data Insert
    if(isset($_REQUEST['accountname'])){
        $accountnumber = $_REQUEST['accountnumber'];
        $accountname   = $_REQUEST['accountname'];
        $accounttype   = $_REQUEST['accounttype'];
        $cifnumber     = $_REQUEST['cifnumber'];
        $ifscode       = $_REQUEST['ifscode'];
        $micrcode      = $_REQUEST['micrcode'];

        //into database
        $query = "INSERT INTO `bankinfo` (`accountnumber`, `accountname`, `accounttype`,`cifnumber`, `ifscode`, `micrcode`) VAlUES ('$accountnumber', '$accountname', '$accounttype', '$cifnumber', '$ifscode', '$micrcode')";
        $run = mysqli_query($conn,$query);
        if($run){
            //echo "Success";
            header("location:Home.html");
           //sheader("location:data.php");
        }else{
            echo "Error";
        }
    }

    //File Upload
    if(isset($_REQUEST['fileupload'])){
        $fileuploads = $_REQUEST['fileupload'];
        $query = "INSERT INTO `fileupload` (`fileupload`) VALUES ('$fileuploads')";
        $run = mysqli_query($conn,$query);
        if($run){
            echo "Success";
            //header("location:Home.php");
        }else{
            echo "Error";
        }
    }

    //User(Login Data)
    $username = $_POST['email'];
    $password = $_POST['password'];

	//to prevent from mysqli injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	$username = mysqli_real_escape_string($conn, $username);
	$password = mysqli_real_escape_string($conn, $password);
  
	$sql = "select *from `user` where email = '$username' and password = '$password'";
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
	$count = mysqli_num_rows($result);
	if($count == 1){
			//echo "<h1><center> Login successful </center></h1>";
            header("location:Home.php");
	} 
	else{
		echo "<h1> Login failed. Invalid username or password.</h1>";
	}

?>