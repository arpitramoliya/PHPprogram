<?php

session_start();

    require "connection.php";

    if(isset($_REQUEST['name'])){
        //$id = $_REQUEST['id'];
        $name = $_REQUEST['name'];
        $email = $_REQUEST['email'];
        $contact = $_REQUEST['contact'];
        $password = $_REQUEST['password'];
        $course = $_REQUEST['course'];

    //Data Insert Query
    $query = "INSERT INTO `user` (`name`, `email`, `contact`, `password`, `course`) VALUES ('$name', '$email', '$contact', '$password', '$course')";
    $run = mysqli_query($conn,$query);
    if($run){

        $_SESSION['user'] = $name;
        //echo "successfully";
        header("location:quiz.php");
    }else{
        echo "Error";
    }
}

    //Delete Data
    if(isset($_REQUEST['deleteId'])){
        $del  = $_REQUEST['deleteId'];
        $qry = "DELETE FROM user WHERE id='$del'";
        $run = mysqli_query($conn,$qry);
        if($run){
            echo "Successfully Record Delete";
        } else {
            echo "Error";
        }
    }

    //Update Data
        if(isset($_REQUEST['updateId'])){

            $id = $_REQUEST['updateId'];
            $name = $_REQUEST['name'];
            $email = $_REQUEST['email'];
            $contact = $_REQUEST['contact'];
            $password = $_REQUEST['password'];
            $course = $_REQUEST['course'];

            $query = "UPDATE `user` SET name='$name', email='$email', contact='$contact', password='$password', course='$course'";
            $run = mysqli_query($query, $conn);
            if($run){
                    //echo "Successfully Record Update";
                    header("location:uodateat.php");
            } else{
                echo "Error";
            }
        }
?>