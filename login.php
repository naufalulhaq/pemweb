<?php

session_start();

require_once "connection.php";

$name = mysqli_real_escape_string($con, $_POST['username']);
$pass = mysqli_real_escape_string($con, $_POST['password']);

$s = "SELECT * FROM user_table WHERE name = '$name' AND password= '$pass'"; //  username = ' or 1=1 #

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if ($num > 0) {
    header('location:dashboard.html');
} else {
    header('location:failed.php');
}

?>