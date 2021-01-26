<?php
error_reporting(E_ALL);
$user = 'joseph';
$pass = 'password';

if (isset($_POST['user']) && isset($_POST['pass'])) {
    if ($_POST['user'] === $user && $_POST['pass'] === $pass) {
        echo "Hello, $user!";
    }else{
        echo "Bawal ka dito!";
    }
}else{
    echo "Enter your credentials!";
}
?>
<form method='post' action='' >
    Username:<input type='text' name='user' />
    Password:<input type='password' name='pass' />
    <input type='submit' name='submit' value='Submit'>
</form>
    
<?php

$str = "php'1;";

print htmlentities($str, ENT_QUOTES, 'UTF-8');

if (get_magic_quotes_gpc()) {
    print "on";
}else{
    print "off";
}
print strip_tags($str);

try {
    $div = 0;
    if ($div = 0) throw new Error("No number");
$result = 1 / $div;
echo $result;
}
catch(Exception $e) {
// code that executes if there is an exception
    print "division by 0 not allowed\n";
    print $e->getMessage();
}
catch(Error $e) {
// PHP 7+ capture and handle errors
    print $e->getMessage();
}