<?php 
    require_once('../controllers/db.php');

  if ($_SESSION['role'] == 'admin') {
  }
  else {
    header('Location: /admin/login.php');
  }
?>