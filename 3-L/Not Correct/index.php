<?php
Interface CalculatorInterface{
    public function add(int $num1,int $num2);
    public function remove(int $num1,int $num2);
}
class Calculator implements CalculatorInterface {

    public function add(int $num1, int $num2)
    {
        return $num1 + $num2;
    }

    public function remove(int $num1, int $num2)
    {
        return $num1 - $num2;
    }
}
class AdvanceCalculator extends Calculator {

    public function add(int $num1, int $num2)
    {
        // as you can see now we are * overriding * add method From Father Class :
        // but we are returning *String* instead of int
        return "Your Result Is : " . ($num1 + $num2);
    }

    public function remove(int $num1, int $num2)
    {
        // as you can see now we are * overriding * remove method From Father Class :
        // but we are returning *String* instead of int
        return "Your Result Is : " . ($num1 - $num2);
    }
    public function multiply(int $num1, int $num2){

        // as you can see now we are *Not* overriding any method From Father Class :
        // so it does not matter if we return string
        return "Your Result Is : " . ($num1 * $num2);
    }
}

$calculator = new AdvanceCalculator();
echo $calculator->add(5,2) . " \n";
echo $calculator->remove(5,2) . " \n";
echo $calculator->multiply(5,2) . " \n";