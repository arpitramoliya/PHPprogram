<?php
   require "Connection.php";
    
   /* if(isset($_POST['deleteId'])){
        $id= $_POST['deleteId'];
   }

    $id = $_REQUEST['id'];
    $delete = "DELETE FROM `admission_form` WHERE `id`='$id'";
    $result = mysqli_query($conn,$delete);

    // header("index.php");
    if($result){
        echo '<script>alert("Record deleted!")</script>';
        echo "<script>window.location.href = 'index.php';</script>";
    }   */
        
        $id = $_REQUEST['id'];
        $delete = "DELETE FROM `student_form` WHERE `id`='$id'";
        $result = mysqli_query($conn,$delete);

        //header("location:Dashbord.php");
        if($result){
            echo '<script>alert("Record deleted!")</script>';
            echo "<script>window.location.href ='Dashbord.php';</script>";
        }

?>