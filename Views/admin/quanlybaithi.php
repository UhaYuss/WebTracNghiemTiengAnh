<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';

$result = getExam();

// Xử lý chức năng thêm bài thi
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['add_exam'])) {
  $tenbaithi = $_POST['tenbaithi'];
  $mota = $_POST['mota'];
  $thoigian = $_POST['thoigian'];
  addExam($tenbaithi, $mota, $thoigian);
  header("Location: quanlybaithi.php");
  exit();
}

// Xử lý chức năng xoá bài thi
if (isset($_GET['delete_exam'])) {
  $id = $_GET['delete_exam'];
  $hasQuestion = getDetailExam($id);
  if (!empty($hasQuestion)) {
    echo "<script>alert('Không thể xoá bài thi này vì đã có câu hỏi trong bài thi!');</script>";
  } else {
    deleteExam($id);
    header("Location: quanlybaithi.php");
    exit();
  }
}

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap5.min.css" />
<div id="content-wrapper">
  <div id="content">
    <h1>Quản lý bài thi</h1>
    <p>Chào mừng bạn đến với trang quản trị hệ thống Trắc nghiệm trực tuyến</p>

    <!-- Form thêm bài thi -->
    <form method="post" class="mb-4">
      <h3>Thêm bài thi mới</h3>
      <div class="form-group">
        <label for="tenbaithi">Tên bài thi</label>
        <input type="text" class="form-control" id="tenbaithi" name="tenbaithi" required>
      </div>
      <div class="form-group">
        <label for="mota">Mô tả</label>
        <input type="text" class="form-control" id="mota" name="mota" required>
      </div>
      <div class="form-group">
        <label for="thoigian">Thời gian làm bài (phút)</label>
        <input type="number" class="form-control" id="thoigian" name="thoigian" required>
      </div>
      <button type="submit" class="btn btn-primary" name="add_exam">Thêm bài thi</button>
    </form>
    <a href="themRandomCauHoi.php" class="btn btn-secondary">Tự động tạo đề</a>
    <!-- Bảng danh sách bài thi -->
    <table class="table table-striped" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Mô tả</th>
          <th scope="col">Thời gian làm bài (phút)</th>
          <th scope="col">Tên bài thi</th>
          <th scope="col">Ngày tạo</th>
          <th scope="col">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php if (!empty($result)) {
          $i = 1;
          foreach ($result as $exam) { ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo htmlspecialchars($exam['MoTa']); ?></td>
              <td><?php echo htmlspecialchars($exam['ThoiGianLamBai']); ?></td>
              <td><?php echo htmlspecialchars($exam['TenBaiThi']); ?></td>
              <td><?php echo htmlspecialchars($exam['NgayTao']); ?></td>
              <td>
                <a href="quanlychitietbaithi.php?id=<?php echo $exam['MaBaiThi']; ?>">Sửa</a>
                <a href="?delete_exam=<?php echo $exam['MaBaiThi']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá bài thi này không?')">Xoá</a>
              </td>
            </tr>
        <?php }
        } else {
          echo "<tr><td colspan='6'>Không có dữ liệu</td></tr>";
        } ?>
      </tbody>
    </table>
  </div>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
  <script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
  <script>
    let table = new DataTable('#myTable');
    $(document).ready(function() {
      $('#myTable').DataTable();
    });
  </script>