<?php
    require "Connection.php";

    if(isset($_REQUEST['name'])){
        $name           =   $_REQUEST['name'];
        $address        =   $_REQUEST['address'];
        $contact        =   $_REQUEST['contact'];
        $parenetcontact =   $_REQUEST['parenetcontact'];
        $dob            =   $_REQUEST['dob'];
        $qualification  =   $_REQUEST['qualification'];
        $activity       =   $_REQUEST['activity'];
        $otheractivity  =   $_REQUEST['otheractivity'];
        $course         =   $_REQUEST['course'];


    //Srudent Form Insert Data Query
        $query = "INSERT INTO `student_form` (`name`, `address`, `contact`, `parenetcontact`, `dob`, `qualification`, `activity`, `otheractivity`, `course`) VALUES ('$name', '$address', '$contact', '$parenetcontact', '$dob', '$qualification', '$activity', '$otheractivity', '$course')";
        $run = mysqli_query($conn,$query);
            if($run){
                //echo "Data Insert Successfully";
                echo '<script>alert("Record Submiteed!")</script>';
                echo "<script>window.location.href ='Student_Form.php';</script>";
        }else{
            echo "Data Not Insert";
        }
    }
?>