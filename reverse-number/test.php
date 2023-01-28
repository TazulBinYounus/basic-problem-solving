<?php

$number = 345;
$reverseNumber = 0;

while ($number > 1) {
    //make remainder
    $remider = $number % 10;
    //multiply reverseNumber into 10 and plus remider
    $reverseNumber = ($reverseNumber * 10) + $remider;
    // remove the last digit value
    $number = $number / 10;
}

echo $reverseNumber;
