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

        if (strtotime($startTime) == NULL) {
            echo $name . " Start Time is NULL" ."\r\n";
        }
        if (strtotime($endTime) == NULL) {
            echo $name . " End Time is NULL" ."\r\n";
        }
        else {
            echo $name . " Start Time is not NULL" ."\r\n";
            echo $name . " End Time is not NULL" ."\r\n";
        }

        if (strtotime($startTime) < strtotime($endTime)) {
            echo $name . " Start Time is smaller than End Time" ."\r\n";
        }
        else {
            echo $name . " Start Time is NOT smaller than End Time" ."\r\n";
        }
    }

    public function getName() { return $this->name;}
    public function setName($name) {$this->name = $name;}

    //Create setter and getter functions for startTime
    //and endTime: 0.5 point
    public function getStartTime() { return $this->startTime;}
    public function setStartTime($startTime) {$this->startTime = $startTime;}

    public function getEndTime() { return $this->endTime;}
    public function setEndTime($endTime) {$this->endTime = $endTime;}

    public static function isConflict(Event $event1, Event $event2) {
        /*
            2 points
            Determine if there are overlaps between
            the two events, the two events can be in any
            order.
            return true is conflict, else return false
        */
        if ($event2->getEndTime() > $event1->getEndTime() && $event2->getStartTime() < $event1->getEndTime()) {
            return true;
        }
        else {
            return false;
        }
    }
}


?>