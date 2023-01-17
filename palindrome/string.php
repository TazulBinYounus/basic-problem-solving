<?php
//place this before any script you want to calculate time
$time_start = microtime(true);
// #################################################################

function Palindrome($MyString)
{
    $l = 0;
    $r = strlen($MyString) - 1;
    echo $r;
    echo "<br>";
    $flag = 0;

    while ($r > $l) {
        if ($MyString[$l] != $MyString[$r]) {
            $flag = 1;
            break;
        }
        $l++;
        $r--;
    }

    if ($flag == 0) {
        echo $MyString . " is a Palindrome string.\n";
    } else {
        echo $MyString . " is not a Palindrome string.\n";
    }
}

Palindrome("radar");
// Palindrome("rubber");
// Palindrome("malayalam");

// ###########################################################################
echo "<hr>";
$time_end = microtime(true);
//dividing with 60 will give the execution time in minutes otherwise seconds
$execution_time = ($time_end - $time_start) / 60;
//execution time of the script
echo '<b>Total Execution Time:</b> ' . $execution_time . ' Mins';
// if you get weird results, use number_format((float) $execution_time, 10) 
