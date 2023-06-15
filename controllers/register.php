<?php 

require_once('./db.php');

$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$check_password = $_POST['check_password'];
$rules = $_POST['rules'];
$submit = $_POST['submit'];

if ($submit) {
  if ($password != $check_password ) {
    header("Location: /register.php");
  }
  if (!empty($name) && !empty($surname) && !empty($login) && !empty($email) && !empty($password) && !empty($check_password) && $rules) {
    mysqli_query($db, "INSERT INTO `users` (`name`, `surname`, `login`, `email`, `password`, `role`) VALUES ('$name','$surname','$login','$email','$password', 'user')");
    header("Location: /login.php");
    exit;
  }
  else {
    header("Location: /register.php");
  }
  header("Location: /register.php");
}
header("Location: /register.php");

?>