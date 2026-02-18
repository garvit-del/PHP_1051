<?php

echo "Write a PHP script to create associative arrays and apply sorting functions such as asort()and ksort().<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";




// Creating an associative array
$students = array(
    "Garvit" => 85,
    "Rudra" => 92,
    "Sujal" => 78,
);

echo "<h2>Original Array:</h2>";
foreach ($students as $name => $marks) {
    echo $name . " => " . $marks . "<br>";
}


// 1. asort() - Sort by values (marks) in ascending order
asort($students);

echo "<h2>Array after asort() (Sorted by Values):</h2>";
foreach ($students as $name => $marks) {
    echo $name . " => " . $marks . "<br>";
}


// 2. ksort() - Sort by keys (names) in ascending order
ksort($students);

echo "<h2>Array after ksort() (Sorted by Keys):</h2>";
foreach ($students as $name => $marks) {
    echo $name . " => " . $marks . "<br>";
}

?>
