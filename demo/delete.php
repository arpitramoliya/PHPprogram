<?php
require "connection.php";

if(isset($_POST['deleteId'])){
    $id= $_POST['deleteId'];
   // delete_data($connection, $id);
}

    $id = $_REQUEST['id'];
    $delete = "DELETE FROM `sfname` WHERE `id`='$id'";
    $result = mysqli_query($conn,$delete);

    //header("index.php");
    if($result){
        echo '<script>alert("Record deleted!")</script>';
        echo "<script>window.location.href = 'index.php';</script>";
    }

?>