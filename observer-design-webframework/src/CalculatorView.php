<?php

    require_once('./util/Views.php');
    /**
     * Our Custom View
     */
    class CalculatorView extends View {

        /**
         * Class Constructor
         * 
         * @param CalculatorModel $model
         */
        public function __construct(CalculatorModel $model){
            parent::__construct($model);
        }

        /**
         * Build output for multiply
         */
        public function multiply() {
            $this -> output = $this -> generateOutput(
                'Multiplication',
                $this -> data['operands'],
                $this -> data['result']
            );
        }

        /**
         * Build output for divide
         */
        public function divide() {
            $this -> output = $this -> generateOutput(
                'Division',
                $this -> data['operands'],
                $this -> data['result']
            );
        }

        /**
         * Build output for addition
         */
        public function add() {
            $this -> output = $this -> generateOutput(
                'Addition',
                $this -> data['operands'],
                $this -> data['result']
            );
        }

        /**
         * Build output for subtraction
         */
        public function sub() {
            $this -> output = $this -> generateOutput(
                'Subtraction',
                $this -> data['operands'],
                $this -> data['result']
            );
        }

        /**
         * Generate the output.
         * 
         * @param string $operation
         * @param string $operand
         * @param type $result
         * 
         * @return string
         */
        private function generateOutput(string $operation, array $operands, $result): string {
            $string = $operation . ": ";

            foreach ($operands  as $value) {
                $string .= $value . ' * ';
            }

            $string = substr($string, 0 , strlen($string) -2);
            $string .= '= ' . $result;

            return $string;
        }
    }
?>
