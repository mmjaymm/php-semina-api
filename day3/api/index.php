<?php

require_once './model/table.php';
require_once './model/employee.php';
require_once './controller/input.php';
require_once './controller/output.php';
require_once './controller/ManageEmployee.php';

$dbcon = new PDO("pgsql:host=localhost;dbname=curl_db", "postgres", "root", array(\PDO::ATTR_PERSISTENT => true)) or die("Failed to connect!");

header('Content-Type: application/json');

$class = $_GET['class'];
$method = $_GET['method'];

$in = new Input();
$out = new Output();
$me = new $class();

$in->postfields = $_POST;

$result = json_decode($me->$method($in, $out));

echo json_encode($result);

// var_dump($me);