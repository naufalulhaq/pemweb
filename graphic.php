<?php
  include "connection.php";

  $sql = "SELECT * FROM books";

  $query = mysqli_query($con, $sql);
  $results = mysqli_fetch_all($query, MYSQLI_ASSOC);

  foreach ($results as $result) {
    $item[] = array(
      "jumlah" => $result["book_sale"],
      "tahun" => $result["book_title"]
    );
  }

  $response = array(
    "status" => 1,
    "message" => "Success Get Data From Database",
    "data" => $item
  );

  echo json_encode($response);
?>