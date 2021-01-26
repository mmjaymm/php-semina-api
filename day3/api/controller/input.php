<?php

class Input
{
    public $postfields = [];

    public function __construct()
    {
        $this->postfields = $_POST;

        // $this->sanitize_input();
    }

    public function sanitize_input()
    {
        foreach ($_POST as $key => $val) {
            $this->postfields[$key] = htmlentities($val, ENT_QUOTES, 'utf-8');
        }
    }
}