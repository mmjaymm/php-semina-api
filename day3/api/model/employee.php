<?php
//debug_backtrace() || header('LOCATION:../view');

//namespace fujitsu\model;
//
//use fujitsu\model\Table;

class Employee extends Table
{
    private $fname;
    private $lname;
    private $contactnumber;
    private $email;
    private $status;
    
    public function __construct()
    {
        $this->setTableName('employee');
    }
    
    public function setFname($value)
    {
        $this->fname = $value;
    }
    public function setLname($value)
    {
        $this->lname = $value;
    }
    public function setContactNumber($value)
    {
        $this->contactnumber = $value;
    }
    public function setEmail($value)
    {
        $this->email = $value;
    }
    public function setStatus($value)
    {
        $this->status = $value;
    }
    public function getFname()
    {
        return $this->fname;
    }
    public function getLname()
    {
        return $this->lname;
    }
    public function getContactNumber()
    {
        return $this->contactnumber;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getStatus()
    {
        return $this->status;
    }
}