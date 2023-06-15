<?php 
$id = $_SESSION['user_id'];
$result = mysqli_query($db, "SELECT * FROM `users` WHERE `id` = '$id'");
$user = mysqli_fetch_assoc($result);
if ($user['role'] == 'admin') {
?>
<section class="section_login">
  <div class="wrapper">
    <div>
      <h2>Войти</h2>
      <form method="post" action="/admin/controllers/login.php">
        <input type="text" name="login" placeholder="Логин">
        <input type="password" name="password" placeholder="Пароль">
        <button type="submit" name="submit" value="submit">Войти</button>
      </form>
    </div>
  </div>
</section>

</body>
</html>
<?php 
} else {
  header('Location: /');
}
?>
