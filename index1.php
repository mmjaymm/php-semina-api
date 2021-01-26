<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $cookie_name = "user";
        $cookie_value = json_encode(['joseph','aileen']);
        setcookie($cookie_name, $cookie_value, time() + (10), "/");
        header("LOCATION: cookie.php");
        ?>
    </body>
</html>
