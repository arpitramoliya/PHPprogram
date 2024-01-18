<?php

    require "connection.php";

    //Insert Data 
    if(isset($_REQUEST['name'])){
        $name       =    $_REQUEST['name'];
        $standard   =    $_REQUEST['standard'];
        $medium     =    $_REQUEST['medium'];
        $contact    =    $_REQUEST['contact'];
        $gender     =    $_REQUEST['gender'];
        $email      =    $_REQUEST['email'];
        $psssword   =    $_REQUEST['psssword'];

        $query = "INSERT INTO `details` (`name`, `standard`, `medium`, `contact`, `gender`, `email`, `psssword`) VALUE ('$name', '$standard', '$medium', '$contact', '$gender', '$email', '$psssword')";
        $run = mysqli_query($conn,$query);
        if($run){
            //echo "Success";
          header("location:index.php");
        } else{
            echo "Error";
        }
    }

?>