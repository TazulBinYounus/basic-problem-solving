<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################

$count = 0;
$num = 2;
while ($count < 15) {
    $div_count = 0;
    for ($i = 1; $i <= $num; $i++) {
        if (($num % $i) == 0) {
            $div_count++;
        }
    }
    if ($div_count < 3) {
        echo $num . " , ";
        $count = $count + 1;
    }
    $num = $num + 1;
}

// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
