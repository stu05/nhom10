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
                    <h2>Thêm sản phẩm</h2>
                    <form action="them.php" method="post" enctype="multipart/form-data">
                    Tên: <input type="text" name="t">
                    <?php
                    $pdo = new PDO("mysql:host=". HOST."; dbname=". DB , USER, PASS);
                    $pdo->query("set names 'utf8' ");
                    //print_r($rows); exit;
                    ?>
                    <?php
                    $sql="select * from loaigiay";
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
                    Mã ĐT: <input type="text" name="mdt">
                    Giá: <input type="text" name="g"><br><br>
                    Hình: <input type="file" name="file" id="fileToUpload"><br><br>
                    Sản Phẩm Nổi Bật: <input type="text" name="sp">
                    <input type="submit" value="Thêm" name="ok">
                  </form><hr>
            <?php
            include ROOT."/include/dienthoai.php";
            ?>
          </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
    <?php
    include ROOT."/include/footer.php";
    ?>

  </body>

</html>