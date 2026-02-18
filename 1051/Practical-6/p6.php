<?php 
echo "Write a PHP script to demonstrate the use of while, do-while and foreach loops.<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";







echo "<h2>1. While Loop Example</h2>";

$i = 1;

// While loop: Executes as long as condition is true
while ($i <= 5) {
    echo "Number: " . $i . "<br>";
    $i++;
}


echo "<h2>2. Do-While Loop Example</h2>";

$j = 1;

// Do-while loop: Executes at least once before checking condition
do {
    echo "Number: " . $j . "<br>";
    $j++;
} while ($j <= 5);


echo "<h2>3. Foreach Loop Example</h2>";

// Foreach loop: Used for arrays
$colors = array("Red", "Green", "Blue", "Yellow");

foreach ($colors as $color) {
    echo "Color: " . $color . "<br>";
}

?>

