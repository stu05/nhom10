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
		include("slider.php");
		?>

			
            <section class="our_client">
				<h4 class="title"><span class="text">Hãng Giày</span></h4>
				<div class="row">					
					<div class="span2">
						<a href="sptheoloai.php?loai=adidas"><img alt="" src="themes/images/clients/adidas.jpg"></a>
					</div>
					<div class="span2">
						<a href="sptheoloai.php?loai=converse"><img alt=""src="themes/images/clients/converse.jpg"></a>
					</div>
					<div class="span2">
						<a href="sptheoloai.php?loai=jordan"><img alt="" src="themes/images/clients/jordan.jpg"></a>
					</div>
					<div class="span2">
						<a href="sptheoloai.php?loai=puma"><img alt="" src="themes/images/clients/puma.jpg"></a>
					</div>
					<div class="span2">
						<a href="sptheoloai.php?loai=nike"><img alt="" src="themes/images/clients/nike.jpg"></a>
					</div>

				</div>
			</section>
			<section class="main-content">
				<div class="row">
					<div class="span12">													
						<div class="row">
							<div class="span12">
								<h4 class="title">
									<span class="pull-left"><span class="text"><span class="line">Sản phẩm nổi bật </span></span></span>
									<span class="pull-right">
										<!--<a class="left button" href="#myCarousel-2" data-slide="prev"></a><a class="right button" href="#myCarousel-2" data-slide="next"></a>-->
								</h4>
					<div id="myCarousel-2" class="myCarousel carousel slide">
						<div class="carousel-inner">
							<div class="active item">
								<div class="item">
								<ul class="thumbnails">
									<?php 

											$result = $sanpham->noibat();
											foreach($result as $row ){
									?>
									<li class="span3">
										<div class="product-box">
											<span class="sale_tag"></span>											
												<p> <a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>">
													<img width="200" height="100"  src="admin/images/index/<?php echo $row["hinh"]; ?>"></a>
												</p>
													<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>" class="title"><?php echo $row["tengiay"]; ?></a><br/>
													<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>" class="category"><?php echo number_format($row["gia"],0,",","."); ?> đ</a>		
										</div>
									</li>
									<?php
												}
											
											//$connect->close();
									?>
									<!--<li class="span3">
										<div class="product-box">
										<span class="sale_tag"></span>			
											<p> <a href="san  pham noi bat/Huawei1.html"><img width="180" height="180"  src="themes/images/huawei/huawei-y9-2019-blue-400x460.png"></a></p>
												<a href="san  pham noi bat/Huawei1.html" class="title"> Huawei Y9 (2019)</a><br/>
												<a href="san  pham noi bat/samsunga6.html" class="category">5.490.000₫</a>
														
										</div>
									</li>
									<li class="span3">
										<div class="product-box">				
											<p> <a href="san  pham noi bat/samsunga6.html"><img width="180" height="180"  src="themes/images/samsung/samsung-galaxy-a6-plus-2018-xanh-400x460-400x460.png"></a></p>
												<a href="san  pham noi bat/samsunga6.html" class="title"> Samsung Galaxy A6+ (2018)</a><br/>
												<a href="san  pham noi bat/samsunga6.html" class="category">8.290.000₫</a>
														
										</div>
									</li>
                                    <li class="span3">
										<div class="product-box">		
											<p> <a href="san  pham noi bat/iphonex.html"><img width="180" height="180"  src="themes/images/iphone/iphone-x-64gb-1-400x460.png"></a></p>
												<a href="san  pham noi bat/iphonex.html" class="title"> iPhone X 64GB Gray</a><br/>
												<a href="san  pham noi bat/iphonex.html" class="category"> 24.990.000₫</a>
														
										</div>
									</li>
										
									
									<li class="span3">
										<div class="product-box">		
											<p>	<a href="san  pham noi bat/oppof9.html"><img width="180" height="180"  src="themes/images/oppo/oppo-f9-tim-doc-quyen-400x460.png"></a></p>
												<a href="san  pham noi bat/oppof9.html" class="title"> OPPO F9 Tím Tinh Tú</a><br/>
												<a href="san  pham noi bat/oppof9.html" class="category">7.690.000₫</a>
														
										</div>
									</li>
								</div>-->
								
														<!--<p><a href="san  pham noi bat/sonyx.html"><img width="180" height="180"  src="themes/images/sony/sony-xperia-xz-h-1-400x460.png"></a></p>
														<a href="san  pham noi bat/sonyx.html" class="title"> Sony Xperia XZ Dual</a><br/>
														<a href="san  pham noi bat/sonyx.html" class="category">9.990.000₫ </a>-->
												
												
												<!--<li class="span3">
												  <div class="product-box">
														<p><a href="san  pham noi bat/ssj7prime.html"><img width="180" height="180"  src="themes/images/samsung/ssj7/samsung-galaxy-j7-prime-2-400x460.png"></a></p>
														<a href="san  pham noi bat/ssj7prime.html" class="title"> Samsung Galaxy J7 Prime</a><br/>
														<a href="san  pham noi bat/ssj7prime.html" class="category">5.000.000</a>
													
												  </div>
												</li>-->
								</ul>
								</div>
								
							</div>
							
						</div>
												
					</div>
					
							</div>
							
				<br/>
						</div>
						
					</div>
					
				</div>
			</section>											
		</div>	
<?php include("footer.php"); ?>

    </body>
</html>