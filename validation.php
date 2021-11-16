<?php

session_start();
$servername = "sql310.epizy.com";
$username = "epiz_30271228";
$password = "LDpmzP3sJrcS";
$dbName = "epiz_30271228_naufal";


// Create connection
$con = mysqli_connect($servername, $username, $password, $dbName);

$name = mysqli_real_escape_string($con, $_POST['user']);
$pass = mysqli_real_escape_string($con, $_POST['password']);

$s = "select * from user_table where name = '$name' and password= '$pass'"; //  username = ' or 1=1 #

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num > 0) {
    header('location:success.php');
} else {
    header('location:failed.php');
}

?>