<?php
  require "Connection.php";
 
  //get data
    if(isset($_REQUEST['update'])){

        //get data
        $id             =   $_REQUEST['id'];
        $course          =   $_REQUEST['course'];
        $batch           =   $_REQUEST['batch'];
        $joindate        =   $_REQUEST['joindate'];
        $enddate         =   $_REQUEST['enddate'];
        $courseduration  =   $_REQUEST['courseduration'];
        $instscheme      =   $_REQUEST['instscheme'];
        $totalfees       =   $_REQUEST['totalfees'];
        $books           =   $_REQUEST['books'];
        $certificate     =   $_REQUEST['certificate'];
        $comments        =   $_REQUEST['comments'];

        //update
        $qry = "UPDATE `office_form` SET course='$course',  batch='$batch', joindate='$joindate', enddate='$enddate', courseduration='$courseduration', instscheme='$instscheme', totalfees='$totalfees', books='$books', certificate='$certificate', comments='$comments'  WHERE id = '$id' ";
        $run = mysqli_query($conn,$qry);

        if($run){
            echo '<script>alert("Record Update Successfully!")</script>';
            echo "<script>window.location.href ='Dashbord.php';</script>";
        }
    
    }


?>
