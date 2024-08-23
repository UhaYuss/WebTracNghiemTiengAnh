<?php

require_once __DIR__ . '/../Controller/Connection.php';

class LichSuThi {
  private $id;
  private $id_thi_sinh;
  private $id_bai_thi;
  private $diem;

  public function __construct($id, $id_thi_sinh, $id_bai_thi, $diem) {
    $this->id = $id;
    $this->id_thi_sinh = $id_thi_sinh;
    $this->id_bai_thi = $id_bai_thi;
    $this->diem = $diem;
  }

  public function getId() {
    return $this->id;
  }

  public function getIdThiSinh() {
    return $this->id_thi_sinh;
  }

  public function getIdBaiThi() {
    return $this->id_bai_thi;
  }

  public function getDiem() {
    return $this->diem;
  }

  public function setId($id) {
    $this->id = $id;
  }

  public function setIdThiSinh($id_thi_sinh) {
    $this->id_thi_sinh = $id_thi_sinh;
  }

  public function setIdBaiThi($id_bai_thi) {
    $this->id_bai_thi = $id_bai_thi;
  }

  public function setDiem($diem) {
    $this->diem = $diem;
  }

  public static function getLichSuThi($id_thi_sinh) {
    $conn = new Connection();
    $query = "SELECT bailam.MaBaiLam, bailam.id_user, bailam.MaBaiThi, bailam.diem 
              FROM bailam 
              WHERE bailam.id_user = :id_thi_sinh";
              
    $stmt = $conn->conn->prepare($query);
    $stmt->bindParam(':id_thi_sinh', $id_thi_sinh, PDO::PARAM_INT);
    $stmt->execute();

    $lichSuThiList = [];
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
      $lichSuThiList[] = new LichSuThi(
        $row['MaBaiLam'],
        $row['id_user'],
        $row['MaBaiThi'],
        $row['diem']
      );
    }

    return $lichSuThiList;
  }
}
