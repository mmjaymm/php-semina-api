<?php

//debug_backtrace() || header('LOCATION:../view');

//namespace fujitsu\controller;
//
//use fujitsu\model\Employee;

class ManageEmployee
{
    public $employee;
    
    public function __construct()
    {
        $this->employee = new Employee();
    }

    public function getEmployeeList(Input $input, Output $output)
    {
        $error = '';
        $output->data = $this->employee->getAllRecords($error);

        if ($error == '') {
            $output->code = 0;
            $output->message = 'Success';
        } else {
            $output->code = -1;
            $output->message = json_encode($error);
        }

        return $output->returnResponse();
    }

    public function deleteEmployee(Input $input, Output $output)
    {
        $error = '';
        $output->data = $this->employee->updateRecords($keys, $error);

        if ($error == '') {
            $output->code = 0;
            $output->message = 'Success';
        } else {
            $output->code = -1;
            $output->message = json_encode($error);
        }

        return $output->returnResponse();
    }

    public function addEmployees(Input $input, Output $output)
    {
        $error = '';
        $data = [
            'fname' => $input->postfields['fname'],
            'lname' => $input->postfields['lname'],
            'contactnumber' => $input->postfields['contactnumber'],
            'email' => $input->postfields['email']
        ];

        $output->data = $this->employee->insertRecord($data, $error);

        if ($error == '') {
            $output->code = 0;
            $output->message = 'Success';
        } else {
            $output->code = -1;
            $output->message = json_encode($error);
        }

        return $output->returnResponse();
    }
}