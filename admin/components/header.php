<?php
require_once("./controllers/db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../assets/styles/main.css">
  <title>Copy Star</title>
</head>
<body>
  <section class="section_header">
    <div class="wrapper">
      <header class="header">
        <div>
          <!-- <img src="" alt="" /> -->
          <p>LOGO</p>
        </div>
        <nav class="header__menu">
          <ul>
            <li><a href="">О нас</a></li>
            <li><a href="">Каталог</a></li>
            <li><a href="">Где нас найти?</a></li>
          </ul>
        </nav>
        <div class="header__auth">
        <?php 
        if (isset($_SESSION['auth'])) {
          echo '<a href="">Профиль</a>
          <a href="/logout.php">Выйти</a>';
        }
        else {
          echo '<a href="login.php">Войти</a>
          <a href="register.php">Регистрация</a>';
        }
        var_dump($_SESSION);
        ?>
        </div>
      </header>
    </div>
  </section>