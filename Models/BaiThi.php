<?php

class BaiThi
{
  private $id;
  private $diem;
  private $thoi_gian_bat_dau;
  private $thoi_gian_ket_thuc;

  public function __construct($id, $diem, $thoi_gian_bat_dau, $thoi_gian_ket_thuc)
  {
    $this->id = $id;
    $this->diem = $diem;
    $this->thoi_gian_bat_dau = $thoi_gian_bat_dau;
    $this->thoi_gian_ket_thuc = $thoi_gian_ket_thuc;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getDiem()
  {
    return $this->diem;
  }

  public function getThoiGianBatDau()
  {
    return $this->thoi_gian_bat_dau;
  }

  public function getThoiGianKetThuc()
  {
    return $this->thoi_gian_ket_thuc;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setDiem($diem)
  {
    $this->diem = $diem;
  }

  public function setThoiGianBatDau($thoi_gian_bat_dau)
  {
    $this->thoi_gian_bat_dau = $thoi_gian_bat_dau;
  }

  public function setThoiGianKetThuc($thoi_gian_ket_thuc)
  {
    $this->thoi_gian_ket_thuc = $thoi_gian_ket_thuc;
  }

  public static function getBaiThi($id)
  {
    $conn = new Connection();
    
  }
}
