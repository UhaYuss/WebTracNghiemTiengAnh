<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';

// Xử lý khi form được gửi đi
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $tenbaithi = $_POST['tenbaithi'];
  $mota = $_POST['mota'];
  $thoigian = $_POST['thoigian'];
  $level = $_POST['level'];
  switch ($thoigian) {
    case '45':
      $soCauHoi = 30;
      break;
    case '60':
      $soCauHoi = 50;
      break;
    case '90':
      $soCauHoi = 80;
      break;
    default:
      $soCauHoi = 30;
      break;
  }
  $allowedLevels = array("A1", "A2", "B1", "B2");
  if (in_array($level, $allowedLevels)) {
    $soCauHoi = intval($soCauHoi);
    generateExamWithLevel($tenbaithi, $mota, $thoigian, $level, $soCauHoi);

    header("Location: ./quanlybaithi.php");
    exit;
  } else {
    echo "Vui lòng chọn trình độ là A1, A2, B1 hoặc B2.";
  }
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div id="content-wrapper">
  <div id="content">
    <h1>Thêm câu hỏi ngẫu nhiên theo cấp độ</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <div class="mb-3">
        <label for="tenbaithi" class="form-label">Tên bài thi</label>
        <input type="text" class="form-control" id="tenbaithi" name="tenbaithi" required>
      </div>
      <div class="mb-3">
        <label for="mota" class="form-label">Mô tả</label>
        <textarea class="form-control" id="mota" name="mota" rows="3" required></textarea>
      </div>
      <div class="mb-3">
        <label for="thoigian" class="form-label">Thời gian thi</label>
        <select class="form-select" id="thoigian" name="thoigian" required>
          <option value="45">45 phút</option>
          <option value="60">60 phút</option>
          <option value="90">90 phút</option>
        </select>
      </div>
      <div class="mb-3">
        <label for="level" class="form-label">Chọn cấp độ</label>
        <select class="form-select" id="level" name="level" required>
          <option value="A1">A1</option>
          <option value="A2">A2</option>
          <option value="B1">B1</option>
          <option value="B2">B2</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Tạo đề</button>
    </form>
  </div>
</div>