<?php
$host = "127.0.0.1:3308";
$user = "admin";
$password = "";
$database = "products";

$connection = new mysqli($host, $user, $password, $database);

if($connection->connect_error) {
  die("Noe gikk galt..." . $connection->connect_error);
}

$connection->set_charset("utf8");

$sql = "SELECT * FROM product WHERE product_id = ?";

$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($id, $name, $brand, $price);
$stmt->fetch();
$stmt->close();

 ?>
