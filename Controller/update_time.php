<?php
session_start();

if (isset($_POST['remaining_time'])) {
  $_SESSION['remaining_time'] = $_POST['remaining_time'];
}
