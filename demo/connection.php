<?php
 
    $conn = mysqli_connect("localhost", "root", "", "project");
    if(!$conn){
       echo "<b>Data Base not connected!</b>";
    }

?>