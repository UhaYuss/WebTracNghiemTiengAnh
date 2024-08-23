<?php
session_start();
include 'Connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (isset($_POST['username']) && isset($_POST['birthday']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $connection = new Connection();

    $checkEmailSql = "SELECT COUNT(*) FROM nguoidung WHERE Email = ?";
    $checkEmailStmt = $connection->conn->prepare($checkEmailSql);
    $checkEmailStmt->bindParam(1, $email);
    $checkEmailStmt->execute();
    $emailCount = $checkEmailStmt->fetchColumn();

    if ($emailCount > 0) {
      // Email đã tồn tại, trả về lỗi
      $_SESSION['message'] = "Email đã tồn tại. Vui lòng sử dụng email khác.";
      header('Location: ../Views/register.php');
      exit();
    } else {
      $sql = "INSERT INTO nguoidung (TenDangNhap, NgaySinh, Email, MatKhau) VALUES (?, ?, ?, ?)";
      $stmt = $connection->conn->prepare($sql);
      $stmt->bindParam(1, $username);
      $stmt->bindParam(2, $birthday);
      $stmt->bindParam(3, $email);
      $stmt->bindParam(4, $password);

      if ($stmt->execute()) {
        $_SESSION['message'] = "Đăng ký thành công!";
        header('Location: ../Views/login.php');
        exit();
      } else {
        $_SESSION['message'] = "Đăng ký không thành công. Vui lòng thử lại sau.";
        header('Location: ../Views/register.php');
        exit();
      }
    }
  } else {
    header('Location: ../index.php');
    exit();
  }
} else {
  header('Location: ../index.php');
  exit();
}
