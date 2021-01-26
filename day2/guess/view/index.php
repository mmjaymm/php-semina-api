<?php
error_reporting(E_ALL & ~ E_NOTICE);

require_once '../vendor/autoload.php';
//require_once '../model/hidden.php';
//require_once '../controller/number.php';
//require_once '../controller/request.php'; 
session_start();
$x = new \guess\controller\GenNumber();
$r = new \guess\controller\Request();

if (!$_SESSION['hidden']) {
    $_SESSION['hidden'] = $x->generate_number();
} else {
    $mesg = $x->compare_numbers($r);
}
echo $_SESSION['hidden'] . "<br>";
echo $mesg . "<br>";
if ($mesg === "Congratulations!") {
    session_destroy();
}

?>
<form method="post" action="" >
    Enter Your Guess:<input type="text" name="guess" />
    <input type="submit" value="Submit" />
</form>