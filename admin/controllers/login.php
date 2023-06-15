<?php 

require_once('../../controllers/db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if ($submit) {
  if (!empty($login) && !empty($password)) {
    $result = mysqli_query($db, "SELECT * FROM `admins` WHERE `login` = '$login' AND `password` = '$password'");
    $admin = mysqli_fetch_assoc($result);
    if ($admin) {
      $_SESSION['auth'] = true;
      $_SESSION['admin_id'] = $admin['id'];
      $_SESSION['role'] = 'admin';
    }
    header("Location: /admin");
  }
  else {
    header("Location: /");
  }
}

?>