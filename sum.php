<?php
function sum(){
    $result = 0;
    for($i = 1; $i <= 10; $i++){
        $result += $i;
    }
    return $result;
}
echo sum();

function sum1($max){
    $result = 0;
    for($i = 1; $i <= $max; $i++){
        $result += $i;
    }
    return $result;
}
echo sum1(100);
