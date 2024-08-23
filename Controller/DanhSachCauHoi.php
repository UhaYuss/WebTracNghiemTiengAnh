<?php
include 'Connection.php';

$connection = new Connection();
$maBaiThi = $_GET['MaBaiThi'];
$maBaiLam = $_GET['MaBaiLam'];
$sql = "SELECT ch.MaCauHoi, ch.NoiDung, ch.DapAnDung, ch.DapAnSai1, ch.DapAnSai2, ch.DapAnSai3, bt.ThoiGianLamBai 
FROM cauhoi ch
JOIN chitietbaithi ctbt ON ch.MaCauHoi = ctbt.MaCauHoi
join baithi bt on bt.MaBaiThi = ctbt.MaBaiThi 
WHERE ctbt.MaBaiThi = ?
group by MaCauHoi ;";

$stmt = $connection->conn->prepare($sql);
$stmt->execute([$maBaiThi]);
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

return $result;
