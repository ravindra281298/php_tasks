<?php

    function addNumbers($a, $b) {
        return $a + $b;
    }

    function subtractNumbers($a, $b) {
        return $a - $b;
    }

    function multiplyNumbers($a, $b) {
        return $a * $b;
    }

    function divideNumbers($a, $b) {
        return $a / $b;
    }

    echo "Calculator!\n 1.Addition\n 2.Subtraction\n 3.Multiplication\n 4.Division\n ";
    $n = (int)readline("Enter your choice(1-4): ");
    $number1 = readline("Enter first Number: ");
    $number2 = readline("Enter second Number: ");

    switch($n) {
        case 1: print addNumbers($number1,$number2);
        break;
        case 2: print subtractNumbers($number1,$number2);
        break;
        case 3: print multiplyNumbers($number1,$number2);
        break;
        case 4: print divideNumbers($number1,$number2);
        break;
        default: print "Enter correct choice!!";
    }

?>