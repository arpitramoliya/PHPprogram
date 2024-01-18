<?php

    $conn = mysqli_connect("localhost", "root", "", "demotest");

    if(!$conn){
        echo "Not connect Db.";
    }
?>