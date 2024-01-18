<?php
    require 'connection.php';
        // Insert task
        if (isset($_POST['addTask'])) {
            $task = $_POST['addTask'];

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

        // Update task
        if (isset($_POST['updateId']) && isset($_POST['updateTask'])) {
            $id = $_POST['updateId'];
            $updatedTask = $_POST['updateTask'];

            $updateQuery = "UPDATE `task` SET `task_at` = '$updatedTask' WHERE `id` = '$id'";
            $updateRun = mysqli_query($conn, $updateQuery);

            echo $updateRun ? "Success" : "Error";
        }
?>
