<?php
    function allUserData(){
        require 'connection.php';
        $qry = 'SELECT * FROM user';
        $run = mysqli_query($conn, $qry);
        $data = [];
        if($run){
            $data = mysqli_fetch_all($run);
        }else{
            $data = ['no data found!'];
        }
        echo json_encode($data);
    }
    allUserData();

?>