<?php
  include "connection.php";

  $sqlTableData = "SELECT * from books";

  $queryTableData = mysqli_query($con, $sqlTableData);
  $resultsTableData = mysqli_fetch_all($queryTableData, MYSQLI_ASSOC);

  foreach ($resultsTableData as $result) {
    $itemTableData[] = array(
      "Title" => $result["book_title"],
      "Author" => $result["book_author"],
      "ReleaseYear" => $result["book_releaseyear"],
      "Sale" => $result["book_sale"]
    );
  }

  $response = array(
    "status" => 1,
    "message" => "Success Get Data From Database",
    "data" => array(
      "books" => $itemTableData
    )
  );

  echo json_encode($response);
?>