<?php

class TaskController {
    private $model;
    private $view;

    public function __construct($model, $view) {
        $this->model = $model;
        $this->view = $view;
    }

    public function addTask($task) {
        $this->model->addTask($task);
        $tasks = $this->model->getTasks();
        $this->view->displayTasks($tasks);
    }
}
?>
