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
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
          <?php
          $t = isset($_GET['ta'])?$_GET['ta']:'';
          $pdo = new PDO("mysql:host=". HOST."; dbname=". DB , USER, PASS);
          $pdo->query("set names 'utf8' ");
          //print_r($rows); exit;
          ?>
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bảng dữ liệu</div>
            <div class="card-body">
              <div class="table-responsive">
                  <form action="tim_kiem.php" method="get">
                    Tên: <input type="text" name="ta" value="<?php echo $t; ?>">
                    <?php
                    $l = isset($_GET['tenloai'])?$_GET['tenloai']:'';
                    $sql="select * from loaisp";
                    $data = $pdo->query($sql);
                    $rowl = $data->fetchAll();
                    //print_r($rows); exit;
                    ?>
                    Loại: <select name="tenloai" id="">
                      <?php
                      foreach ($rowl as $key => $rl) 
                      {
                        ?>
                      <option value="<?php echo $rl['tenloai'];?>">
                        <?php echo $rl['tenloai'];?></option>
                      <?php
                      }
                      ?>
                    </select>
                    <input type="submit" name='sm' value="Tìm kiếm"><hr>
                  </form>
                  <?php
                  $sql="select * from dienthoai where tendt like '%$t%' and maloai='$l'";
                  $data = $pdo->query($sql);
                  $arr = $data->fetchAll();
                  if (isset($_GET['sm']))
                  {
                    foreach ($arr as $key => $r) { ?>
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Tên</th>
                      <th>Loại</th>
                      <th>Giá</th>
                      <th>Hình</th>
                      <th>Xoá</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tên</th>
                      <th>Loại</th>
                      <th>Giá</th>
                      <th>Hình</th>
                      <th>Xoá</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td><?php echo $r['tendt'];?></td>
                      <td><?php echo $r['maloai'];?></td>
                      <td><?php echo $r['gia'];?>đ</td>
                      <td><img width="200" height="100" src="<?php echo $r['hinh'];?>"></td>
                      <td><a href="xoa.php?id=<?php echo $r['madt'];?>">Xoá</a></td>
                    </tr>
                  </tbody>
                </table>
                  <?php
                    }
                  }
                  ?>

              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>
          </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
    <?php
    include ROOT."/include/footer.php";
    ?>

  </body>

</html>
