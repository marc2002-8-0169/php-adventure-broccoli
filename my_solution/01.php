<!-- 
    Write a program that takes a character as input and outputs whether it is a vowel or a consonant.
-->
<!-- A number 1 -->
<?php
$char = 'E';
if($char == 'A' || $char == 'E' 
   || $char == 'I' || $char == 'O' 
   || $char == 'U' || $char == 'a' 
   || $char == 'e' || $char == 'i' 
   || $char == 'o' || $char == 'u')
{
    echo $char . " is a vowel";
}else{
    echo $char . " is consonant";
}
?>