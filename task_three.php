<?php
//Break on Condition
$numberOne = 0;
$numberTwo = 1;
echo "$numberOne $numberTwo";
for($i=3; $i<=10; $i++){
    $nextNumber = $numberOne + $numberTwo;
    if($nextNumber > 100){
        break;
    }
    echo " $nextNumber";
    $numberOne = $numberTwo;
    $numberTwo = $nextNumber;
}
