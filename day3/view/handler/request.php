<?php

class Request
{
    private $api_url = 'http://localhost/PRACTICE/api_training_oop/day3/api/url/';
    private $ht_user = 'joseph';
    private $ht_pass = 'passwrd';
    public $ch;

    public function __construct()
    {
        $this->ch = curl_init();
        
        curl_setopt($this->ch, CURLOPT_RETURNTRANSFER, false);
    }

    public function setPostFields($data)
    {
        curl_setopt($this->ch, CURLOPT_POST, true);
        curl_setopt($this->ch, CURLOPT_POSTFIELDS, $data);
    }

    public function setHttpCredentials()
    {
        curl_setopt($this->ch, CURLOPT_USERPWD, $this->ht_user . ":" . $this->ht_pass);
    }

    public function setSSL()
    {
        curl_setopt($this->ch, CURLOPT_SSL_VERIFYPEER, false);
    }

    public function executeCurl($api, $data = [])
    {
        $this->setPostFields($data);
        $this->api_url .= $api;
        curl_setopt($this->ch, CURLOPT_URL, $this->api_url);
        $out = curl_exec($this->ch);
        curl_close($this->ch);
        return $out;
    }
}