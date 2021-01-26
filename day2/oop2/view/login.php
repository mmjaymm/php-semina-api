<?php

require '../vendor/autoload.php';

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $u = new \oop\controller\user();
    $r = new \oop\controller\Request();
    $u->validate_credentials($r);
}
?>
<form method='post' action='' >
    Username:<input type='text' name='user' />
    Password:<input type='password' name='pass' />
    <input type='submit' name='submit' value='Submit'>
</form>
