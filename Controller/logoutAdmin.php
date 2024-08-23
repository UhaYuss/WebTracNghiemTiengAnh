<?php
if(!isset($_SESSION))
    session_start();
if(isset($_SESSION['admin']))
{
  unset($_SESSION['admin']);
}
header('Location: ../Views/admin/loginAdmin.php');