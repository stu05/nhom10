<?php
	session_start();
	include("includes/config.php");
	if(isset($_POST['btn_submit'])){
		$hoten = $_POST['ten'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		$sql = "INSERT INTO gop_y(`email`,`ten`,`comment`) VALUES('$email', '$hoten','$comment')";
		$connect->query($sql);
	}
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
			
			<section class="google_map">
				<iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3919.6432872224914!2d106.67726994832583!3d10.761950643873632!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31752f1db89be7e9%3A0x78cabedfd07c9ac0!2sB%E1%BA%A1ch+Long+Mobile!5e0!3m2!1svi!2s!4v1543556137651"></iframe>
			</section>
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/banner/1234.jpg" alt="Liên Hệ" >
				<h4><span>Liên Hệ</span></h4>
			</section>
			<section class="main-content">				
				<div class="row">				
					<div class="span5">
						<div>
							<h5>Đồng hành cùng bạn trên những chuyến đi</h5>
							<p><strong>Phone:</strong>&nbsp;0909009<br>
							<strong>Email:</strong>&nbsp;<a href="#">nhom10@gmail.com</a>								
							
						</div>
					</div>
					<div class="span7">
						<form method="post" action="#">
							<fieldset>
								<div class="control-group">
									<label class="control-label">Họ Tên</label>
									<div class="controls">
										<input type="text" name="ten" placeholder="Your Name" class="input-xlarge">
									</div>
								</div>					  
								<div class="control-group">
									<label class="control-label">Email</label>
									<div class="controls">
										<input type="text" name="email" placeholder="Email" class="input-xlarge">
									</div>
								</div>
				
								<div class="control-group">
									<label class="control-label">Comments</label>
									<div class="controls">
							            <textarea class="input-xlarge" name="comment" id="comment" placeholder="Comments..."></textarea>
							            <div class="error left-align" id="err-comment"></div>
									</div>
								</div>
				
								<div class="actions">
									<input class="btn btn-inverse pull" type="submit" name="btn_submit" value="Gửi"/>
								</div>
							</fieldset>
						</form>
					</div>				
				</div>
			</section>
			
			<?php include("footer.php"); ?>
			
		</div>
		<script src="themes/js/common.js"></script>		
    </body>
</html>