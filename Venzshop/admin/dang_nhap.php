<?php
if (!isset($_SESSION)) 
    session_start();
    include "config.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <?php
    include ROOT."/include/head.php";
    ?>

    <title>Quản trị</title>
    <link href="themes/css/flexslider.css" rel="stylesheet"/>
<link href="themes/css/main.css" rel="stylesheet"/>
<link rel="shortcut icon" type="image/png" href="images/icon.png"/>


  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Đăng nhập</div>
        <div class="card-body">
          <form action="login.php" method="post">
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" name="e" class="form-control" placeholder="Email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email</label>
              </div>
            </div>
            <div class="form-group">
              <div class="form-label-group">
                <input type="password" id="inputPassword" name="p" class="form-control" placeholder="Password" required="required">
                <label for="inputPassword">Mật khẩu</label>
              </div>
            </div>
            <div class="form-group">
              <div class="checkbox">
                <label>
                  <input type="checkbox" value="remember-me">
                  Nhớ mật khẩu
                </label>
              </div>
            </div>
            <input class="btn btn-primary btn-block" type="submit" name="sm" value="Đăng nhập">
          </form>
          <div class="text-center">
            <!--<a class="d-block small mt-3" href="dang_ky.php">Đăng ký</a>-->
            <a class="d-block small" href="quen_pass.php">Quên mật khẩu</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  </body>

</html>
