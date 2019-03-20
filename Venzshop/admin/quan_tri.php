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

    <title>Admin - Tables</title>

  </head>

  <body id="page-top">

    <?php
    include ROOT."/include/account.php";
    ?>

    <div id="wrapper">

      <!-- Sidebar -->
    <?php
    include ROOT."/include/menu.php";
    ?>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Dashboard</a>
            </li>
            <li class="breadcrumb-item active">Quản lý</li>
          </ol>

          <!-- DataTables Example -->
          <h2>Thêm quản trị viên</h2>
          <form action="them_qt.php" method="post">
            Tên: <input type="text" name="t" class="form-control" required="required" placeholder="Your Name"><br>
            Email: <input type="email" name="e" id="inputEmail" class="form-control" placeholder="Email address" required="required"><br>
            Mật khẩu: <input type="password" name="p" id="inputPassword" class="form-control" placeholder="Password" required="required"><br>
            Số Điện Thoại: <input type="text" name="sdt" class="form-control" required="required" placeholder="Phone"><br>
            <input type="submit" value="Thêm">
          </form><hr>
          <?php
          $pdo = new PDO("mysql:host=". HOST."; dbname=". DB , USER, PASS);
          $pdo->query("set names 'utf8' ");
          $data = $pdo->query("select * from admin");
          $rows = $data->fetchAll();
          ?>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bảng dữ liệu quản trị viên</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Mật Khẩu</th>
                      <th>Số Điện Thoại</th>
                      <th>Xoá</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Mật Khẩu</th>
                      <th>Số Điện Thoại</th>
                      <th>Xoá</th>
                    </tr>
                  </tfoot>
                    <?php  
                    foreach($rows as $keys => $r)
                      {?>
                  <tbody>
                    <tr>
                      <td><?php echo $r['username'];?></td>
                      <td><?php echo $r['email'];?></td>
                      <td><?php echo $r['password'];?></td>
                      <td><?php echo $r['sodienthoai'];?></td>
                      <td><a href="xoa_qt.php?id=<?php echo $r['username'];?>">Xoá</a></td>
                    </tr>
                  </tbody>
                    <?php
                          }
                          ?>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
    <?php
    include ROOT."/include/footer.php";
    ?>

  </body>

</html>
