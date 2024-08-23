<?php
include 'Connection.php';
session_start();

$maBaiLam = $_POST['maBaiLam'];
$connection = new Connection();

foreach ($_POST as $key => $value) {
  if (strpos($key, 'answer_') === 0) {
    $maCauHoi = str_replace('answer_', '', $key);
    $dapAnDaChon = $value;

    $sql = "INSERT INTO chitietbailam (MaBaiLam, MaCauHoi, DapAnDaChon) VALUES (?, ?, ?)";
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$maBaiLam, $maCauHoi, $dapAnDaChon]);
  }
}

if (isset($_SESSION['remaining_time'])) {
  unset($_SESSION['remaining_time']);
}

header("Location: ../index.php?page=examResult&MaBaiLam=$maBaiLam");
exit;
