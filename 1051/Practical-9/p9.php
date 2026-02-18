<?php 

echo "Write a PHP script to create and display indexed arrays and perform basic array operations.<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





// Creating an indexed array 
$numbers = array(10, 20, 30, 40, 50); 
echo "<h3>Original Array:</h3>"; 
print_r($numbers); 
echo "<br><br>"; 

// Adding an element 
$numbers[] = 60;   // append element 
echo "<h3>After Adding 60:</h3>"; 
print_r($numbers); 
echo "<br><br>"; 

// Removing an element 
unset($numbers[2]);   // removes 30 
echo "<h3>After Removing Element at Index 2:</h3>"; 
print_r($numbers); 
echo "<br><br>"; 

// Sorting the array 
sort($numbers); 
echo "<h3>After Sorting:</h3>"; 
print_r($numbers); 
echo "<br><br>"; 
?> 
