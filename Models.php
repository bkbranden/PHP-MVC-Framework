<?php

class Model{

    public $stringout;

    public function __construct(){
        $this -> stringout = "The string has been loaded through the template.";
        $this -> template = __DIR__ ."/tpl/template.php";
    }
}

?>
