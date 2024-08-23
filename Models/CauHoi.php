<?php

class CauHoi
{
  private $id;
  private $noi_dung;
  private $dap_an_a;
  private $dap_an_b;
  private $dap_an_c;
  private $dap_an_d;
  private $dap_an_dung;
  private $do_kho;

  public function __construct($id, $noi_dung, $dap_an_a, $dap_an_b, $dap_an_c, $dap_an_d, $dap_an_dung, $do_kho)
  {
    $this->id = $id;
    $this->noi_dung = $noi_dung;
    $this->dap_an_a = $dap_an_a;
    $this->dap_an_b = $dap_an_b;
    $this->dap_an_c = $dap_an_c;
    $this->dap_an_d = $dap_an_d;
    $this->dap_an_dung = $dap_an_dung;
    $this->do_kho = $do_kho;
  }

  public function getId()
  {
    return $this->id;
  }

  public function getNoiDung()
  {
    return $this->noi_dung;
  }

  public function getDapAnA()
  {
    return $this->dap_an_a;
  }

  public function getDapAnB()
  {
    return $this->dap_an_b;
  }

  public function getDapAnC()
  {
    return $this->dap_an_c;
  }

  public function getDapAnD()
  {
    return $this->dap_an_d;
  }

  public function getDapAnDung()
  {
    return $this->dap_an_dung;
  }

  public function getDoKho()
  {
    return $this->do_kho;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setNoiDung($noi_dung)
  {
    $this->noi_dung = $noi_dung;
  }

  public function setDapAnA($dap_an_a)
  {
    $this->dap_an_a = $dap_an_a;
  }

  public function setDapAnB($dap_an_b)
  {
    $this->dap_an_b = $dap_an_b;
  }

  public function setDapAnC($dap_an_c)
  {
    $this->dap_an_c = $dap_an_c;
  }

  public function setDapAnD($dap_an_d)
  {
    $this->dap_an_d = $dap_an_d;
  }

  public function setDapAnDung($dap_an_dung)
  {
    $this->dap_an_dung = $dap_an_dung;
  }

  public function setDoKho($do_kho)
  {
    $this->do_kho = $do_kho;
  }

  public static function getCauHoi($id)
  {
    $conn = new Connection();
  }
}
