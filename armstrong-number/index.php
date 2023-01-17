<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################



// @return string;
// @param mixed $number;
function findArmstrongNumber($number)
{
    $tempNumber = $number;
    $total = 0;

    while ($tempNumber != 0) {
        $rem = $tempNumber % 10;  // remider of divition
        $total = $total + $rem * $rem * $rem;
        $tempNumber = $tempNumber / 10;
    }
    if ($number == $total) {
        return "Yes it is an Armstrong number";
    } else {
        return "No it is not an armstrong number";
    }
}

echo findArmstrongNumber(153);





// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
