<?php
include __DIR__ . '/../Controller/Connection.php';
?>
<link rel="stylesheet" href="../Styles/info_user.css">
<div class="container">
    <div class="content">
        <h1>Trang Cá Nhân</h1>
        <?php
        $connection = new Connection();
        $conn = $connection->conn;
        if (isset($_SESSION['user'])) {
            $id_user = $_SESSION['user'];

            $sql = "SELECT TenDangNhap, NgaySinh, Email FROM nguoidung WHERE Id_User = :id_user";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':id_user', $id_user);
            $stmt->execute();

            $result = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($result) {
                echo "<p>Tên đăng nhập: <span>" . $result["TenDangNhap"] . "</span><br> Ngày sinh: <span>" . $result["NgaySinh"] . "</span><br> Email: <span>" . $result["Email"] . "</span></p>";
            } else {
                echo "<p>Không có kết quả</p>";
            }
        } else {
            echo "<p>Không có thông tin người dùng</p>";
        }
        ?>
    </div>
</div>