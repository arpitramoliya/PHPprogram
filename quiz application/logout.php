<?php 

    session_start();

    session_destroy();


    header('location:quizLogin.php?msg=1');

?>