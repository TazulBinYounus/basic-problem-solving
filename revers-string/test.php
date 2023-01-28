<?php

$str = 'hello';
//find the sting lenth and minus 1 means "hello" = 4
$lenth = strlen($str) - 1;
//define a empty string 
$revStr = "";

//untill sting lenth less than 0
while ($lenth >= 0) {
    //content last string lenth  
    $revStr = $revStr . $str[$lenth];
    $lenth--;
}
echo $revStr;
