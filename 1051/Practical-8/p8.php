<?php 

echo " Write a PHP script to demonstrate basic string functions such as strlen(), 
substr(), trim(), and strpos().<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";




// Original string 
$str = "Hello World";
echo"<h3> " . $str . "</h3><br>" ;

// strlen() - length of string 
echo "Length: " . strlen($str) . "<br>";

// trim() - remove extra spaces 
echo "Trimmed: " . trim($str) . "<br>";

// substr() - get part of string 
echo "Substring: " . substr($str, 2,4) . "<br>";

// strpos() - find position of word 
echo "Position of 'World': " . strpos($str, "World");
?>