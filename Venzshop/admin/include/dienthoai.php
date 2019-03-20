<?php
$pdo = new PDO("mysql:host=". HOST."; dbname=". DB , USER, PASS);
$pdo->query("set names 'utf8' ");
$data = $pdo->query("select * from giay");
$rows = $data->fetchAll();
?>

          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Bảng dữ liệu sản phẩm</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <a href="tim_kiem.php">Tìm sản phẩm</a><hr>
                  <thead>
                    <tr>
                      <th>Tên</th>
                      <th>Loại</th>
                      <th>Giá</th>
                      <th>Hình</th>
                      <th>Sản Phẩm Nổi Bật</th>
                      <th>Sửa</th>
                      <th>Xoá</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Tên</th>
                      <th>Loại</th>
                      <th>Giá</th>
                      <th>Hình</th>
                      <th>Sản Phẩm Nổi Bật</th>
                      <th>Sửa</th>
                      <th>Xoá</th>
                    </tr>
                  </tfoot>
                    <?php  
                    foreach($rows as $keys => $r)
                      {?>
                  <tbody>
                    <tr>
                      <td><?php echo $r['tengiay'];?></td>
                      <td><?php echo $r['maloai'];?></td>
                      <td><?php echo number_format($r["gia"],0,".",".");?>đ</td>
                      <td><img width="100" height="130" src="images/index/<?php echo $r['hinh'];?>"></td>
                      <td><?php echo $r['sp_noibat'];?></td>
                      <td><a href="sua.php?id=<?php echo $r['madt'];?>">Sửa</a></td>
                      <td><a href="xoa.php?id=<?php echo $r['madt'];?>">Xoá</a></td>
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