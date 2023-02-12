<!-- 
    Write a program that takes an array of numbers as input and outputs the sum of the numbers.
 -->
<?php
$input = array(1,2,3,4,5,6);
$sum = 0;
for($i = 0; $i< count($input);$i++){
    $sum += $input[$i];
}
echo "Sum of numbers: " . $sum; 
?> 
