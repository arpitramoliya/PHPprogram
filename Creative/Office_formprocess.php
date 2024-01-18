<?php
    require "Connection.php";

        //For OFFICE USE ONLY inset Data
        if(isset($_REQUEST['course'])){
            $student_id      =   $_REQUEST['student_id'];
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

             //Srudent Form Insert Data Query
             $query = "INSERT INTO `office_form` (`student_id`,`course`, `batch`, `joindate`, `enddate`, `courseduration`, `instscheme`, `totalfees`, `books`, `certificate`, `comments`) VALUES ('$student_id', '$course', '$batch', '$joindate', '$enddate', '$courseduration', '$instscheme', '$totalfees', '$books', '$certificate', '$comments')";
             $result = mysqli_query($conn,$query);
             if($result){
                //echo "Data Insert Successfully";
                echo '<script>alert("Data Insert Successfully")</script>';
                header("location:Dashbord.php");

             }else{
                 echo "Data Not Insert";
             }
        }
    
?>