<?php

/**
 * Student Class
 *
 * @author Quincy
 */
class Student {
    //constructor for student class
    function __construct() {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }
    
    //add email method
    function add_email($which,$address) {
    $this->emails[$which] = $address;
}

    //add grade method
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //averages grades
    function average() {
    $total = 0;
    foreach ($this->grades as $value)
        $total += $value;
    return $total / count($this->grades);
    
    }
    
    //prints message as a string
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('.$this->average().")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': '. $what. "\n";
        $result .= "\n";
        return '<pre>'.$result.'</pre>';
    }
}
