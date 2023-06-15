

<section class="section_register">
  <div class="wrapper">
    <div>
      <h2>Регистрация</h2>
      <form method="post" action="controllers/register.php">
        <input type="text" name="name" placeholder="Имя">
        <input type="text" name="surname" placeholder="Фамилия">
        <input type="text" name="login" placeholder="Логин">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Пароль">
        <input type="password" name="check_password" placeholder="Повторите пароль">
        <div>
          <input id="rules" type="checkbox" name="rules">
          <label for="rules">Согласие с правилами регистрации</label>
        </div>
        <button type="submit" name="submit" value="submit">Зарегистрироваться</button>
      </form>
    </div>
  </div>
</section>

</body>
</html>