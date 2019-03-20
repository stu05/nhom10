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
    <title>Admin - Quên mật khẩu</title>

  </head>

  <body class="bg-dark">

    <div class="container">
      <div class="card card-login mx-auto mt-5">
        <div class="card-header">Tạo  mới mật khẩu</div>
        <div class="card-body">
          <div class="text-center mb-4">
            <h4>Quên mật khẩu</h4>
            <p>Nhập email của bạn để tạo mới mật khẩu</p>
          </div>
          <form>
            <div class="form-group">
              <div class="form-label-group">
                <input type="email" id="inputEmail" class="form-control" placeholder="Enter email address" required="required" autofocus="autofocus">
                <label for="inputEmail">Email</label>
              </div>
            </div>
            <a class="btn btn-primary btn-block" href="dang_nhap.php">Tạo mới mật khẩu</a>
          </form>
          <div class="text-center">
            <!--<a class="d-block small mt-3" href="dang_ky.php">Đăng ký</a>-->
            <a class="d-block small" href="dang_nhap.php">Đăng nhập</a>
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
