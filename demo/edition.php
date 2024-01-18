<?php
  require "connection.php";
 
  //get data
  if(isset($_REQUEST['update'])){

    //get data
    $id   = $_REQUEST['id'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $sfname = $_REQUEST['sfname'];

    //update
    $qry = "UPDATE sfname SET email = '$email',password = '$password',sfname = '$sfname' WHERE id = '$id' ";
    $run = mysqli_query($conn,$qry);
    if($run){
        echo '<script>alert("Record Update Successfully!")</script>';
        echo "<script>window.location.href = 'index.php';</script>";
    }

  }


?>
