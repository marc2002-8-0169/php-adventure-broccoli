<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->
<?php
$input = 123456789;
$total = 0;
for($i = 0; $i< strlen($input);$i++){
    $get_rem = $input % 10;
    $input = $input / 10;
    $total = $total + $get_rem;
}
echo "Sum of Digits: " . $total; 
?>