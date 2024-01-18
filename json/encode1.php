
<?php
    $con = mysqli_connect("localhost", "root", "", "search") or die ("Connection Failed");

    $sql = "SELECT * FROM users";
    //query run
    $result = mysqli_query($con,$sql) or die("SQL Queryy Failed.");

    $output = mysqli_fetch_all($result);

    /*echo "<pre>";
    print_r($output);
    echo "</pre>";
    //all Data array in show*/

    //conver json formate
    echo json_encode($output);
?>