<?php

class Event{
    private $name;
    private $startTime; //of datetime type
    private $endTime; //of datetime type

    public function __construct(
            $name, /*String*/
            $startTime /*String*/, 
            $endTime /*String*/
    ) {
        
        $this->name = $name;
        //0.5 point for the conversions
        $this->startTime = strtotime($startTime);
        //convert String to timestamp;
        $this->endTime = strtotime($endTime);
        //convert String to timestamp;

        /* 
            Perform data validation: 2 points
            1) Make sure the converted time stamps are not NULL
            2) Start Time must be samller than End Time
            3) Throw exceptions accordingly
            new Exception("Invalid datetime format") or 
            new Exception("Conflicting start and end time");
        */
        
        if ($startTime = NULL) {
            echo "Start Time is NULL";
        }

        else if ($endTime = NULL) {
            echo "End Time is NULL";
        }

        else { 
            echo "Time is not NULL";
        }

        
    }

    foreach ($)

    public function getName() { return $this->name;}
    public function setName($name) {$this->name = $name;}

    //Create setter and getter functions for startTime
    //and endTime: 0.5 point

    public static function isConflict(Event $event1, Event $event2) {
        /*
            2 points
            Determine if there are overlaps between
            the two events, the two events can be in any
            order.
            return true is conflict, else return false
        */
                

    }

   


}


?>
