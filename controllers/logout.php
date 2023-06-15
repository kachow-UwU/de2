<?php
  session_start();
  $_SESSION['auth'] = null;
  $_SESSION['user_id'] = null;
  $_SESSION['role'] = null;
  $_SESSION['admin_id'] = null;
  header("Location: /");
?>