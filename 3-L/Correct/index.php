<?php

Interface CalculatorInterface{
    public function add(int $num1,int $num2)  : int;
    public function remove(int $num1,int $num2)  : int;
}
class Calculator implements CalculatorInterface {

    // as you can se here we have added " :int " to make sure that we are returning int always
    public function add(int $num1, int $num2) : int
    {
        return $num1 + $num2;
    }

    public function remove(int $num1, int $num2) : int
    {
        return $num1 - $num2;
    }
}
class AdvanceCalculator extends Calculator {

    public function add(int $num1, int $num2)  : int
    {
        // as you can see now we are * overriding * add method From Father Class :
        // and also we are returning int
        return $num1 + $num2;
    }

    public function remove(int $num1, int $num2)  : int
    {
        // as you can see now we are * overriding * remove method From Father Class :
        // and also we are returning int
        return ($num1 - $num2);
    }
    public function multiply(int $num1, int $num2){

        // as you can see now we are *Not* overriding any method From Father Class :
        // and also we are returning int
        return ($num1 * $num2);
    }
}

$calculator = new AdvanceCalculator();
echo $calculator->add(5,2) . " \n";
echo $calculator->remove(5,2) . " \n";
echo $calculator->multiply(5,2) . " \n";