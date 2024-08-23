<?php
$chiTietBaiLam = include('./Controller/result.php');
$socauDung = 0;
$tongSoCau = count($chiTietBaiLam);
include './Controller/Authencation.php';
foreach ($chiTietBaiLam as $chiTiet) {
  if ($chiTiet['DapAnDaChon'] == $chiTiet['DapAnDung']) {
    $socauDung++;
  }
}
?>

<section>
  <div class="flex justify-around text-xl">
    <div class="text-center">
      <h1 class="font-bold text-2xl">Kết quả bài thi</h1>
      <div class="text-base mt-2">Độ chính xác: <?php echo ($socauDung / $tongSoCau) * 100; ?> %</div>
    </div>
    <p class="text-green-500 font-bold text-center">
      <i class="fa-solid fa-circle-check"></i>
      <br>
      Số câu đúng: <?php echo $socauDung; ?>
    </p>
    <p class="text-red-600 font-bold text-center">
      <i class="fa-solid fa-circle-xmark"></i>
      <br>
      Số câu sai: <?php echo $tongSoCau - $socauDung; ?>
    </p>
  </div>

  <div class="mt-10 flex flex-col gap-5 bg-white p-5 rounded-md">
    <?php foreach ($chiTietBaiLam as $chiTiet) : ?>
      <div class="flex flex-col gap-1">
        <h3 class="font-semibold"><?php echo htmlspecialchars($chiTiet['NoiDung']); ?></h3>
        <div class="ml-2 flex flex-col gap-1">
          <p>Đáp án: <span class="text-green-500 font-bold"><?php echo htmlspecialchars($chiTiet['DapAnDung']); ?></span></p>
          <p>Lựa chọn:
            <span class="<?php echo ($chiTiet['DapAnDaChon'] == $chiTiet['DapAnDung']) ? 'text-green-600' : 'text-red-600'; ?> font-bold">
              <?php echo htmlspecialchars($chiTiet['DapAnDaChon']); ?>
            </span>
          </p>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>
