<?php

//use api\model\User as mdl_user;

class user {

    public $user;
    static $var = 1;
    

    public function __construct() {

    }

    public function validate_credentials(Request $r) {
        if ($this->user->check_user(['user' => $r->postfields['user'], 
                                    'pass' => $r->postfields['pass']])) {
            echo "User is approved!";
            
        } else {
            echo "User is not approved!";
        }
    }
    
    public function show_this() {
        $json = json_encode(['a'=>'sample object','b'=>['apple','banana']]);
        echo $json;
        
    }
    public function display_postvalues() {
        echo "<br>".$_POST['guess'];
    }
    

    
}
