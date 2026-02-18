<?php 

echo "Write a PHP script using switch-case to implement a simple menu-driven or calculator system.<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





// Numbers 
$a = 20; 
$b = 10; 
// Choice (menu option) 
$choice = 2;   // 1:Add, 2:Subtract, 3:Multiply, 4:Divide 
echo "<h3>Simple Calculator using Switch-Case</h3>"; 
echo "Number 1 = $a <br>"; 
echo "Number 2 = $b <br><br>"; 
switch ($choice) { 
case 1: 
echo "Addition = " . ($a + $b); 
break; 
case 2: 
echo "Subtraction = " . ($a - $b); 
break; 
case 3: 
echo "Multiplication = " . ($a * $b); 
break; 
case 4: 
if ($b != 0) { 
echo "Division = " . ($a / $b); 
} else { 
echo "Division not possible (divide by zero)"; 
} 
break; 
default: 
echo "Invalid Choice"; 
} 
?>