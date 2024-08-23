<?php
include './Controller/Authencation.php';
$danhSachBaiThi = include('./Controller/DanhSachBaiThi.php');
?>

<section>
  <div>
    <h2 class="font-semibold text-3xl">Thư viện bài thi</h2>
    <div class="flex justify-between mt-5 mx-16">
      <div class="flex flex-col gap-10 items-start">
        <ul>
          <li class="bg-blue-200 px-3 py-1 rounded-lg text-blue-800 font-bold">Toeic</li>
        </ul>
        <div class="flex justify-between gap-10 ">
          <input class="p-2 rounded-md border border-gray-400 w-96" type="text" placeholder="Nhập đề thi muốn tìm ?">
          <button class="bg-blue-800 p-3 py-1 rounded-md text-white font-bold">Tìm kiếm</button>
        </div>
      </div>
      <div class="bg-white rounded-md flex gap-2 justify-center items-center flex-col w-56 p-4">
        <img class="w-20 h-20" src="../Images/user_icon.png" alt="">
        <p></p>
        <button class="border-blue-700 border w-full rounded-lg p-1 font-semibold" onclick="window.location.href='index.php?page=lichsuthi&id_thi_sinh=1'">Thống kê kết quả</button>
      </div>
    </div>
  </div>

  <div class="bg-white mt-2 p-10 ">
    <ul class="flex gap-20 flex-wrap">
      <?php foreach ($danhSachBaiThi as $baiThi) : ?>
        <div class="border flex flex-col gap-3 p-4 rounded-md">
          <div class="flex gap-2 flex-col">
            <h1 class="font-bold">
              <?php echo $baiThi['MoTa']; ?>
            </h1>
            <div class="text-gray-600 flex items-center gap-1">
              <span>
                <i class="fa-solid fa-clock"></i>
                <?php echo $baiThi['ThoiGianLamBai']; ?>
              </span>
              <span>|</span>
              <span><i class="fa-solid fa-highlighter"></i></span>
            </div>
            <div>
              <?php echo $baiThi['TenBaiThi']; ?>
            </div>
          </div>
          <form action="./Controller/create_exam.php" method="post">
            <input type="hidden" name="maBaiThi" value="<?php echo $baiThi['MaBaiThi']; ?>">
            <button type="submit" class="p-2 rounded-md border border-blue-800 hover:bg-blue-800 font-bold hover:text-white">Làm bài</button>
          </form>
        </div>
      <?php endforeach; ?>
    </ul>
  </div>

</section>