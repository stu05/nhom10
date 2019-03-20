<?php
	if (!isset($_SESSION)) session_start();
	include("includes/config.php");
	//if(!isset($_SESSION['dangnhap']))
		//header("Location: dangnhap.php");
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?php include("header.php"); ?>
	</head>
    <body>		
		<?php include("topbar.php"); ?>
		<div id="wrapper" class="container">
		<?php 
		include("menu.php");
		?>
		
		
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/banner/123.jpg" alt="Giỏ Hàng" >
				<h4><span>Giỏ Hàng</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">
					<div class="span9">					
						<h4 class="title"><span class="text"><strong>ĐƠN</strong> HÀNG</span></h4>
						<table class="table table-striped">
							
							<thead>
								<tr>
									<th>Hình</th>
									<th>Tên Sản Phẩm</th>
									<th>Số Lượng</th>
									<th>Size</th>
									<th>Giá Tiền</th>
									<th>Tổng Cộng</th>
									<th>Xóa</th>
								</tr>
							</thead>
							<tbody>
								<?php 
											//print_r($_SESSION['giohang']);
											if(isset($_SESSION['giohang']) && count($_SESSION['giohang']) > 0) {
											foreach ($_SESSION['giohang'] as $key => $value) {
												$query = "SELECT * FROM chitietgiay where magiay = '$key' ";
												//if($result = $connect->query($query)){
												//while($row = $result->fetch_assoc()){
												$result = mysqli_query($connect, $query);
												$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
								?>
								<tr>
									<td><a href="ChiTiet.php?id=<?php echo $row["madt"] ?>"><img width="100" height="50" alt="" src="themes/images/index/<?php echo $row["hinh"] ?>"></a></td>
									
									<td><strong><?php echo $row["tengiay"] ?></strong></td><br/>
									
									<td><?php echo $value;?></td>
									<td><strong><?php echo $row["size"] ?></strong></td><br/>
									
									<td><?php echo number_format($row["gia"],0,".","."); ?></td>
									
									<td><?php echo number_format($row['gia']*$value); ?></td>

									<td>
										<a href="xoagiohang.php?id=<?php echo $key; ?>">Xóa</a>
									</td>
								</tr>
								<?php
												}
												mysqli_free_result($result);
												mysqli_close($connect);
											
										}
								?>
							</tbody>
									
						</table>

						<p class="buttons center">				
							<!--<button class="btn" type="button">Update</button>
							<button class="btn" type="button">Continue</button>-->
							<button class="btn btn-inverse" type="submit"><a href="checkout.php">Xác Nhận</a></button>
							<button class="btn btn-inverse" type="submit"><a href="index.php">Tiếp Tục Mua</a></button>
						</p>					
					</div>
					
					<?php include("danhmuc.php"); ?>
				
				</div>
			</section>			
			<?php include("footer.php"); ?>		
    </body>
</html>