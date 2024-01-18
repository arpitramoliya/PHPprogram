<?php

    session_start();

    require_once 'db.php';

    if(isset($_POST['submit'])) {

        $name = mysqli_real_escape_string($conn,$_POST['inputName']);
        $pass  = mysqli_real_escape_string($conn,$_POST['inputPassword']);


    $qry = "SELECT * FROM test WHERE name = '$name'";
    $run = mysqli_query($conn, $qry);

    if($run && mysqli_affected_rows($conn) > 0) {

        //get and check password
        $data = mysqli_fetch_array($run);
        // print_r($data['password']);
        $dbpassword = $data['password'];
        if(password_verify($pass,$dbpassword) == true){
            $_SESSION['name'] = $name;
            header("location:dashboard.php");
        }else{
            echo "Invalid password.";
        }

    } else {
        echo "No User Found!";
    }
}

?>