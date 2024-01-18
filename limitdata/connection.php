<?php
    $conn = mysqli_connect("localhost", "root", "", "student_info");
    if(!$conn){
        echo "<b>Data Base not Connected!</b>";
    }

?>