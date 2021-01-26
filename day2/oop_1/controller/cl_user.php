<?php
namespace oop_1\controller;

use oop_1\model\User as mdl_user;

class User {

    public $user;
    static $var = 1;
    

    public function __construct() {
        $this->user = new mdl_user();
    }

    public function validate_credentials(Request $r) {
        if ($this->user->check_user(['user' => $r->postfields['user'], 
                                    'pass' => $r->postfields['pass']])) {
            echo "User is approved!";
            
        } else {
            echo "User is not approved!";
        }
        print_r($this->postfields);
    }
    

    
}