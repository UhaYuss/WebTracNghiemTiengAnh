<?php
include 'Connection.php';
session_start();

// Lấy id_user từ session
$id_user = $_SESSION['user'];
$maBaiThi = $_POST['maBaiThi'];
$ngayLam = date('Y-m-d');

$connection = new Connection();
$sql = "INSERT INTO bailam (id_user, MaBaiThi, NgayLam) VALUES (?, ?, ?)";
$stmt = $connection->conn->prepare($sql);
$stmt->execute([$id_user, $maBaiThi, $ngayLam]);

// Lấy ID của bài làm vừa được tạo
$maBaiLam = $connection->conn->lastInsertId();

header("Location: ../index.php?page=examDetail&MaBaiThi=$maBaiThi&MaBaiLam=$maBaiLam");
exit;
