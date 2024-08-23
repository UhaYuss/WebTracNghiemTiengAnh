<?php
class DeThi
{
  private $id;
  private $ten_de_thi;
  private $thoi_gian;
  private $so_cau_hoi;
  private $id_bai_thi;

  public function __construct($id, $ten_de_thi, $thoi_gian, $so_cau_hoi,  $id_bai_thi)
  {
    $this->id = $id;
    $this->ten_de_thi = $ten_de_thi;
    $this->thoi_gian = $thoi_gian;
    $this->so_cau_hoi = $so_cau_hoi;
    $this->id_bai_thi = $id_bai_thi;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getTenDeThi()
  {
    return $this->ten_de_thi;
  }

  public function getThoiGian()
  {
    return $this->thoi_gian;
  }

  public function getSoCauHoi()
  {
    return $this->so_cau_hoi;
  }

  public function getIdBaiThi()
  {
    return $this->id_bai_thi;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setTenDeThi($ten_de_thi)
  {
    $this->ten_de_thi = $ten_de_thi;
  }

  public function setThoiGian($thoi_gian)
  {
    $this->thoi_gian = $thoi_gian;
  }

  public function setSoCauHoi($so_cau_hoi)
  {
    $this->so_cau_hoi = $so_cau_hoi;
  }



  public function setIdBaiThi($id_bai_thi)
  {
    $this->id_bai_thi = $id_bai_thi;
  }

  public static function getDeThi($id)
  {
    $conn = new Connection();
  }
}
