<?php
	session_start();
	include("includes/config.php");
	//Nếu giỏ hàng chưa có sản phẩm thì không cho checkout mà quay về trang chủ.
	if(!isset($_SESSION['giohang']))
		header("Location: index.php");
	if(isset($_POST['btn_submit'])){
		$hoten = $_POST['hoten'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$addr = $_POST['addr'];
		$city = $_POST['city'];
		$contry = $_POST['contry'];
		$dist = $_POST['dist'];
		$comment = $_POST['comment'];
		if(!$hoten || !$email | !$phone || !$addr || !$city || !$contry || !$dist || !$comment)
		{
			echo "Vui lòng điền đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO khachhang(`email`,`tenkh`,`diachi`,`sodienthoai`,`thanhpho`,`quocgia`,`quan_huyen`,`comment`) VALUES('$email', '$hoten', '$addr', '$phone', '$city', '$contry', '$dist', '$comment')";
			$connect->query($sql);
			$last_id = $connect->insert_id;
			
			//Insert chitiet_hd
			//Random ma hoa don
			$mahd = rand(000,999).time();
			foreach ($_SESSION['giohang'] as $key => $value) {
				$query = "SELECT * FROM chitiet_dt where madt = '$key' ";
				$result = mysqli_query($connect, $query);
				$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
				$price = $row['gia'];
				$s = $row['gia']*$value;
				
				echo $sql_hd = "INSERT INTO chitiet_hd(`mahd`,`madt`,`kh_id`,`soluong`,`dongia`,`tong_tien`) VALUES ('$mahd','$key','$last_id','$value','$price', '$s')";
				//exit;
				$connect->query($sql_hd);
			}
		//Xóa giỏ hàng
		unset($_SESSION['giohang']);
		//Chuyển qua trang hóa đơn
		header("Location: index.php");
		//Close
		$connect->close();
		
		}
		
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
			<section class="header_text sub">
			<img class="pageBanner" src="themes/images/banner/39583fd7ffba39b.jpg" >
				<h4><span>Check Out</span></h4>
				<!--<div style="width:200px; height:0px;margin:10px auto;text-align:center;color:red;">
							<?php
								echo "Vui lòng điền đầy đủ thông tin";
							?>
				</div>-->
			</section>	
			<section class="main-content">
				<div class="row">
					<div class="span12">
					<form action="" method="POST">
						<div class="accordion" id="accordion2">
							<div class="accordion-group">
								<div class="accordion-heading">
									<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">Tài khoản &amp; Chi tiết thanh toán</a>
								</div>
								<div id="collapseOne" class="accordion-body in collapse">
									<div class="accordion-inner">
										<div class="row-fluid">
											<div class="span6">
												<h4>Thông tin cá nhân</h4>
												<div class="control-group">
													<label class="control-label">Họ Tên</label>
													<div class="controls">
														<input type="text" name="hoten" placeholder="" class="input-xlarge">
													</div>
												</div>					  
												<div class="control-group">
													<label class="control-label">Email</label>
													<div class="controls">
														<input type="text" name="email" placeholder="" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Số điện thoại</label>
													<div class="controls">
														<input type="text" name="phone" placeholder="" class="input-xlarge">
													</div>
												</div>

											</div>
											<div class="span6">
												<h4>Địa chỉ</h4>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Địa Chỉ:</label>
													<div class="controls">
														<input type="text" placeholder="" name="addr" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Thành Phố:</label>
													<div class="controls">
														<input type="text" placeholder="" name="city" class="input-xlarge">
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Quốc gia:</label>
													<div class="controls">
														<select name="contry" class="input-xlarge">
															<option value="Việt Nam">Việt Nam</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label"><span class="required">*</span> Quận / Huyện:</label>
													<div class="controls">
														<select name="dist" class="input-xlarge">
															<option value=""> --- Please Select --- </option>
															<option>Quận 1</option>
															<option>Quận 2</option>
															<option>Quận 3</option>
															<option>Quận 4</option>
															<option>Quận 5</option>
														</select>
													</div>
												</div>
												<div class="control-group">
													<label class="control-label">Comments</label>
													<div class="controls">
											            <textarea class="span12" name="comment" id="comment" placeholder="Comments..."></textarea>
											            <div class="error left-align" id="err-comment"></div>
													</div>
												</div>
												<div class="control-group">
													<button class="btn btn-warning" type="submit" name="btn_submit" data-toggle="modal" data-target=".bs-example-modal-sm">THANH TOÁN</button>
											            <div class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
											              <div class="modal-dialog modal-sm">
											                <div class="modal-content">
											                <center><stong><h2>Cảm ơn bạn đã thanh toán!<h2></stong><br>
											                  	<input class="btn btn-inverse pull" type="submit" name="btn_submit" value="Xác nhận đơn hàng"/></center>
											                </div>
											              </div>
											            </div>
										        </div>
											</div>
											
										</div>
									</div>
								</div>
							</div>
						</div>		
					</form>
					</div>
				</div>
			</section>
			
			<?php include("footer.php"); ?>
			
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
    </body>
</html>