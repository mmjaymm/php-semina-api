<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function handle_my_errors($errorNum, $errorMessage, $errorFile, $errorLine, $errorContext) {
    print_r( [
        'Number' => $errorNum,
        'Message' => $errorMessage,
        'File' => $errorFile,
        'Line' => $errorLine,
        'Context' => $errorContext
    ] );
}

set_error_handler("handle_my_errors");

if (2 == 2) {
    echo "Testing";
    trigger_error("Testing");
}
