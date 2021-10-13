<?php

require "event_lab4.php"; // import the Student class from file


#Create an array of objects
$events = array(
    new Event("MySQL", "11:59 AM Jan 10 2021", 
            "12:59 PM Jan 10 2021"),
    new Event("Design Concept", "10:50 AM Jan 10 2021", 
            "11:33 AM Jan 10 2021"), 
    new Event("JavaScript",  "11:30 AM Jan 10 2021", 
            "12:33 PM Jan 10 2021"),
    new Event("PHP", "9:25 AM Jan 10 2021", 
            "10:33 AM Jan 10 2021"),
    new Event("JQUERY", "3:35 PM Jan 10 2021",
              "4:10PM Jan 10 2021"),
    new Event("Docker", "1:30 PM Jan 10 2021", 
            "2:33 PM Jan 10 2021"),
    new Event("SQL", "9:40 AM Jan 10 2021", 
            "11:33 AM Jan 10 2021"),    
    new Event("AJAX", "11:40 AM Jan 10 2021", 
            "12:00 PM Jan 10 2021"),
    new Event("REACT", "2:35 PM Jan 10 2021", 
            "3:10PM Jan 10 2021")       
);

#Sort events array using endtime asscending order
//1 point for usort and print sorted array
usort($events, function($x, $y) {
	//Implement the function
    return $x->getEndTime() < $y->getEndTime() ? -1: 1;
});

/* 
Then print all elements
to make sure sorted sorrectly.
*/

foreach($events as $x) {
    echo $x->getName() . " : " . $x->getEndTime() . "\r\n";
}

//Array that save all events that you will attend
$go_to_events = array($events[0]);

//What is the purpose of this statement?
//1 point for expalnation. Put you explanation as comment
//Your explanation:
$cur_event = $events[0];

//3 points for implementaion of this function
for ($i = 1; $i < count($events); $i++) {
    //Decide if you can attend an event
    
}


//Print out all events that you will attend
foreach($go_to_events as $x) {
    echo ($x->getName() ."\r\n");
}

