<?php

    /*
     * Parent class for custom Model Classes
     */

     class Model implements SplSubject {
         
        /**
         * @var object List of attached observers
         */
        private $observers;

        /**
         * @var array Data for notify to observer
         */
        private $updates = [];

        /**
         * Class Constructor
         */
        public function __construct() {
            $this -> observers = new SplObjectStorage();
        }

        /**
         * Attach an Observer class to this Subject for updates
         * when a subject state change occurs
         * 
         * @param SplObserver $observer
         */
        public function attach(SplObserver $observer) {
            if($observer instanceof View) {
                $this -> observers -> attach($observer);
            }
        }

        /**
         * Detach an Observer class from this Subject
         * 
         * @param SplObserver $observer
         */
        public function detach(SplObserver $observer) {
            if ($observer instanceof View) {
                $this-> observers -> detach($observer);
            }
        }

        /**
         * Notify a state change of Subject to all registered Observers
         */
        public function notify() {
            foreach ($this -> observers as $value){
                $value -> update($this);
            }
        }

        /**
         * Set the data to notify all of the registered Observers
         * 
         * @param array $data
         */
        public function set(array $data){
            $this -> updates = array_merge_recursive($this -> updates, $data);
        }

        /**
         * Get the data to notify all registered observers
         * 
         * @return array
         */
        public function get(): array {
            return $this -> updates;
        }

     }
?>