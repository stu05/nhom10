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
			<img class="pageBanner" src="themes/images/banner/123" alt="Sản Phẩm" >
				<h4><span>SẢN PHẨM</span></h4>
						<div class="pagination pagination-small pagination-centered">
							<ul>
								<li><a href="sanpham1.php">Prev</a></li>
								<li><a href="sanpham.php">1</a></li>
								<li class="active"><a href="sanpham2.php">2</a></li>
								<li><a href="sanpham3.php">3</a></li>
								
								<li><a href="sanpham3.php">Next</a></li>
							</ul>
						</div>
			</section>
			<section class="main-content">
				
				<div class="row">						
					<div class="span9">								
						<ul class="thumbnails listing-products">
							<?php 
									mysqli_query ($connect,"SET NAMES UTF8");
									$query = "SELECT * FROM giay";
									if($result = $connect->query($query)){
										while($row = $result->fetch_assoc()){
								?>
	
												
									  <li class="span3">
									  	<div class="product-box">
										<div class="row">		
										<p>
											<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>">
											<img width="180" height="180"  src="themes/images/index/<?php echo $row["hinh"]; ?>"></a>
										</p>
											<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>" class="title"><?php echo $row["tengiay"]; ?></a><br/>
											<a href="ChiTiet.php?id=<?php echo $row["magiay"]; ?>" class="category"><?php echo number_format($row["gia"],0,",","."); ?> đ</a>
											
										  </div>
										</div>
									</li>
										<?php

													}
													$result->free();
												} 
												$connect->close();
										?>
							<!--<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html"><img alt="" src="themes/images/huawei/H3.png"></a><br/>
									<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
									<a href="#" class="category">Phasellus consequat</a>
									<p class="price">$341</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/iphone/h2.png"></a><br/>
									<a href="product_detail.html" class="title">Praesent tempor sem</a><br/>
									<a href="#" class="category">Erat gravida</a>
									<p class="price">$28</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">
									<span class="sale_tag"></span>												
									<a href="product_detail.html"><img alt="" src="themes/images/oppo/4.png"4></a><br/>
									<a href="product_detail.html" class="title">Wuam ultrices rutrum</a><br/>
									<a href="#" class="category">Suspendisse aliquet</a>
									<p class="price">$341</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<span class="sale_tag"></span>
									<a href="product_detail.html"><img alt="" src="themes/images/samsung/samsung-galaxy-a6-plus-2018-xanh-400x460-400x460.png"></a><br/>
									<a href="product_detail.html" class="title">Praesent tempor sem sodales</a><br/>
									<a href="#" class="category">Nam imperdiet</a>
									<p class="price">$49</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">                                        												
									<a href="product_detail.html"><img alt="" src="themes/images/sony/sony-xepria-xa1-plus-1-400x460.png"></a><br/>
									<a href="product_detail.html" class="title">Fusce id molestie massa</a><br/>
									<a href="#" class="category">Congue diam congue</a>
									<p class="price">$35</p>
								</div>
							</li>       
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/sony/sony-xperia-xz-h-1-400x460.png"></a><br/>
									<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
									<a href="#" class="category">Gravida placerat</a>
									<p class="price">$61</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/huawei/H2.png"></a><br/>
									<a href="product_detail.html" class="title">Quam ultrices rutrum</a><br/>
									<a href="#" class="category">Orci et nisl iaculis</a>
									<p class="price">$233</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/huawei/H3.png"></a><br/>
									<a href="product_detail.html" class="title">Tempor sem sodales</a><br/>
									<a href="#" class="category">Urna nec lectus mollis</a>
									<p class="price">$134</p>
								</div>
							</li>
							<li class="span3">
								<div class="product-box">												
									<a href="product_detail.html"><img alt="" src="themes/images/sony/sony-xperia-xz1-xanh-2-400x460.png"></a><br/>
									<a href="product_detail.html" class="title">Luctus quam ultrices</a><br/>
									<a href="#" class="category">Suspendisse aliquet</a>
									<p class="price">$261</p>
								</div>
							</li>
						</ul>-->								
						<hr>
					</div>
					
					<?php include("danhmuc.php"); ?>
				
				</div>
				
			</section>
			<?php include("footer.php"); ?>
    </body>
</html>