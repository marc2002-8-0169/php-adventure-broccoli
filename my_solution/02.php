<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<!-- A number 2-->
<?php
$palindrome = "LEVEL";
$c_string = strrev($palindrome);
if($c_string == $palindrome)
{
    echo $palindrome . " string is a Palindrome";
}else{
    echo $palindrome . " string is not a Palindrome";
}
?>