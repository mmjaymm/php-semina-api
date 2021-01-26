<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'http://localhost:8443/test/api/url/user/show_this/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, ['guess' => '1001']);
curl_setopt($ch, CURLOPT_USERPWD, 'joseph:password'); 
$out = curl_exec($ch);
curl_close($ch);

//echo $out;