<?php

    require_once('./util/Controller.php');

    /**
     * Custom Controller
     */
    class CalculatorController extends Controller {

        /**
         * Class Constructor
         * 
         * @param CalculatorModel $model
         */
        public function __construct(CalculatorModel $model){
            parent::__construct($model);
        }

        /**
         * Multiply input point
         * 
         * @param mixed $numbers
         */
        public function multiply(... $numbers){

            //check user input
            $this -> checkOperands($numbers);
            $this -> filter($numbers);

            //manipulate the model
            $this -> model -> multiply($numbers);
        }

        /**
         * Divide input point
         * 
         * @param mixed $numbers
         */
        public function divide(... $numbers){

            //check user input
            $this -> checkOperands($numbers);
            $this -> filter($numbers);

            //manipulate the model
            $this -> model -> divide($numbers);
        }

        /**
         * Add input point
         * 
         * @param mixed $numbers
         */
        public function add(... $numbers){

            //check user input
            $this -> checkOperands($numbers);
            $this -> filter($numbers);

            //manipulate the model
            $this -> model -> add($numbers);
        }

        /**
         * Subtract input point
         * 
         * @param mixed $numbers
         */
        public function sub(... $numbers){

            //check user input
            $this -> checkOperands($numbers);
            $this -> filter($numbers);

            //manipulate the model
            $this -> model -> sub($numbers);
        }

        /**
         * Filter user supplied numbers
         * 
         * @param mixed $numbers
         * @throws InvalidArgumentException
         */
        private function filter(&$numbers) {
            foreach($numbers as $key => $number){
                switch (gettype($number)) {
                    case 'string':
                        $number[$key] = strtonum($number);
                        break;
                    case 'integer':
                        break;
                    case 'double':
                        break;
                    default:
                        throw new InvalidArgumentException('Not a number');
                }
            }
        }

        /**
         * Convert a number given as string in the proper type (int or float)
         * 
         * @param string $string Number as string ex '1.0', '0.9', etc
         * @return int|float
         */
        private function strtonum(string $string) {
            if (fmod((float) $string, 1.0) === 0.0) {
                return (int)$string;
            }
            return (float)$string;
        }

        /**
         * Check minimum numbers required for operations
         * 
         * @param array $numbers
         * @throws ArgumentCountError
         */
        private function checkOperands(array $numbers){
            if(count($numbers) < 2) {
                throw new ArgumentCountError('At least two numbers needed for operation');
            }
        }
    }
?>