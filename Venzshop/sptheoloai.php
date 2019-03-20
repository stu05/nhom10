<?php
	session_start();
	include("includes/config.php");
	include "includes/function.php";
	
	spl_autoload_register("loadClass");
	
  $sanpham = new Sanpham();
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
			<img class="pageBanner" src="themes/images/banner/4.jpg" >
				<h4><span>Sản Phẩm </span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">					
						<ul class="thumbnails listing-products">
								<?php 
									$loai = isset($_GET['loai'])?$_GET['loai']:'adidas';
									$loai = isset($_GET['loai'])?$_GET['loai']:'converse';
									$loai = isset($_GET['loai'])?$_GET['loai']:'jordan';
									$loai = isset($_GET['loai'])?$_GET['loai']:'puma';
									$loai = isset($_GET['loai'])?$_GET['loai']:'nike';
									$result = $sanpham->theoloai($loai);
									
									
										foreach($result as $row ){
								?>
	
												
									  <li class="span3">
									  	<div class="product-box">
										<div class="row">		
										<p>
										<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>">
										<img width="180" height="180"  src="themes/images/index/<?php echo $row["hinh"]; ?>">
										</a>
										</p>
											<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>" class="title"><?php echo $row["tengiay"]; ?></a><br/>
											<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>" class="category"><?php echo number_format($row["gia"],0,",","."); ?> đ</a>
																
										  </div>
										</div>
									</li>
										<?php

								}
											
										?>
										
						</ul>
						<hr></div>
					<?php include("danhmuc.php"); ?>
			</section>
		<?php include("footer.php"); ?>
    </body>
</html>
    </body>
</html>