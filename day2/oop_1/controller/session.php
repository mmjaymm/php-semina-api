<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
session_start();

if (! $_SESSION['hidden']) {
    $_SESSION['hidden'] = rand (1, 1000);
}

echo $_SESSION['hidden'];

session_destroy();
