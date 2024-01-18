<?php
    require 'connection.php';
        // Insert task
        if (isset($_REQUEST['addTask'])) {
            $task = $_REQUEST['addTask'];

            $query = "INSERT INTO `task` (`task_at`) VALUES ('$task')";
            $run = mysqli_query($conn, $query);

            echo $run ? "Success" : "Error";
        }

        // Delete task
        if (isset($_POST['deleteId'])) {
            $id = $_POST['deleteId'];

            $deleteQuery = "DELETE FROM `task` WHERE `id` = '$id'";
            $deleteRun = mysqli_query($conn, $deleteQuery);

            echo $deleteRun ? "Success" : "Error";
        }
        //edit

        if (isset($_POST['updateId']) && isset($_POST['updateTask'])) {
            $id = $_POST['updateId'];
            $updatedTask = $_POST['updateTask'];

            $updateQuery = "UPDATE `task` SET `task_at` = '$updatedTask' WHERE `id` = '$id'";
            $updateRun = mysqli_query($conn, $updateQuery);

            echo $updateRun ? "Success" : "Error";
        }
?>
