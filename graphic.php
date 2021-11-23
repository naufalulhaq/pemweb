<?php
    include "connection.php";
    
    $sql = "SELECT * from grafik";
    
    $query = mysqli_query($con, $sql);
    $results = mysqli_fetch_all($query, MYSQLI_ASSOC);
    
    foreach ($results as $result) {
    $item[] = array(
        "stock" => $result["book_title"],
        "year" => $result["book_sale"]
    );
    }
    
    $response = array(
        "status" => 1,
        "message" => "Success Get Data From Database",
        "data" => $item
    );
    
    echo json_encode($response);
?>