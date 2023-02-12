<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->
<?php
$input = "Remove Vowels";
echo "String: " . $input . "<br>";

function r_vowels($input){
    $remove = str_replace(array("a", "A", "e", "E", "i", "I", "o", "O", "u", "U",), "", $input);
	echo "String with Vowels Remove: ". $remove;
}

r_vowels($input);
?>  