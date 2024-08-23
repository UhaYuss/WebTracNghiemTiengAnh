<?php
include 'Connection.php';
global $connection;
$connection = new Connection();
function getExam()
{

    $sql = "SELECT * FROM baithi";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getQuestions()
{

    $sql = "SELECT * FROM cauhoi";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getQuestion($id)
{

    $sql = "SELECT * FROM cauhoi WHERE MaCauHoi = ?";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function getDetailExam($id)
{

    $sql = "SELECT ch.MaCauHoi, ch.NoiDung, ch.DapAnDung, ch.DapAnSai1, ch.DapAnSai2, ch.DapAnSai3, bt.ThoiGianLamBai, bt.TenBaiThi, bt.MoTa 
    FROM cauhoi ch
    JOIN chitietbaithi ctbt ON ch.MaCauHoi = ctbt.MaCauHoi
    join baithi bt on bt.MaBaiThi = ctbt.MaBaiThi 
    WHERE ctbt.MaBaiThi = ?
    group by MaCauHoi ;";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$id]);
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $result;
}
function addQuestionIntoExam($mabaithi, $macauhoi, $dapanDung)
{

    $sql = "INSERT INTO chitietbaithi (MaBaiThi, MaCauHoi, DapAnDung) VALUES (?, ?, ?)";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$mabaithi, $macauhoi, $dapanDung]);
}

function deleteQuestionFromExam($mabaithi, $macauhoi)
{

    $sql = "DELETE FROM chitietbaithi WHERE MaBaiThi = ? AND MaCauHoi = ?";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$mabaithi, $macauhoi]);
}

function changeQuestion($mabaithi, $oldQuestion, $newQuestion, $dapanDung)
{

    deleteQuestionFromExam($mabaithi, $oldQuestion);
    $sql = "INSERT INTO chitietbaithi (MaBaiThi, MaCauHoi,DapAnDung) VALUES (?, ?,?)";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$mabaithi, $newQuestion, $dapanDung]);
}
function changeDetailExam($id, $tenbaithi, $mota, $thoigian)
{

    $sql = "UPDATE baithi SET TenBaiThi = ?, MoTa = ?, ThoiGianLamBai = ? WHERE MaBaiThi = ?";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$tenbaithi, $mota, $thoigian, $id]);
}
function addExam($tenbaithi, $mota, $thoigian)
{

    $sql = "INSERT INTO baithi (TenBaiThi, MoTa, ThoiGianLamBai, NgayTao) VALUES (?, ?, ?, NOW())";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$tenbaithi, $mota, $thoigian]);
}

function deleteExam($id)
{

    $sql = "DELETE FROM baithi WHERE MaBaiThi = ?";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$id]);
}
function deleteQuestion($id)
{

    $sql = "DELETE FROM cauhoi WHERE MaCauHoi = ?";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$id]);
}
function addQuestion($noidung, $dapandung, $dapan1, $dapan2, $dapan3, $trinhdo)
{

    $sql = "INSERT INTO cauhoi (NoiDung, DapAnDung, DapAnSai1, DapAnSai2, DapAnSai3,TrinhDo) VALUES (?, ?, ?, ?, ?,?)";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$noidung, $dapandung, $dapan1, $dapan2, $dapan3]);
}
function changeQuestionDetail($id, $noidung, $dapandung, $dapan1, $dapan2, $dapan3)
{

    $sql = "UPDATE cauhoi SET NoiDung = ?, DapAnDung = ?, DapAnSai1 = ?, DapAnSai2 = ?, DapAnSai3 = ? WHERE MaCauHoi = ?";
    global $connection;
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$noidung, $dapandung, $dapan1, $dapan2, $dapan3, $id]);
}
function generateExamWithLevel($tenbaithi, $mota, $thoigian, $level, $soCauHoi)
{
    global $connection;
    $sql = "INSERT INTO baithi (TenBaiThi, MoTa, ThoiGianLamBai, NgayTao) VALUES (?, ?, ?, NOW())";
    $stmt = $connection->conn->prepare($sql);
    $stmt->execute([$tenbaithi, $mota, $thoigian]);

    $examId = $connection->conn->lastInsertId(); // Lấy ID của bài thi vừa được tạo

    // Lấy số lượng câu hỏi cần tạo dựa trên cấp độ
    $sql = "SELECT * FROM cauhoi WHERE TrinhDo = ? ORDER BY RAND() LIMIT ?";
    $stmt = $connection->conn->prepare($sql);
    $stmt->bindValue(1, $level);
    $stmt->bindValue(2, $soCauHoi, PDO::PARAM_INT);
    $stmt->execute();

    $questions = $stmt->fetchAll(PDO::FETCH_ASSOC);

    // Thêm các câu hỏi vào bài thi
    foreach ($questions as $question) {
        addQuestionIntoExam($examId, $question['MaCauHoi'], $question['DapAnDung']);
    }
}
