<?php
session_start();
include 'Connection.php';
$message = "";
if (isset($_POST['email']) && isset($_POST['password'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $connection = new Connection();
  $sql = "SELECT * FROM nguoidung WHERE Email = ? AND MatKhau = ?";
  $stmt = $connection->conn->prepare($sql);
  $stmt->bindParam(1, $email);
  $stmt->bindParam(2, $password);
  $stmt->execute();
  $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

  if (count($result) > 0) {
    $_SESSION['user'] = $result[0]['Id_User'];
    header('Location: ../index.php');
  } else {
    $_SESSION['message'] = "Tên đăng nhập hoặc mật khẩu không chính xác";
    header('Location: ../Views/login.php');
  }
} else {
  header('Location: ../index.php');
}
