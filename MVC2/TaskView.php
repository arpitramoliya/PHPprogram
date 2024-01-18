<?php

class TaskView {
    public function displayTasks($tasks) {
        echo "Tasks:\n";
        foreach ($tasks as $task) {
            echo "- $task\n";
        }
    }
}

?>
