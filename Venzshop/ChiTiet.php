<?php
	session_start();
	include("includes/config.php");
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
			<img class="pageBanner" src="themes/images/banner/39583fd7ffba39b.jpg" >
				<h4><span>Thông tin sản phẩm</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">						
					<div class="span9">
						<div class="row">
							<div class="span4">
							<?php
									mysqli_query ($connect,"SET NAMES UTF8");
									$id = (isset($_GET['id']) ? $_GET['id'] : '');
									//foreach ($arr as $key => $value){
									$query = "SELECT * FROM chitietgiay where magiay = '$id' ";
									if($result = $connect->query($query))
										{
											while($row = $result->fetch_assoc()){
												//print_r($row);
															
							?>
							<a href="themes/images/index/<?php echo $row['hinh']; ?>" class="thumbnail" data-fancybox-group="group1" title="sản phẩm 1"><img width="300" height="200" alt="" src="themes/images/index/<?php echo $row['hinh']; ?>"></a>							
								<!--<ul class="thumbnails small">								
									<li class="span1">
										<a href="themes/images/chitiet/2.png" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/chitiet/2.png" alt=""></a>
									</li>								
									<li class="span1">
										<a href="themes/images/chitiet/3.png" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/chitiet/3.png" alt=""></a>
									</li>													
									<li class="span1">
										<a href="themes/images/chitiet/4.png" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/chitiet/4.png" alt=""></a>
									</li>
									<li class="span1">
										<a href="themes/images/chitiet/5.png" class="thumbnail" data-fancybox-group="group1" title="Description 2"><img src="themes/images/chitiet/5.png" alt=""></a>
									</li>
								</ul>-->
							</div>
							<div class="span5">
								<address>
									<strong>Tên Sản Phẩm:</strong> <span><?php echo $row['tengiay']; ?></span><br>
									<strong>Đơn Giá:</strong> <span><?php echo $row['gia']; ?></span><br>
                                    <strong>Số Lượng:</strong> <input type="text" name="fullname" value=""><br>
                                    <strong>Mô Tả:</strong> <span><?php echo $row['mota']; ?></span><br>
                                    </form>
                                    <strong>Size:</strong>
                                    <select name="size">
                                    <option value="39">39</option>
                                    <option value="40">40</option>
                                    <option value="41">41</option>
                                    <option value="42">42</option>
                                    </select>
                                    
                                </address>									
								<h4><strong>Giá: <?php echo number_format($row['gia'],0,".","."); ?> đ</strong></h4>
								
							</div>
							<!--<div class="span5">
								<form class="form-inline">
									<label>Số lượng:</label>
									<input type="text" class="span1" placeholder="">
									<button class="btn btn-inverse" type="submit"><a href="giohang.php?id=<?php echo $row["magiay"]; ?>">Giỏ hàng</a></button>
								</form>
							</div>-->
								<div class="span5">
									<button class="btn btn-inverse" type="submit"><a href="updategiohang.php?id=<?php echo $row["magiay"]; ?>">Giỏ hàng</a></button>
								</div>
							<?php
											}
											$result->free();
										}
										$connect->close();
									
							?>
						</div>
					</div>
					<?php include("danhmuc.php"); ?>
				</div>
				
			</section>	
			<?php include("footer.php"); ?>
    </body>
</html>