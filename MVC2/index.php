<?php

    require_once 'TaskModel.php';
    require_once 'TaskView.php';
    require_once 'TaskController.php';

    $model = new TaskModel();
    $view = new TaskView();
    $controller = new TaskController($model, $view);

    $controller->addTask("Complete assignment");
    $controller->addTask("Go to the gym");
    $controller->addTask("Buy groceries");
?>
