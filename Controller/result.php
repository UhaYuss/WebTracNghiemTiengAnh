<?php
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "GET") {
  $maBaiLam = $_GET['MaBaiLam'];

  $connection = new Connection();
  $sql = "SELECT ch.NoiDung, ch.DapAnDung, ctl.DapAnDaChon
            FROM chitietbailam ctl
            JOIN cauhoi ch ON ctl.MaCauHoi = ch.MaCauHoi
            WHERE ctl.MaBaiLam = ?";
  $stmt = $connection->conn->prepare($sql);
  $stmt->execute([$maBaiLam]);
  $chiTietBaiLam = $stmt->fetchAll(PDO::FETCH_ASSOC);

  $soCauDung = 0;
  $tongSoCau = count($chiTietBaiLam);
  foreach ($chiTietBaiLam as $chiTiet) {
    if ($chiTiet['DapAnDaChon'] == $chiTiet['DapAnDung']) {
      $soCauDung++;
    }
  }
  $diem = ($soCauDung / $tongSoCau) * 2;
  try {
    $sqlUpdate = "UPDATE bailam SET diem = ? WHERE MaBaiLam = ?";
    $stmtUpdate = $connection->conn->prepare($sqlUpdate);
    $stmtUpdate->execute([$diem, $maBaiLam]);
  } catch (PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
  }
  return $chiTietBaiLam;
}
