<?php

    /**
     * Parent class for custom controller classes
     */
    class Controller {

        /**
         * @var object The model object for current controller
         */
        protected $model = null;

        /**
         * Class Constructor
         * 
         * @param object $model
         */
        public function __construct(Model $model){
            $this -> model = $model;
        }
    }
?>