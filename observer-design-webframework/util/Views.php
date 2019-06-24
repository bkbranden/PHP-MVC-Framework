<?php


    /**
     * Parent class for custom view classes
     */
    class View implements SplObserver {

        /**
         * @var array Data for the dynamic view
         */
        protected $data = [];

        /**
         * @var string Output data
         */
        protected $output = '';

        /**
         * @var Model Model for access data
         */
        protected $model;

        /**
         * Class Constructor
         * 
         * @param Model $model
         */
        public function __construct(Model $model) {
            $this -> model = $model;
        }

        /**
         * Render a template
         */
        public function render(): string {
            return $this -> output;
        }

        /**
         * Update Observer data
         * 
         * @param SplSubject $subject
         */
        public function update(SplSubject $subject) {
            if ($subject instanceof Model ) {
                $this -> data = array_merge($this -> data, $subject -> get());
            }
        }

        
    }
?>
