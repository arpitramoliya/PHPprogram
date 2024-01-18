<?php
 
    $conn = mysqli_connect("localhost", "root", "", "Creative");
        if(!$conn){
        echo "<b>Data Base not connected!</b>";
    }

?>