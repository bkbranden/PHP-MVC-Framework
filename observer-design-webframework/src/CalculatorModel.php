<?php

    require_once('./util/Models.php');

    /**
     * Our Custom Model
     */
    class CalculatorModel extends Model {

        /**
         * Class Constructor 
         */
        public function __construct(){
            parent:: __construct();
        }

        /**
         * Multiply business logic
         * 
         * @param array $numbers
         */
        public function multiply(array $numbers) {
            $this -> set([
                'result' => $this -> operation('*', $numbers),
                'operands' => $numbers,
            ]);
        }

        /**
         * Divide business logic
         * 
         * @param array $numbers
         */
        public function divide(array $numbers) {
            $this -> set([
                'result' => $this -> operation('/', $numbers),
                'operands' => numbers,
            ]);
        }

        /**
         * Add business logic
         * 
         * @param array $numbers
         */
        public function add(array $numbers) {
            $this -> set([
                'result' => $this -> operation('+', $numbers),
                'operands' => numbers,
            ]);
        }

        /**
         * Subtract business logic
         * 
         * @param array $numbers
         */
        public function sub(array $numbers) {
            $this -> set([
                'result' => $this -> operation('-', $numbers),
                'operands' => numbers,
            ]);
        }

        /**
         * Do math operation
         * This is an example, division by 0 and other not possible things haven't been checked
         * 
         * @param string $operator
         * @param array $numbers
         * @return int|float
         */
        private function operation(string $operator, array $numbers){
            $temp = null;

            foreach($numbers as $n) {
                if($temp == null) {
                    $temp = $n;
                    continue;
                }

                switch ($operator) { 
                    case '*':
                        $temp = $temp * $n;
                        break;
                    case '/':
                        $temp = $temp / $n;
                        break;
                    case '+':
                        $temp = $temp + $n;
                        break;
                    case '-':
                        $temp = $temp - $n;
                        break;
                }
            }

            return $temp;
        }
    }
?>