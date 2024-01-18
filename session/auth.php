<?php 

session_start();

require_once 'db.php';

if(isset($_POST['submit'])){
   
    $email = $_POST['inputEmail'];
    $pass  = $_POST['inputPassword'];

    $qry = "SELECT * FROM test WHERE email = '$email' AND password = '$pass' ";
    $run = mysqli_query($conn,$qry);

    if($run && mysqli_affected_rows($conn) > 0){

        //get email and add to session
        $_SESSION['email'] = $email;
        header("location:dashboard.php");
        
    }else{
        echo "No user found!";
    }

}


?>