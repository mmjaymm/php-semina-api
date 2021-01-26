<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Employee extends User {
    
    function __construct() {
        parent::__construct();
        
        $this->sanitize_input();
    }
    
}

$e = new Employee();

$e->sanitize_input();

Employee::
        

