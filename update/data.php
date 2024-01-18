<?php
 
    function allUserData(){
        //data here
        require "connection.php";
        $qry = "SELECT * FROM users";
        $run = mysqli_query($conn,$qry);
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