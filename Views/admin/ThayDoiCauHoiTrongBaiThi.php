<?php
include 'header.php';
include '../../Controller/QuanLyBaiThi.php';

$id = isset($_GET['id']) ? $_GET['id'] : null;

if ($id === null) {
    header('Location: quanlybaithi.php');
    exit();
}

$questions = getQuestions();
$exam_questions = getDetailExam($id);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $old_question = $_POST['old_question'];
    $new_question = $_POST['new_question'];
    $dapanDung = $_POST['dapanDung'];
    changeQuestion($id, $old_question, $new_question, $dapanDung);
    header("Location: quanlychitietbaithi.php?id=$id");
    exit();
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div id="content-wrapper">
    <div id="content">
        <h1>Thay đổi câu hỏi trong bài thi</h1>
        <form method="post">
            <div class="form-group">
                <label for="old_question">Chọn câu hỏi cũ</label>
                <select class="form-control" id="old_question" name="old_question">
                    <?php foreach ($exam_questions as $exam_question) { ?>
                        <option value="<?php echo $exam_question['MaCauHoi']; ?>"><?php echo htmlspecialchars($exam_question['NoiDung']); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="new_question">Chọn câu hỏi mới</label>
                <select class="form-control" id="new_question" name="new_question">
                    <?php foreach ($questions as $question) { ?>
                        <option value="<?php echo $question['MaCauHoi']; ?>"><?php echo htmlspecialchars($question['NoiDung']); ?></option>
                    <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="dapanDung">Vị trí đáp án đúng</label>
                <select class="form-control" id="dapanDung" name="dapanDung">
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                </select>
            </div>
            <div class="form-group">
                <input type="submit" value="Thay đổi câu hỏi" class="btn btn-primary">
            </div>
        </form>
        <button><a style="text-decoration: none;" href="quanlychitietbaithi.php?id=<?php echo $id; ?>">Trở lại</a></button>
    </div>
</div>
