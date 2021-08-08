<?php
/**
 * Use '$this' to refer to the current object. Use 'self' to refer to the current class. In other words, use $this->member for non-static members, use self::$member for static members.
 */
class MathCalculator{
    private $number;
    static $name;
    static function fibonacci($n){
        self::$name = 12;
        self::doSomething();
        //Cannot use '$this' in non-object context
        // $this->number = 10;
        echo "Fibonacci series up to {$n}\n";
    }

    static function doSomething(){
        echo "Doing Something\n";
    }

    function factorial($n){
        self::doSomething();
        $this->doSomething();
        $this->number = 10;
        echo "Calculating factorial of {$n}\n";
    }
}

MathCalculator::fibonacci(4);


$mathc = new MathCalculator();
$mathc->factorial(5);