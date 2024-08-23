<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="../Styles/login.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
</head>

<body>
  <div class="container">
    <div class="screen">
      <div class="screen__content">
        <h2 class="title__content">Đăng nhập</h2>
        <form class="login" method="post" action="../Controller/login.php">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" class="login__input" placeholder="Email" name="email">
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" class="login__input" placeholder="Mật khẩu" name="password">
          </div>
          <button class="button login__submit">
            <span class="button__text">Đăng nhập</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>
        </form>
        <div class="social-login">
          <h3>Hoặc</h3>
          <div class="social-icons">
            <a href="" class="social-login__icon fab fa-google"></a>
            <a href="#" class="social-login__icon fab fa-facebook"></a>
            <a href="#" class="social-login__icon fab fa-twitter"></a>
          </div>
          <hr>
          <div class="register">
            <a href="register.php">Đăng ký</a>
          </div>
        </div>
      </div>
      <div class="screen__background">
        <span class="screen__background__shape screen__background__shape4"></span>
        <span class="screen__background__shape screen__background__shape3"></span>
        <span class="screen__background__shape screen__background__shape2"></span>
        <span class="screen__background__shape screen__background__shape1"></span>
      </div>
    </div>
  </div>
</body>


<script>
  window.onload = function() {
    <?php
    session_start();
    if (isset($_SESSION['message'])) {
      echo 'alert("' . $_SESSION['message'] . '");';
      unset($_SESSION['message']);
    }
    ?>
  }
</script>