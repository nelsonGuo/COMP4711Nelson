<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Student
 *
 * @author nelson
 */
class Student {
    
    
    //declare variables of student class
    function _construct(){
        $this->surname = '';
        $this->first_name ='';
        $this->emails = array();
        $this->grades = array();
        
    }
    
    // a setter to email 
    function add_email($which, $address){
        $this->emails[$which] = $address;
    }
    
    //a setter to grade
    function add_grade($grade) {
        $this->grades[] = $grade;
    }
    
    //cacluates the average grade
    function average() {
    $total = 0;
    foreach ($this->grades as $value) {
            $total += $value;
        }
        return $total / count($this->grades);
    
    }
    
    //format the output string 
    function toString() {
    $result = $this->first_name . ' ' . $this->surname;
    $result .= ' ('.$this->average().")\n";
    foreach ($this->emails as $which => $what) {
            $result .= $which . ': ' . $what . "\n";
        }
        $result .= "\n";
    return '<pre>'.$result.'</pre>';
    }
}
