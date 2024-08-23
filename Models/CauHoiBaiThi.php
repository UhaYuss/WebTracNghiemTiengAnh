<?php
class CauHoiBaiThi
{
  private $id;
  private $id_bai_thi;
  private $id_cau_hoi;
  private $dap_an_chon;

  public function __construct($id, $id_bai_thi, $id_cau_hoi)
  {
    $this->id = $id;
    $this->id_bai_thi = $id_bai_thi;
    $this->id_cau_hoi = $id_cau_hoi;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getIdBaiThi()
  {
    return $this->id_bai_thi;
  }

  public function getIdCauHoi()
  {
    return $this->id_cau_hoi;
  }

  public function getDapAnChon()
  {
    return $this->dap_an_chon;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setIdBaiThi($id_bai_thi)
  {
    $this->id_bai_thi = $id_bai_thi;
  }

  public function setIdCauHoi($id_cau_hoi)
  {
    $this->id_cau_hoi = $id_cau_hoi;
  }

  public function setDapAnChon($dap_an_chon)
  {
    $this->dap_an_chon = $dap_an_chon;
  }

  public static function getBaiThiDeThi($id)
  {
    $conn = new Connection();
  }
}
