<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################

$limit = 10;
$numberOne = 0;
$numberTwo = 1;

$total = 0;

while ($limit > 0) {
    echo $numberOne;
    echo "/n";
    $total = ($numberOne + $numberTwo);
    $numberOne = $numberTwo;
    $numberTwo = $total;
    $limit--;
}

// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
