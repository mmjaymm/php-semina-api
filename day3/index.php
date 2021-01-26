<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$dbcon = new \PDO("pgsql:host=localhost;dbname=curl_db", "postgres", "root", array(\PDO::ATTR_PERSISTENT => true )) or die("Failed to connect!");

if ($dbcon) {
    echo "Connected!";
} else {
    echo "Please connect to database.";
}