<?php

namespace oop\controller;

use oop\model\user as mdl_user;
use oop\controller\Request;

class user {

    public $user;

    public function __construct() {
        $this->user = new mdl_user();
    }

    public function validate_credentials(Request $r) {
        if ($this->user->check_user(['user' => $_POST['user'], 
                                    'pass' => $_POST['pass']])) {
            echo "User is approved!";
        } else {
            echo "User is not approved!";
        }
    }

}
