<?php
//Fibonacci Series printing using a Function

function printFibonacciNumbers($upperLimit){
    $numberOne = 0;
    $numberTwo = 1;

    echo "$numberOne $numberTwo";

    for($i=3; $i<=$upperLimit; $i++){
        $nextNumber = $numberOne + $numberTwo;
        echo " $nextNumber";
        $numberOne = $numberTwo;
        $numberTwo = $nextNumber;
    }
}

printFibonacciNumbers(15);

