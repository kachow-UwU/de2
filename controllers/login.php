<?php 

require_once('./db.php');

$login = $_POST['login'];
$password = $_POST['password'];
$submit = $_POST['submit'];

if ($submit) {
  if (!empty($login) && !empty($password)) {
    $result = mysqli_query($db, "SELECT * FROM `users` WHERE `login` = '$login' AND `password` = '$password'");
    $user = mysqli_fetch_assoc($result);
    if ($user) {
      $_SESSION['auth'] = true;
      $_SESSION['user_id'] = $user['id'];
      $_SESSION['role'] = 'user';
    }
    header("Location: /");
  }
  else {
    header("Location: /register.php");
  }
}

?>