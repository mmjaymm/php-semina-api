<?php

include_once '../model/ml_user.php';

$toBeCleaned = &$_POST;

function sanitize_input($toBeCleaned) {
    foreach ($toBeCleaned as $key => $value) {
        $sanitized_input[$key] = str_replace("'", '\'', $value);
    }
    return $sanitized_input;
}

if (isset($_POST['user']) && isset($_POST['pass'])) {
    if ($_POST['user'] === $user && $_POST['pass'] === $pass) {
        echo "Hello, $user!";
    }else{
        echo "Bawal ka dito!";
    }
}else{
    echo "Enter your credentials!";
}