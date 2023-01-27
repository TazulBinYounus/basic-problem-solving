<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################

$numers = 1211;
$reverseNumber = 0;

while ($numers > 1) {
    $remain = $numers % 10; // remain = 5
    $reverseNumber = ($reverseNumber * 10) + $remain; //0*10+5=5; 5*10+4=54; 54*10+3=543; 543*10+2=5432; 5432*10+1=54321;
    print_r($reverseNumber);
    echo "<br>";
    // print_r($reverseNumber);
    $numers = ($numers / 10);
}

echo "Reverse Number: " . $reverseNumber;

// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
