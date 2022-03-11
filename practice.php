<?php
$array = ["blue", "green", "yellow", "red"];
echo $array[0];
//blueと表示される//

$array2 = array("blue", "green", "yellow", "red");
echo $array2[1];
//greenと表示される//

$calendar = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
];
echo $calendar["February"];
//2月と表示される//

function sum1() {
    $result1 = 10 * 2;
    return $result1;
}
echo sum1();
//20と表示される//


function sum2($num) {
    global $num2;
    $num2 = 100;
    echo $num + $num2;
}
sum2(5);
echo $num2;


