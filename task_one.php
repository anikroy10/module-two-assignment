<?php
//Looping with Increment using a Function

function printLevel($text){
    echo "$text\n";
}

function printNewLine(){
    echo "\n\n";
}

function isEven($number) : bool {
    if(($number%2) == 0){
        return true;
    }
    return false;
}

//for loop example start
function printEvenNumbersUsingForLoop($start, $end, $step){
    for($i=($start-1); $i<=$end; $i+=$step){
        if($i == 0){
            continue;
        }
        if(isEven($i)){
            echo "$i ";
        }
    }
}
printLevel("Printing even numbers using for loop");
printEvenNumbersUsingForLoop(1, 20, 2);
printNewLine();
//for loop example end

//while loop example start
function printEvenNumbersUsingWhileLoop($start, $end, $step){
    $modifiedStart = $start - 1;
    while($modifiedStart <= $end){
        if($modifiedStart == 0){
            $modifiedStart += $step;
            continue;
        }
        echo "$modifiedStart ";
        $modifiedStart += $step;
    }
}
printLevel("Printing even numbers using while loop");
printEvenNumbersUsingWhileLoop(1, 20, 2);
printNewLine();
//while loop example end

//Do while loop example start
function printEvenNumbersUsingDoWhileLoop($start, $end, $step){
    $modifiedStart = $start - 1;
    do{
        if($modifiedStart == 0) {
            $modifiedStart += $step;
            continue;
        }
        echo "$modifiedStart ";
        $modifiedStart += $step;
    } while($modifiedStart <= $end);
}
printLevel("Printing even numbers using do while loop");
printEvenNumbersUsingDoWhileLoop(1, 20, 2);
printNewLine();
//Do while loop example end








