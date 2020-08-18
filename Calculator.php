<?php

    class calculator {

        public $number1,$number2;

        function getInput() {
            $this->number1 = readline("Enter first Number: ");
            $this->number2 = readline("Enter second Number: ");
        }

        function addNumbers() {
            $this->getInput();
            return $this->display('+',$this->number1+$this->number2);
        }

        function subtractNumbers() {
            $this->getInput();
            return $this->display('-',$this->number1-$this->number2);
        }

        function multiplyNumbers() {
            $this->getInput();
            return $this->display('*',$this->number1*$this->number2);
        }

        function divideNumbers() {
            $this->getInput();
            if($this->number2 == 0) {
                return "Divisor cannot be zero!";
            }
            return $this->display('/',$this->number1/$this->number2);
        }

        function display($operator, $result) {

            return $this->number1.$operator.$this->number2."=".$result;
        }

    }

    $flag = 1;
    while($flag==1) {

        echo "Calculator!\n 1.Addition\n 2.Subtraction\n 3.Multiplication\n 4.Division\n ";
        $choice = (int)readline("Enter your choice(1-4): ");

        $object = new calculator();

        switch($choice) {
            case 1: print $object->addNumbers();
            break;
            case 2: print $object->subtractNumbers();
            break;
            case 3: print $object->multiplyNumbers();
            break;
            case 4: print $object->divideNumbers();
            break;
            default: print " Please Enter correct choice!!";
        }

        echo "\n";
        $choice =  readline("press 1 to continue and 0 to exit : ");
        if($choice == 0) {
            $flag=0;
        }
    }


?>