<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


require_once './controller/cl_request.php';
require_once './controller/cl_user.php';
require_once './model/ml_user.php';

header('Content-Type: application/json');

$request = new Request();
$class = $_GET['class'];
$method = $_GET['method'];
$u = new $class();
$u->$method();
