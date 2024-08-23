<?php
session_start();
include 'Connection.php';
$message = "";
if (isset($_POST['email']) && isset($_POST['password'])) {
  
  $email = $_POST['email'];
  $password = $_POST['password'];
  if ($email == "admin" && $password == "123") {
    $_SESSION['admin'] = "admin";
    header('Location: ../Views/admin/index.php');
  } else {
    $_SESSION['message'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
    header('Location: ../admin/loginAdmin.php');
  }
} else {
  header('Location: ../admin/loginAdmin.php');
}
