<?php

    require "connection.php";
        if(isset($_REQUEST['email'])){
        $email  =  $_REQUEST['email'];
        $password   =  $_REQUEST['password'];
        $sfname = $_REQUEST['sfname'];

        //add to database
        $query = "INSERT INTO `sfname` (`email`,`password`,`sfname`) VALUES ('$email','$password','$sfname')";
        $run = mysqli_query($conn,$query);
        if($run){
            header("location:index.php");
        }else{
            echo "Error!";
        }
    }

    //delete data
?>