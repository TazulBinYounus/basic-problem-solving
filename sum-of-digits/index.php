<?php
//place this before any script you want to calculate time
$time_start = microtime(true);


$num = 545001;

$sum = 0;
for ($i = 0; $i <= strlen($num); $i++) {
    $rem = $num % 10;
    $sum = $sum + $rem;
    $num = $num / 10;
}

echo "Sum of digits 545001 is $sum";




echo "<hr>";

$time_end = microtime(true);

//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;



//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
