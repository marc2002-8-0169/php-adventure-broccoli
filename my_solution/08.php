<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
<?php
$input = "number of words in a string";
echo "String: ".$input."<br><br>";
function total_str($input){
    $count = strlen($input);
    $total = 0;
    for($i = 0; $i<$count-1;$i++)
    {
        if($input[$i] == ' ')
        {
           $total++;
        }
    }
    $total++;
    echo "Number of words: ".$total; 
}
total_str($input);

?> 