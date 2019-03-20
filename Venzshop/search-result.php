<?php

	include("includes/config.php");

		if (isset($_GET['name']))
			$get_name = $_GET['name'];
		else
			header("Location: index.php");
		$name = str_replace(" ", "%", $get_name);
		$name = "%".$name."%";
		$r = $connect->query("SELECT * FROM giay where tengiay like '$name'");
			$count = $r->num_rows;	

	
	
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
				<h4><span>TÌM THẤY <?php echo $count; ?> SẢN PHẨM VỚI TỪ KHÓA: <?php echo $get_name; ?></span></h4>
			</section>
			<section class="main-content">
				
				<div class="row">	

					<div class="span9">								
						<ul class="thumbnails listing-products">
								<?php 
									$query = "SELECT * FROM giay where tengiay like '$name'";
									if($result = $connect->query($query)){
										while($row = $result->fetch_assoc()){
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
													$result->free();
												} 
												//$connect->close();
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