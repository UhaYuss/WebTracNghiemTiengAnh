<?php
include 'Connection.php';

require_once __DIR__ . '/../Models/LichSuThi.php';

class LichSuThiController {
  public function index($id_thi_sinh) {
    $lichSuThiList = LichSuThi::getLichSuThi($id_thi_sinh);
    include __DIR__ . '/../Views/user/lichsuthi/index.php';
  }
}
