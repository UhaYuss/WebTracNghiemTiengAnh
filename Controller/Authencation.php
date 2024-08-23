<?php
if (!isset($_SESSION)) {
  session_start();
}
$tt = isset($_SESSION['user']) ? $_SESSION['user'] : '';
if ($tt == '') {
  header('Location: ../Views/login.php');
  exit();
}
