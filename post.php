<?php
include 'connection.php';

$title = $_POST['title'];
$author = $_POST['author'];
$desc = $_POST['desc'];

$sql = "INSERT INTO `tb_content` (`title`,`author`, `desc`) VALUES ('$title', '$author', '$desc')";
if ($conn->query($sql) === TRUE) {
  header('Location: http://localhost/test');
  $conn->close();
} else {
  $conn->error;
  $conn->close();
}
?>
