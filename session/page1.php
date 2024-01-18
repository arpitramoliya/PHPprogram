<?php 

    session_start();

    //global variable always capital
    $_SESSION['name'] = "Arpit";

    echo $_SESSION['name'];

?>

<h1>I am first page file.</h1>