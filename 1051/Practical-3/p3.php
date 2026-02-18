<?php 

echo "Write a PHP script to demonstrate decision making in PHP using if–else and switch–case statements.<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





// IF–ELSE & ELSEIF LADDER 
$marks = 86; 
echo "<h3>Result using if-else and elseif ladder</h3>"; 
if ($marks >= 75) { 
echo "Grade: Distinction<br>"; 
} elseif ($marks >= 60) { 
echo "Grade: First Class<br>"; 
} elseif ($marks >= 50) { 
echo "Grade: Pass<br>"; 
} else { 
echo "Grade: Fail<br>"; 
} 
echo "<br><br>"; 
// SWITCH–CASE STATEMENT 

$day = 2; 
echo "<h3>Day using switch-case</h3>"; 
switch ($day) { 
case 1: 
echo "Monday"; 
break; 
case 2: 
echo "Tuesday"; 
break; 
case 3: 
echo "Wednesday"; 
break; 
default: 
echo "Invalid Day"; 
} 
?>