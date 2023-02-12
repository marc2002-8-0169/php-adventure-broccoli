<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
<?php
$input = array(1,5,6,15,23,45,67,89,65);
function arrayMedian($input){
    sort($input);
    $count_array = count($input);
    $median = floor($count_array / 2);
    $get_median = $input[$median];
    if($count_array % 2 == 0) {
    $get_median = ($get_median + $input[$median - 1]) / 2;
  }
    echo "Median: ". $get_median;
}
arrayMedian($input);
?>  
