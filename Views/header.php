<div class="header">
  <nav class="bg-white p-3 border-b-2">
    <div class="flex justify-between items-center">
      <a href="index.php?page=home_page" class="font-bold text-2xl">Study English</a>
      <div class=" hidden md:flex">
        <a href="index.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 
        opacity-75 hover:opacity-100">Trang chủ |</a>
        <a href="index.php?page=exam" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 
          opacity-75 hover:opacity-100">Đề thi luyện tập|</a>
        <a href="Nhom-06-Bao-Cao.pdf" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 
          opacity-75 hover:opacity-100">Document|</a>
        <?php
        session_start();
        $isLoggedIn = isset($_SESSION['user']) ? 0 : 1;
        if (isset($_SESSION['user'])) : ?>
          <a href="index.php?page=info_user" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 
        opacity-75 hover:opacity-100">Trang cá nhân </a>
          <div class="ml-2 cursor-pointer group">
            <a href="index.php?page=info_user">
              <img class="w-12" src="../Images/user_icon.png" alt="">
            </a>
            <div class="absolute right-10 rounded-md p-4 flex-col hidden group-hover:flex bg-slate-300 text-center">

              <a href="index.php?page=lichsuthi" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 border-b-2 border-black opacity-75 hover:opacity-100">Lịch Sử Thi</a>
              <a href="../Controller/Logout.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 opacity-75 hover:opacity-100">Đăng xuất</a>
            </div>
          </div>

        <?php endif; ?>
      </div>
    </div>
</div>
<div class="block md:hidden">
  <span id="handleMenubar">
    <i class="fa-solid cursor-pointer fa-bars p-4"></i>
  </span>
  <div id="menubar" class="flex-col hidden absolute bg-slate-300 right-3 rounded-md p-4">
    <a href="index.php?page=home_page" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 opacity-75 hover:opacity-100">Trang chủ</a>
    <a href="index.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700  opacity-75 hover:opacity-100">Khóa học của tôi</a>
    <a href="contact.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 opacity-75 hover:opacity-100">Đề thi</a>
    <a href="login.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 opacity-75 hover:opacity-100">Đăng nhập</a>
    <a href="register.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 opacity-75 hover:opacity-100">Đăng ký</a>
    <a href="register.php" class="p-2 cursor-pointer font-mono font-semibold text-blue-700 opacity-75 hover:opacity-100">Thông báo</a>
  </div>
</div>
</nav>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Kiểm tra nếu người dùng đã đăng nhập
    <?php if ($isLoggedIn) : ?>
      // Lấy ra phần tử đại diện cho liên kết "Đề thi luyện tập"
      var examLink = document.querySelector('a[href="index.php?page=exam"]');

      // Gắn sự kiện click cho liên kết
      examLink.addEventListener("click", function(event) {
        // Ngăn chặn hành động mặc định của liên kết (chuyển hướng đến trang "index.php?page=exam")
        event.preventDefault();

        // Hiển thị thông báo
        if (confirm("Chức năng này cần đăng nhập mới có thể xem. Bạn có muốn đăng nhập ngay không?")) {
          // Chuyển hướng đến trang đăng nhập nếu người dùng chấp nhận
          window.location.href = "index.php?page=exam";
        }
      });
    <?php endif; ?>
  });
</script>