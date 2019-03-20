<?php
	
	$loi=array();
	$username = $password = $email = Null;
	$loi["register"] = $loi["username"] = $loi["password"] = $loi["email"] = Null;
	if(isset($_POST["ok"])){
		//check o nhap username
		if(empty($_POST["txtname"])){
			$loi["username"]="Xin vui long nhap username.<br/>";
		}
		else {
			$username=$_POST["txtname"];
		}
		
		//check o nhap password
		if(empty($_POST["txtpass"])){
			$loi["password"]="Xin vui lòng nhập password.<br/>";
		}
		else {
			$password=md5($_POST["txtpass"]);
		}
		
		//check o nhap email
		if(empty($_POST["txtmail"])){
			$loi["email"]="Xin vui lòng nhập email.<br/>";
		}
		else {
			$email=$_POST["txtmail"];
		}

		if(isset($username) && isset($password) && isset($email))
		    {
			
			//Mo ket noi voi server

			$o = new PDO("mysql:host=localhost; dbname=venzshop", "root", "");
			$o->query("set names 'utf8'");
			$sql ="insert into khachhang(tenkh,password,email)
			                          value('$username','$password','$email')";
        	                               //echo $sql; exit;
				                            $o->query($sql);



				$loi["register"] = "* Đăng Ký thành công, vui lòng <a href='dangnhap.php'>Click</a> vào đây để đăng nhập";
			}
			else {
				$loi["register1"] = "* Username đã có người sử dụng";
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
			<img class="pageBanner" src="themes/images/banner/39583fd7ffba39b.jpg" alt="Giỏ Hàng" >
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span12">					
						<center><h4 class="title"><span class="text"><strong>Đăng</strong> Ký</span></h4></center>
							<form action="dangky.php" method="post">
								<center><table>
									<tr>
										<td><strong>Tài Khoản</strong></td>
										<td><input type="text" size="25" name="txtname"/></td>
									</tr>
									<tr>
										<td><strong>Mật Khẩu</strong></td>
										<td><input type="password" size="25" name="txtpass"/></td>
									</tr>
									<tr>
										<td><strong>Email</strong></td>
										<td><input type="text" size="25" name="txtmail" /></td>
									</tr>
									<tr>
										<td></td>
										<td><input class="btn btn-inverse" type="submit" value="Đăng Ký" name="ok"/></td>
										
									</tr>
								</table></center>
							</form>
					</div>
					<div style="width:290px; height:200px;margin:10px auto;text-align:center;color:red;">
					<?php 
								echo $loi["username"];
								echo $loi["password"];
								echo $loi["email"];
								echo $loi["register"];
					?>
					</div>								
				</div>
			</section>	
			
			<?php include("footer.php"); ?>	
			
			<section id="copyright">
				<span>Copyright 2013 bootstrappage template  All right reserved.</span>
			</section>
		</div>
		<script src="themes/js/common.js"></script>
		<script>
			$(document).ready(function() {
				$('#checkout').click(function (e) {
					document.location.href = "checkout.html";
				})
			});
		</script>		
    </body>
</html>