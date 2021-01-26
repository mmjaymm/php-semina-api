<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
    <?php
    $dbcon = new \PDO("mysql:host=localhost;dbname=api", "root", "", array (\PDO::ATTR_PERSISTENT => true ) ) or die("Failed to connect!");
    if($dbcon){
        echo "Connected";
    }else{
        echo "Not Connected";
    }
    ?>
    <form action="" method="POST">
        <input type="text" name="uname" placeholder="Input Username..."><br><br>
        <input type="password" name="upass" placeholder="Input Password..."><br><br>
        <input type="submit" value="Register">
    </form>
</body>
</html>