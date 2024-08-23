<?php
if(!isset($_SESSION))
{
  session_start();
}
include '../../Controller/AuthecationAdmin.php';

?>

<link rel="stylesheet" href="../../Styles/admin.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
<div id="responsive-admin-menu">
	<div id="responsive-menu">
		<div class="menuicon">≡</div>
	</div>
	
	<div id="logo"></div>

	<!--Menu-->
	<div id="menu">
			<a href="./index.php" title="Dashboard"><i class="icon-dashboard"></i><span> Trang chủ</span></a>
			<a href="./quanlycauhoi.php" title="Quản lý câu hỏi"><i class="icon-bullhorn"></i><span>Quản lý câu hỏi</span></a>
			<a href="./quanlybaithi.php" title="Quản lý bài thi"><i class="icon-file-alt"></i><span>Quản lý bài thi</span></a>
			<a href="../../Controller/logoutAdmin.php" title="Admin Tools"><i class="icon-cogs"></i><span>  Đăng xuất</span></a>
	</div>
	<!--Menu-->


</div>



