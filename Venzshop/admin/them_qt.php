<?php
$pdo = new PDO('mysql:host=localhost; dbname=venzshop', 'root', '');
$pdo->query("set names 'utf8' ");

$tenqt = $_POST['t'];
$email = $_POST['e'];
$matkhau = md5($_POST['p']);
$sdt = $_POST['sdt'];

$sql = "insert into admin(username,email,password,sodienthoai) values('$tenqt','$email','$matkhau','$sdt')";
//echo $sql;
$data = $pdo->query($sql);
header("location:quan_tri.php");