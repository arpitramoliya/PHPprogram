<?php
  require "Connection.php";
 
  //get data
    if(isset($_REQUEST['update'])){

        //get data
        
        $name           =   $_REQUEST['name'];
        $address        =   $_REQUEST['address'];
        $contact        =   $_REQUEST['contact'];
        $dob            =   $_REQUEST['dob'];
        $qualification  =   $_REQUEST['qualification'];
        $activity       =   $_REQUEST['activity'];
        $otheractivity  =   $_REQUEST['otheractivity'];
        $course         =   $_REQUEST['course'];

        //update
        $qry = "UPDATE `student_form` SET name='$name',  address='$address', contact='$contact', dob='$dob', qualification='$qualification', activity='$activity', otheractivity='$otheractivity', course='$course'  WHERE id = '$id' ";
        $run = mysqli_query($conn,$qry);

        if($run){
            echo '<script>alert("Record Update Successfully!")</script>';
            echo "<script>window.location.href ='Dashbord.php';</script>";
        }
    
    }


?>
