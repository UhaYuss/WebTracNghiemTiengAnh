<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';
$result = getQuestions();
if (isset($_POST['findQ'])) {
  $findQ = isset($_POST['findQ']) ? intval($_POST['findQ']) : 0;
  if ($findQ > 0) {
    $result = getQuestion($findQ);
  } else {
    $result = getQuestions();
  }
}
if (isset($_GET['delete'])) {
  $deleteQ = isset($_GET['delete']) ? intval($_GET['delete']) : 0;
  if ($deleteQ > 0) {
    deleteQuestion($deleteQ);
    header("Location: ./quanlycauhoi.php");
    exit;
  }
}
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.6/css/dataTables.bootstrap5.min.css" />
<div id="content-wrapper">
  <div id="content">
    <h1>Quản lý câu hỏi</h1>
    <p>Chào mừng bạn đến với trang quản trị hệ thống Trắc nghiệm trực tuyến</p>
    <a href="themcauhoi.php" class="btn btn-primary">Thêm câu hỏi</a>

    
    <table class="table table-striped" id="myTable">
      <thead class="thead-dark">
        <tr>
          <th scope="col">STT</th>
          <th scope="col">Nội dung</th>
          <th scope="col">Đáp án đúng</th>
          <th scope="col">Đáp án sai 1</th>
          <th scope="col">Đáp án sai 2</th>
          <th scope="col">Đáp án sai 3</th>
          <th scope="col">Trình độ</th>
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
              <td><?php echo htmlspecialchars($cauhoi['TrinhDo']); ?></td>
              <td>
                <a href="?delete=<?php echo $cauhoi['MaCauHoi']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xoá câu hỏi này không?')">Xoá</a>
                <a href="thaydoicauhoi.php?id=<?php echo $cauhoi['MaCauHoi']; ?>">Sửa</a>
              </td>
            </tr>
        <?php
          }
        } else {
          echo "<tr><td colspan='5'>Không có dữ liệu</td></tr>";
        }
        ?>
      </tbody>
    </table>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/1.11.6/js/dataTables.bootstrap5.min.js"></script>
<script>
  let table = new DataTable('#myTable');
  $(document).ready(function () {
    $('#myTable').DataTable();
  });
</script>
