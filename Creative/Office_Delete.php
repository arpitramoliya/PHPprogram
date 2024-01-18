<?php
    require ("Connection.php");
    $id = $_REQUEST['id'];

    $delete = "DELETE FROM `office_form` WHERE `id`='$id'";
    $result = mysqli_query($conn,$delete);

    //header("location:Dashbord.php");
    if($result){
        echo '<script>alert("Record deleted!")</script>';
        echo "<script>window.location.href ='Dashbord.php';</script>";
    }
?>