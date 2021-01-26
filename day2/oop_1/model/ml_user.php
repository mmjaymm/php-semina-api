<?php 
namespace oop_1\model;

class User {
    
    public $user = 'joseph';
    private $pass = 'password';
    protected $age = '24';
    /**
     * @desc Method to check if the submitted credentials are correct
     * 
     * @param array $credentials
     * @return boolean
     */
    public function check_user(array $credentials = null) {
        $message = FALSE;
        
        if ($this->user === $credentials['user'] 
                && $this->pass === $credentials['pass']) {
            $message = TRUE;
        }
        return $message;
    }
}

