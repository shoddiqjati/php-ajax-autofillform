<?php
include 'connection.php';
header('Content-Type: application/json; charset=UTF-8');

$response = array();
$sql = "SELECT * FROM `tb_content` ORDER BY ID DESC LIMIT 1";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
  while ($row = $result->fetch_assoc()) {
    $response = array(
      'title' => $row['title'],
      'author' => $row['author'],
    );
    $response = array(
      'data' => $response
    );
    echo json_encode($response);
  }
} else {
  $response = array(
    'data' => 'no data',
  );
  echo json_encode($response);
}
?>
