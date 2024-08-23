<?php
if (isset($_GET['page'])) {
  switch ($_GET['page']) {
    case 'home':
      include 'Views/home_page.php';
      break;
    case 'info_user':
      include 'Views/info_user.php';
      break;
    case 'login':
      include 'Views/login.php';
      break;
    case 'register':
      include 'Views/register.php';
      break;
    case 'exam':
      include 'Views/user/exam.php';
      break;
    case 'examDetail':
      include 'Views/user/examDetail.php';
      break;
    case 'examResult':
      include 'Views/user/examResult.php';
      break;
    case 'lichsuthi':
      include './Controller/LichSuThiController.php';
      $id_thi_sinh = $_GET['id_thi_sinh'] ?? 1;
      $controller = new LichSuThiController();
      $controller->index($id_thi_sinh);
      break;
    default:
      include 'Views/home_page.php';
      break;
  }
} else {
  include 'Views/home_page.php';
}
