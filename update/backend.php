<?php
    require "connection.php";

    if(isset($_REQUEST['id'])){
        $id = $_REQUEST['id'];
        $fullnam = $_REQUEST['fullname'];
        $email  =  $_REQUEST['email'];
        $pass   = $_REQUEST['password'];
	
        //into database
        $query = "INSERT INTO `users` (`fullname`, `email`, `password`) VAlUES ('$fullnam', '$email', '$pass')";
        $run = mysqli_query($conn,$query);
        if($run){
            //echo "Success";
            header("location:search.php");
           //header("location:data.php");
        }else{
            echo "Error";
        }
    }


    
    //Delete Data
    if(isset($_REQUEST['deleteId'])) {
        $del = $_REQUEST['deleteId'];
        // echo $del;
        $qry = "DELETE FROM users WHERE id='$del'";
        $run = mysqli_query($conn,$qry);
        if($run){
            echo "success";
        }else{
            echo "error";
        }

    }

    //Updata Data
    if(isset($_REQUEST[''])){

         $id =  $_REQUEST['updateId'];
        $fullname = $_REQUEST['fullname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

       $query = "UPDATE users SET fullname='$fullname', email='$email', password='$password'  WHERE id='$id'"; 
       $run = mysqli_query($conn,$query);
       if($run){
            echo"sucess";
       }else{
            echo "Error";
       }
    }
?>