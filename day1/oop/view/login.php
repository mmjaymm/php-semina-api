<?php
require_once '../controller/cl_user.php';
require_once '../model/ml_user.php';

if (isset($_POST['user']) && isset($_POST['pass'])) {
    $u = new User();
    $u->validate_credentials();
}
?>
<form method='post' action='' >
    Username:<input type='text' name='user' />
    Password:<input type='password' name='pass' />
    <input type='submit' name='submit' value='Submit'>
</form>
