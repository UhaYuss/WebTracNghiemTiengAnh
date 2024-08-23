<?php
include 'Connection.php';
$connection = new Connection();
$sql = "SELECT * FROM baithi";
$stmt = $connection->conn->prepare($sql);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
return $result;
