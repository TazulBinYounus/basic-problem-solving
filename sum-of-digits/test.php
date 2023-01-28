<?php

$number = 345;
$sum = 0;

while ($number > 1) {
    //make remainder of divition
    $remider = $number % 10;
    //add last last digit 
    $sum = $sum + $remider;
    // remove the last digit value
    $number = $number / 10;
}

echo $sum;
