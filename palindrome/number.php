<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################

function palindrome($n)
{
    $number = $n;

    $sum = 0;
    while (floor($number)) { // floor($number) is return true untill its get not 0
        $rem = $number % 10; //reminder the divition 121%10 = 1; 12%10= 2; 1%10=1


        $sum = $sum * 10 + $rem; // 0+1 = 1; 10+2 = 12; 120+1=121; 

        echo  "rem : " . $rem;
        echo "<br> ======";

        echo  "Sum : " . $sum;
        echo "<br> ======";

        $number = $number / 10;
    }
    return $sum;
}
$input = 121;
$num = palindrome($input);
if ($input == $num) {
    echo "$input is a Palindrome number";
} else {
    echo "$input is not a Palindrome";
}


// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
