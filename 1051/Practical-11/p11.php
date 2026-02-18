<?php 

echo "Write a PHP script to demonstrate the concept of class and object in PHP.<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";





// Class definition 
class Student { 
public $name; 
public $age; 

// Method to display details 
function showDetails() { 
echo "Student Name: " . $this->name . "<br>"; 
echo "Student Age: " . $this->age . "<br>"; 
} 
} 

// Creating object of the class 
$stud1 = new Student(); 

// Assigning values to object properties 
$stud1->name = "Garvit"; 
$stud1->age = 18; 

// Calling method using object 
$stud1->showDetails(); 
?>