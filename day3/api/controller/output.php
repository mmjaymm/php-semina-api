<?php

class Output
{
    public $code = 0;
    public $message = '';
    public $data = '';
    public $returns = [];
    public $debug_switch = 1;

    public function __construct()
    {
    }

    public function returnResponse()
    {
        $this->returns = [
            "code" => $this->code,
            "message" => $this->message,
            "data" => $this->data
        ];
        if (($this->debug_switch) == 1) {
            $this->returns['average_memory'] = number_format(memory_get_usage()) . 'B';
            $this->returns['peak_memory'] = number_format(memory_get_peak_usage()) . 'B';
        }

        return json_encode($this->returns);
    }
}