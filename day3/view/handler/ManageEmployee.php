<?php

require_once './request.php';

$curl = new Request();
$curl->setHttpCredentials();
$curl->setSSL();

switch ($_GET['a']) {
    case 'add':

        $data = [
            'fname' => 'chloe',
            'lname' => 'era',
            'contactnumber' => '1234567890',
            'email' => 'c@y.com'
        ];
        
        $result = $curl->executeCurl('ManageEmployee/addEmployees/', $data);
        echo $result;
        // no break
    case 'delete':
        $data = ['empID' => '2'];
        $result = $curl->executeCurl('ManageEmployee/deleteEmployee/', $data);
        echo $result;
        // no break
    case 'getAll':
        $result = $curl->executeCurl('ManageEmployee/getEmployeeList/', $data);
        echo $result;
}