<?php
	
    session_start();
    $loi=array();
    $username = $password = NULL;
    $loi["login"] = $loi["login2"] = NULL;
    if (isset($_POST["ok"])){
        //check may o dang nhap
        if(empty($_POST["txtname"]) && empty($POST["txtpass"])){
            $loi["login"]="* Vui lòng nhập đầy đủ Tài Khoản và Mật Khẩu!!!";
        }
        else {
            $username=$_POST["txtname"];
            $password=md5($_POST["txtpass"]);
        }
    }
    //xu ly thong tin da nhap
    if($username && $password){
        //mo ket noi voi host
        $o = new PDO("mysql:host=localhost; dbname=venzshop", "root", "");
        $o->query("set names 'utf8'");
        
         //echo $sql; exit;
        //Thuc hien xac minh tai khoan
        $sql ="select * from khachhang where tenkh='$username' and password='$password'";
        $data = $o->query($sql);

         //echo "<pre>";print_r($data->fetchAll()); //exit;
        //print_r($loi); print_r( $_POST); echo $sql;
        if($data->rowCount()==1){
            $row = $data->fetch(); // mysql_fetch_assoc($result);
           //$_SESSION["khachhang"] = $row["0"];
            $_SESSION["my_user"] = $row["tenkh"];
            header('location:index.php');
			exit;
        }
        else{
            $loi["login2"]="* Wrong username or password";
			
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
				<!--<h4><span class="text"><strong>Đăng<strong> Nhập</span></h4>-->
			</section>			
			<section class="main-content">				
				<div class="row">
					<div class="span12">					
						<center><h4 class="title"><span class="text"><strong>ĐĂNG</strong> NHẬP</span></h4></center>
					
						
							<form action="dangnhap.php" method="post">
							<center><table>
								<tr>
									<td><strong>Tài Khoản</strong> </td>
									<td><input type="text" size="25" name="txtname"/></td>
								</tr>
								<tr>
									<td><strong>Mật Khẩu</strong> </td>
									<td><input type="password" size="25" name="txtpass"/></td>
								</tr>
								<tr>
									<td></td>
									
									<td><input class="btn btn-inverse" type="submit" value="Xác Nhận" name="ok"/></td>
									
								</tr>
								
							</table></center>
									
							</form>
						</div>
						<div style="width:290px; height:200px;margin:10px auto;text-align:center;color:red;">
						
						 <?php
							echo $loi["login"];	
							echo $loi["login2"];
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
					document.location.href = "giohang.php";
				})
			});
		</script>		
    </body>
</html>