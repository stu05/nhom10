<?php
	include("includes/config.php");
	$id = $_GET['act'];
	
 	$query = "SELECT * FROM chitiet_hd
					JOIN khachhang ON chitiet_hd.kh_id = khachhang.kh_id
					JOIN chitiet_dt ON chitiet_hd.madt = chitiet_dt.madt
					WHERE chitiet_hd.mahd = '$id'";
	if($result = $connect->query($query)){
		while($row = $result->fetch_assoc()){
			echo "<pre>";
			print_r($row);
			$ma_kh = $row['kh_id'];
		}
	}
	
	$sql = "SELECT * FROM khachhang WHERE kh_id = "$ma_kh"";
	$result = $connect->query($sql);
	$row = $result->fetch_assoc();
	echo "<pre>";
	print_r($row);
	
	
	print_r($result);
	
?>
<!--<html>
	<head>
		<meta charset="utf-8">
		<title>VenzShop</title>
		<link rel="stylesheet" href="themes\css\hoadon.css">
	</head>
	<body>
		<header>
			<h1>Đơn Hàng</h1>
			<address contenteditable>
				<p>Venzshop</p>
				<p>Đường123 nối Bato Phạm Thế Hiển <br>Phường 7 Quận 8</p>
				<p>01675065108</p>
			</address>
			<span><a href="index.php" class="logo pull-left"><img src="themes/images/Capture2.PNG" class="site_logo" alt=""></a></span>
		</header>
		<article>
			<h1>Recipient</h1>
			<address contenteditable>
				<p>Some Company<br>c/o Some Guy</p>
			</address>
			<table class="meta">
				<tr>
					<th><span>Invoice #</span></th>
					<td><span><?php echo $row['mahd']; ?></span></td>
				</tr>
				<tr>
					<th><span>Date</span></th>
					<td><span>January 1, 2012</span></td>
				</tr>
				<tr>
					<th><span>Amount Due</span></th>
					<td><span>600.00</span><span>VNĐ</span></td>
				</tr>
			</table>
			<table class="inventory">
				<thead>
					<tr>
						<th><span>Item</span></th>
						<th><span>Rate</span></th>
						<th><span>Quantity</span></th>
						<th><span>Price</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td><span>Front End Consultation</span></td>
						<td><span>600.00</span>VNĐ</td>
						<td><span>1</span></td>
						<td><span>600.00</span>VNĐ</td>
					</tr>
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th><span>Total</span></th>
					<td><span>600.00</span>VNĐ</td>
				</tr>
				<tr>
					<th><span>Amount Paid</span></th>
					<td><span>0.00</span>VNĐ</td>
				</tr>
				<tr>
					<th><span>Balance Due</span></th>
					<td><span>600.00</span>VNĐ</td>
				</tr>
			</table>
		</article>
		<aside>
			<h1><span>Additional Notes</span></h1>
			<div contenteditable>
				<p>A finance charge of 1.5% will be made on unpaid balances after 30 days.</p>
			</div>
		</aside>
	</body>
</html>-->