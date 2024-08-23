<?php
$tt = isset($_SESSION['admin']) ? $_SESSION['admin'] : '';
if($tt == '')
{
  header('Location: ../admin/loginAdmin.php');
  exit();
}
?>