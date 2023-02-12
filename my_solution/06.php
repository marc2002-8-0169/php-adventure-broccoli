<!-- 
    Write a program that outputs the first n triangular numbers.
 -->
<?php
$input = 5;
$inc1 = 0;
$inc2 = 0;
echo "Given number: ".$input."<br>";
echo "Triangular numbers from n: ";
for($i = 1; $i <= $input;$i++){
    $inc1 = $inc1 + 1;
    $inc2 = $inc2 + $inc1; 
    echo " ";
    echo $inc2;
    echo " ";
} 
?>
