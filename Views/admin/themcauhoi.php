<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $noidung = $_POST["noidung"];
  $dapandung = $_POST["dapandung"];
  $dapan1 = $_POST["dapan1"];
  $dapan2 = $_POST["dapan2"];
  $dapan3 = $_POST["dapan3"];
  $trinhdo = $_POST["trinhdo"];
  addQuestion($noidung, $dapandung, $dapan1, $dapan2, $dapan3, $trinhdo);
  header("Location: quanlycauhoi.php");
  exit();
}
?>

<div id="content-wrapper">
  <div id="content">
    <div class="container">
      <h1>Thêm câu hỏi</h1>
      <form action="" method="POST">
        <div class="form-group">
          <label for="noidung">Nội dung câu hỏi:</label>
          <textarea class="form-control" id="noidung" name="noidung" rows="3" required></textarea>
        </div>
        <div class="form-group">
          <label for="dapandung">Đáp án đúng:</label>
          <input type="text" class="form-control" id="dapandung" name="dapandung" required>
        </div>
        <div class="form-group">
          <label for="dapan1">Đáp án sai 1:</label>
          <input type="text" class="form-control" id="dapan1" name="dapan1" required>
        </div>
        <div class="form-group">
          <label for="dapan2">Đáp án sai 2:</label>
          <input type="text" class="form-control" id="dapan2" name="dapan2" required>
        </div>
        <div class="form-group">
          <label for="dapan3">Đáp án sai 3:</label>
          <input type="text" class="form-control" id="dapan3" name="dapan3" required>
        </div>
        <div class="form-group">
          <label for="trinhdo">Trình độ:</label>
          <select class="form-control" id="trinhdo" name="trinhdo">
            <option value="A1">A1</option>
            <option value="A2">A2</option>
            <option value="B1">B1</option>
            <option value="B2">B2</option>
          </select>
        <button type="submit" class="btn btn-primary">Thêm câu hỏi</button>
      </form>
    </div>
  </div>
</div>
<style>
  /* CSS reset */
  * {
    box-sizing: border-box;
    margin: 0;
    padding: 0;
  }

  body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
  }

  .container {
    width: 1300px;
    margin: 50px auto;
    padding: 20px;
    background-color: #fff;
    border-radius: 5px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
  }

  h1 {
    text-align: center;
    margin-bottom: 20px;
  }

  .form-group {
    margin-bottom: 20px;
  }

  label {
    font-weight: bold;
    display: block;
    margin-bottom: 5px;
  }

  input[type="text"],
  textarea,select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  textarea {
    resize: vertical;
  }

  button {
    padding: 10px 20px;
    background-color: #007bff;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
  }

  button:hover {
    background-color: #0056b3;
  }
</style>