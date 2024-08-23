<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';

// Kiểm tra xem có ID được truyền vào không
$id = isset($_GET['id']) ? $_GET['id'] : null;
if ($id === null) {
  header('Location: quanlybaithi.php');
  exit();
}
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['del_all'])) {
  $questions = getDetailExam($id);
  foreach ($questions as $question) {
      deleteQuestionFromExam($id, $question['MaCauHoi']);
  }
  header("Location: quanlychitietbaithi.php?id=$id");
  exit();
}

// Lấy thông tin chi tiết của bài thi
$result = getDetailExam($id);

?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap5.min.css" />
<div id="content-wrapper">
  <div id="content">
    <h1>Chi tiết bài thi </h1>
    <p>Chào mừng bạn đến với trang quản lý chi tiết bài thi</p>
    <hr>
    <h2>Thông tin chi tiết bài thi</h2>
    <!-- Form để chỉnh sửa thông tin bài thi -->
    <form method="post">
      <div class="form-group">
        <label for="tenbaithi">Tên bài thi</label>
        <input type="text" class="form-control" id="tenbaithi" name="tenbaithi" value="<?php echo $result[0]['TenBaiThi']; ?>">
      </div>
      <div class="form-group">
        <label for="mota">Mô tả</label>
        <input type="text" class="form-control" id="mota" name="mota" value="<?php echo $result[0]['MoTa']; ?>">
      </div>
      <div class="form-group">
        <label for="thoigian">Thời gian làm bài</label>
        <input type="text" class="form-control" id="thoigian" name="thoigian" value="<?php echo $result[0]['ThoiGianLamBai']; ?>">
      </div>
      <div class="form-group">
        <input type="submit" value="Xác nhận">
      </div>
    </form>
    <hr>
    <h2>Thông tin các câu hỏi</h2>
    <a href="ThemCauHoiTrongBaiThi.php?id=<?php echo $id; ?>" class="btn btn-primary">Thêm câu hỏi</a>
    <form action="" method="post">
      <input type="hidden" name="del_all" value="1">
      <input type="submit" value="Xoá tất cả">
    </form>
    <table class="table table-striped" id="myTable" >
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Nội dung câu hỏi</th>
          <th scope="col">Đáp án đúng</th>
          <th scope="col">Đáp án sai 1</th>
          <th scope="col">Đáp án sai 2</th>
          <th scope="col">Đáp án sai 3</th>
          <th scope="col">Chức năng</th>
        </tr>
      </thead>
      <tbody>
        <?php
        if (is_array($result) && count($result) > 0) {
          $i = 1;
          foreach ($result as $cauhoi) {
        ?>
            <tr>
              <th scope="row"><?php echo $i++; ?></th>
              <td><?php echo htmlspecialchars($cauhoi['NoiDung']); ?></td>
              <td><?php echo htmlspecialchars($cauhoi['DapAnDung']); ?></td>
              <td><?php echo htmlspecialchars($cauhoi['DapAnSai1']); ?></td>
              <td><?php echo htmlspecialchars($cauhoi['DapAnSai2']); ?></td>
              <td><?php echo htmlspecialchars($cauhoi['DapAnSai3']); ?></td>
              <td>
                <a href="ThayDoiCauHoiTrongBaiThi.php?id=<?php echo $id; ?>&old_question=<?php echo $cauhoi['MaCauHoi']; ?>" class="btn btn-warning">Sửa câu hỏi</a>
                <a href="quanlychitietbaithi.php?id=<?php echo $id; ?>&delete=1&macauhoi=<?php echo $cauhoi['MaCauHoi']; ?>" class="btn btn-danger">Xóa</a>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='6'>Không có dữ liệu</td></tr>";
        }
        ?>
      </tbody>
    </table>
    <button><a style="text-decoration: none;" href="./quanlybaithi.php">Trở lại</a></button>
  </div>
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