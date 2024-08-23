<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Đăng ký</title>
  <link rel="stylesheet" href="../Styles/register.css" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" />
</head>

<body>
  <div class="container">
    <div class="screen">
      <div class="screen__content flex flex-col justify-center gap-2 items-center">
        <h2 class="title__content">Đăng ký</h2>

        <?php
        session_start();
        if (isset($_SESSION['message'])) {
          echo '<div class="alert alert-warning">' . $_SESSION['message'] . '</div>';
          unset($_SESSION['message']);
        }
        ?>

        <form class="login" method="post" action="../Controller/register.php">
          <div class="login__field">
            <i class="login__icon fas fa-user"></i>
            <input type="text" class="login__input" placeholder="Tên đăng nhập" name="username" />
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-calendar"></i>
            <input type="date" class="login__input" placeholder="Ngày sinh" name="birthday" />
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-envelope"></i>
            <input type="email" class="login__input" placeholder="Email" name="email" />
          </div>
          <div class="login__field">
            <i class="login__icon fas fa-lock"></i>
            <input type="password" class="login__input" placeholder="Mật khẩu" name="password" />
          </div>
          <button class="button login__submit">
            <span class="button__text">Đăng ký</span>
            <i class="button__icon fas fa-chevron-right"></i>
          </button>
        </form>
        <div class="social-login">
          <a href="./login.php">Đăng nhập</a>
        </div>
        <div class="flex text-base gap-2">
          <div class="social-login">
            <a href="../Controller/google_login.php">Đăng ký với Google</a>
          </div>
          <div class="social-login">
            <a href="../Controller/google_login.php">Quên mật khẩu?</a>
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

</html>
