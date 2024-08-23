<?php include './Controller/Authencation.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Lịch sử thi</title>
  <link rel="stylesheet" href="../Styles/lichsuthi.css">
</head>
<body>
  <h1>Lịch sử thi</h1>
  <table border="1">
    <tr>
      <th>STT</th>
      <th>ID Thí Sinh</th>
      <th>Mã Bài Thi</th>
      <th>Điểm</th>
    </tr>
    <?php if (!empty($lichSuThiList)): ?>
      <?php foreach ($lichSuThiList as $lichSuThi): ?>
        <tr>
          <td><?php echo $lichSuThi->getId(); ?></td>
          <td><?php echo $lichSuThi->getIdThiSinh(); ?></td>
          <td><?php echo $lichSuThi->getIdBaiThi(); ?></td>
          <td><?php echo $lichSuThi->getDiem(); ?></td>
        </tr>
      <?php endforeach; ?>
    <?php else: ?>
      <tr>
        <td colspan="4">Không có dữ liệu</td>
      </tr>
    <?php endif; ?>
  </table>
</body>
</html>
