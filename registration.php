<?php
    session_start();
    header('location:index.php');
    $servername = "sql310.epizy.com";
    $username = "epiz_30271228";
    $password = "LDpmzP3sJrcS";
    $dbName = "epiz_30271228_naufal";

    // Create connection
    $con = mysqli_connect($servername, $username, $password, $dbName);

    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from user_table where name = '$name'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "Username already taken";
    } else {
        $reg =  "insert into user_table(name, password) values ('$name', '$pass')";
        mysqli_query($con, $reg);
        echo "Registration Successful";

    }
?>