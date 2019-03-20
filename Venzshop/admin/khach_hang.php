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
          <?php
          $pdo = new PDO("mysql:host=". HOST."; dbname=". DB , USER, PASS);
          $pdo->query("set names 'utf8' ");
          $data = $pdo->query("select * from khachhang");
          $rows = $data->fetchAll();
          ?>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bảng dữ liệu khách hàng</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Số Điện Thoại</th>
                      <th>Địa Chỉ</th>
                      <th>Quận/Huyện</th>
                      <th>Thành Phố</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tên</th>
                      <th>Email</th>
                      <th>Số Điện Thoại</th>
                      <th>Địa Chỉ</th>
                      <th>Quận/Huyện</th>
                      <th>Thành Phố</th>
                    </tr>
                  </tfoot>
                    <?php  
                    foreach($rows as $keys => $r)
                      {?>
                  <tbody>
                    <tr>
                      <td><?php echo $r['tenkh'];?></td>
                      <td><?php echo $r['email'];?></td>
                      <td><?php echo $r['sodienthoai'];?></td>
                      <td><?php echo $r['diachi'];?></td>
                      <td><?php echo $r['quan_huyen'];?></td>
                      <td><?php echo $r['thanhpho'];?></td>
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
