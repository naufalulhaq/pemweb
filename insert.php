<?php
    session_start();
    header('location:insert.html');
    
    require_once "connection.php";

    $b_title = $_POST['title'];
    $b_author = $_POST['author'];
    $b_year = $_POST['year'];
    $b_sale = $_POST['sale'];

    $s = "SELECT * FROM books WHERE book_title = '$title'";

    $result = mysqli_query($con, $s);

    $num = mysqli_num_rows($result);

    if ($num == 1) {
        echo "Book data already exist";
    } else {
        $reg =  "INSERT INTO books (book_title, book_author, book_releaseyear, book_sale) VALUES ('$b_title', '$b_author', '$b_year', '$b_sale')";
        mysqli_query($con, $reg);
        echo "Registration Successful";

    }
?>