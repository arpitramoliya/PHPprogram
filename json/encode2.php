
<?php
    $con = mysqli_connect("localhost", "root", "", "search") or die ("Connection Failed");

    $sql = "SELECT * FROM users";
    //query run
    $result = mysqli_query($con,$sql) or die("SQL Queryy Failed.");

    //index to muticonver(mysqli_assoc)
    //$output = mysqli_fetch_all($result,MYSQLI_ASSOC);

    /*echo "<pre>";
    print_r($output);
    echo "</pre>";*/
    $data = [];
    if($result){
        $data =  mysqli_fetch_all($result);
    }else{
        $data = ['no data found!'];
    }
    echo json_encode($data);
?>