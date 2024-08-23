<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id !== null) {
  $questionId = isset($_GET['id']) ? intval($_GET['id']) : 0;
  if ($questionId > 0) {
    $questionDetails = getQuestion($questionId);
  } else {
    header("Location: quanlycauhoi.php");
    exit; 
  }
}
if (isset($_POST['submit'])) {
  $id = $_POST['question_id'];
  $noidung = $_POST['noidung'];
  $dapandung = $_POST['dapandung'];
  $dapan1 = $_POST['dapan1'];
  $dapan2 = $_POST['dapan2'];
  $dapan3 = $_POST['dapan3'];
  changeQuestionDetail($id, $noidung, $dapandung, $dapan1, $dapan2, $dapan3);
  header("Location: ./quanlycauhoi.php");
  exit;
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<div id="content-wrapper">
  <div id="content">
    <h1>Chỉnh sửa câu hỏi</h1>
    <form action="thaydoicauhoi.php" method="post">
      <input type="hidden" name="question_id" value="<?php echo $questionDetails[0]['MaCauHoi']; ?>">
      <div class="mb-3">
        <label for="noidung" class="form-label">Nội dung câu hỏi:</label>
        <textarea class="form-control" id="noidung" name="noidung" rows="3"><?php echo htmlspecialchars($questionDetails[0]['NoiDung']); ?></textarea>
      </div>
      <div class="mb-3">
        <label for="dapandung" class="form-label">Đáp án đúng:</label>
        <input type="text" class="form-control" id="dapandung" name="dapandung" value="<?php echo  htmlspecialchars($questionDetails[0]['DapAnDung']); ?>">
      </div>
      <div class="mb-3">
        <label for="dapan1" class="form-label">Đáp án sai 1:</label>
        <input type="text" class="form-control" id="dapan1" name="dapan1" value="<?php echo htmlspecialchars($questionDetails[0]['DapAnSai1']); ?>">
      </div>
      <div class="mb-3">
        <label for="dapan2" class="form-label">Đáp án sai 2:</label>
        <input type="text" class="form-control" id="dapan2" name="dapan2" value="<?php echo htmlspecialchars($questionDetails[0]['DapAnSai2']); ?>">
      </div>
      <div class="mb-3">
        <label for="dapan3" class="form-label">Đáp án sai 3:</label>
        <input type="text" class="form-control" id="dapan3" name="dapan3" value="<?php echo  htmlspecialchars($questionDetails[0]['DapAnSai3']); ?>">
      </div>
      <button type="submit" name="submit" class="btn btn-primary">Lưu thay đổi</button>
    </form>
  </div>
</div>
