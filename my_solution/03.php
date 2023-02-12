<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php error_reporting(0); ?> 
<?php
$str = "word";
$len_str = array();

for($i = 0;$i < strlen($str); $i++)
{
    for($j = $i;$j < strlen($str);$j++)
    {
        if($str[$i] == $str[$j])
        {
            $len_str[$i]++;
        }
    }
}

echo "String Frequency: <br>";
for($i = 0;$i < count($len_str); $i++)
{
    if($str[$i] != ' '){
        echo $str[$i] . " - " . $len_str[$i] . "<br>";
    }
}
?> 