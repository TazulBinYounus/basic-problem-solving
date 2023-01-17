<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################

$number = 1233456;
if ($number % 2 == 0) {
    echo "$number is Even Number";
} else {
    echo "$number is Odd Number";
}



// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
