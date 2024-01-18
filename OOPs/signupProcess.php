<?php 

    require 'mysql.php';

    $mysql = new Mysql();
    echo $mysql->connect();

?>