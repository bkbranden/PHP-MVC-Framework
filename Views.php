<?php

class View {

    private $model;
    private $controller;

    public function __construct($controller, $model){
        $this -> controller = $controller;
        $this -> model = $model;

    }

    public function output(){
        // return "hello";
        // return '<p><a href="main.php?action=clicked">' . $this->model->stringout . "</a></p>";
        $data =  "<p>" . $this->model->stringout ."</p>";
        require_once($this->model->template);
    }
}
?>
