<?php

require "student.php"; // import the Student class from file


#Create an array of objects
$students = array(
  new D3Student("Alex", 3.3, "A310"),
  new D3Student("Lilian", 3.2, "A360"), 
  new D3Student("Amy", 2.6, "A130"),
  new D3Student("Vincent", 2.8, "A200"),
  new D3Student("Angela", 4, "A255")
);

#Sort students array using gpa asscending order
usort($students, function($x, $y) {
	//try implement this function	
});

/* 
Print out all elements of the sorted array
in ascending order
*/

foreach ($students as $a ){
	//echo "Name and gpa of each student" "\r\n";
  
}

//Test static method
D3Student::printLetterGrade($students);
