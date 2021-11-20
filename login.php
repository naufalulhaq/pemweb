
<?php

    $username = mysqli_real_escape_string($con, $_POST['user']);
    $pass = mysqli_real_escape_string($con, $_POST['password']);