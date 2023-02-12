<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php
$input = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);

function arrayAverage($input){
    $devide_arr = array_sum($input) / count($input);
    echo "Average is: ". $devide_arr;
}

arrayAverage($input);
?>