<?php
require_once '../vendor/autoload.php';
include 'Connection.php';
session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use Google_Service_Oauth2;

$client = new Google_Client();
$client->setClientId('6582319807-pegsdi4op6prug9n5msitsiqda2o2c1r.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost:3000/Controller/google_callback.php');

if (isset($_GET['code'])) {
  $connection = new Connection();

  $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
  $client->setAccessToken($token['access_token']);

  $oauth2 = new Google_Service_Oauth2($client);
  $userInfo = $oauth2->userinfo->get();

  $email = $userInfo->email;
  $name = $userInfo->name;

  // Tạo mã OTP
  $otp = rand(100000, 999999);

  // Kiểm tra xem người dùng đã tồn tại hay chưa
  $query = "SELECT * FROM nguoidung WHERE Email = ?";
  $stmt = $connection->conn->prepare($query);
  $stmt->execute([$email]);

  if ($stmt->rowCount() == 0) {
    // Người dùng chưa tồn tại, thêm người dùng mới
    $query = "INSERT INTO nguoidung (TenDangNhap, NgaySinh, Email, MatKhau) VALUES (?, ?, ?, ?)";
    $stmt = $connection->conn->prepare($query);
    $stmt->execute([$name, date('Y-m-d'), $email, $otp]);
  } else {
    // Người dùng đã tồn tại, cập nhật OTP làm mật khẩu
    $query = "UPDATE nguoidung SET MatKhau = ? WHERE Email = ?";
    $stmt = $connection->conn->prepare($query);
    $stmt->execute([$otp, $email]);
  }

  $mail = new PHPMailer(true);
  try {
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'ihateyouzu1@gmail.com';
    $mail->Password = 'hhvwdiwhygxwebfn';
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Người gửi và người nhận
    $mail->setFrom('no-reply@yourdomain.com', 'Your Website');
    $mail->addAddress($email);

    // Nội dung email
    $mail->isHTML(true);
    $mail->Subject = 'Your OTP:';
    $mail->Body    = "Mã OTP của bạn là: " . $otp;

    $mail->send();
    echo 'Email mã OTP đã được gửi.';

    header('Location: ../Views/login.php');
  } catch (Exception $e) {
    echo '<script>alert("Lỗi khi gửi email. Vui lòng thử lại sau.");</script>';
  }
  exit();
} else {
  echo '<script>alert("Lỗi rồi");</script>';
}
