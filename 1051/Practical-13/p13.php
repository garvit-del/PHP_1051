<?php 

echo "Write a PHP script to demonstrate inheritance and method overriding in PHP.<br>";
echo "Name : Garvit Tank <br>";
echo "Enrollment Number : 24082291051<br>";
echo "~~~~~~~~~~~~~~~~~~~~~~~~~~~<br><br>";




// Parent class 
class Animal { 
public function sound() { 
echo "Animal makes a sound<br>"; 
} 
} 

// Child class 
class Dog extends Animal { 
// Method overriding 
public function sound() { 
echo "Dog barks"; 
} 
} 

// Creating object of child class 
$obj = new Animal();
$obj->sound(); 
$obj = new Dog(); 
$obj->sound(); 

?>