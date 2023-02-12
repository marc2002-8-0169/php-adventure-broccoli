<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
<?php
$input = array("Strong", "Word", "Forever", "Palawenos", "Browser", "League");

function get_longest($input){
$get_longest = $input[0];
for($i = 0; $i < count($input); $i++){
    if(strlen($get_longest) < strlen($input[$i]))
        {
            $get_longest = $input[$i];
        }
}
	echo "The longest string is: ". $get_longest;
}


get_longest($input);
?>    