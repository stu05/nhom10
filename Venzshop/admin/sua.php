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
            <li class="breadcrumb-item active">Dữ liệu</li>
          </ol>
          <!-- DataTables Example -->
              	  <h2>Sửa sản phẩm</h2>
                  <?php
                  	$madt = $_GET['id'];
    			          $sql="select * from dienthoai where madt='$madt'";
    			          $pdo = new PDO("mysql:host=". HOST."; dbname=". DB , USER, PASS);
    			          $pdo->query("set names 'utf8' ");
    			          $data = $pdo->query($sql);
    			          $rows = $data->fetchAll();
                    ?>
			       <table class="table table-bordered" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Ma</th>
                      <th>Tên</th>
                      <th>Loại</th>
                      <th>Giá</th>
                      <th>Hình</th>
                      <th>Sản Phẩm Nổi Bật</th>
                    </tr>
                  </thead>
                    <?php  
                    foreach($rows as $keys => $r)
                      {?>
                  <tbody>
                    <tr>
                      <td><?php echo $r['madt'];?></td>
                      <td><?php echo $r['tendt'];?></td>
                      <td><?php echo $r['maloai'];?></td>
                      <td><?php echo $r['gia'];?>đ</td>
                      <td><img width="100" height="130" src="images/index/<?php echo $r['hinh'];?>"></td>
                      <td><?php echo $r['sp_noibat'];?></td>
                    </tr>
                  </tbody>
                </table>
                    <form action="fix.php?ma=<?php echo $r['madt'];?>" method="post" enctype="multipart/form-data">
                    Tên: <input type="text" name="t" value="<?php echo $r['tendt'];?>">
                    <?php
                    $sql="select * from loaisp";
                    $data = $pdo->query($sql);
                    $rowl = $data->fetchAll();
                    //print_r($rows); exit;
                    ?>
                    Loại: <select name="l" id="">
                      <?php
                      foreach ($rowl as $key => $rl) 
                      {
                        ?>
                      <option value="<?php echo $rl['maloai'];?>">
                        <?php echo $rl['maloai'];?></option>
                      <?php
                      }
                      ?>
                    </select><br><br>
                    Mã ĐT: <input type="text" name="mdt" value="<?php echo $r['madt'];?>">
                    Giá: <input type="text" name="g" value="<?php echo $r['gia'];?>"><br><br>
                    Hình: <input type="file" name="file" id="fileToUpload" value="<?php echo $r['hinh'];?>"><br><br>
                    Sản Phẩm Nổi Bật: <input type="text" name="sp" value="<?php echo $r['sp_noibat'];?>">
                    <input type="submit" value="Sửa" name="ok">
                  </form><hr>
                        <?php
                          }
                       ?>
          </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
    <?php
    include ROOT."/include/footer.php";
    ?>

  </body>

</html>