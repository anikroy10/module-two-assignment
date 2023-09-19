<?php
//Skip Multiples of 5
define("END", 50);

function isMultipleOfFive($number) : bool {
    if(($number%5) == 0){
        return true;
    }
    return false;
}

for($start=1; $start<=END; $start++){
    if(isMultipleOfFive($start)){
        continue;
    }
    echo "$start ";
}
echo "\n";
