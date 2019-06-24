<?php
    require_once('./src/CalculatorModel.php');
    require_once('./src/CalculatorController.php');
    require_once('./src/CalculatorView.php');

    $model = new CalculatorModel();
    $view = new CalculatorView($model);
    $controller = new CalculatorController($model);

    $model -> attach($view);

    $controller -> multiply(2,3);

    $model -> notify();

    $view -> multiply();

    echo $view -> render();

    $controller -> add(10, 15);
    $model -> notify();
    $view -> add();
    echo $view -> render();
?>