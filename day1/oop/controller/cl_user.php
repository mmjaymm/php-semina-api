<?php
require_once '../model/ml_user.php';
class User {

    public $user;
    static $var = 1;
    public $postfields = [];

    public function __construct() {
        $this->user = new ml_user();
        $this->sanitize_input();

        // echo "<pre>";
        echo json_encode($this);
        // echo "</pre>";
    }
    /**
     * @desc method to clean or filter the inputs
     */
    private function sanitize_input (){
        foreach ($_POST as $key => $value) {
            $this->postfields[$key] = htmlentities($value, ENT_QUOTES, 'utf-8');
        }
        echo "This function has been called";
    }

    public function validate_credentials() {
        if ($this->user->check_user(['user' => $this->postfields['user'], 
                                    'pass' => $this->postfields['pass']])) {
            echo "User is approved!";
            
        } else {
            echo "User is not approved!";
        }

        // print_r($this->postfields);
    }
    

    
}
$u = new User;