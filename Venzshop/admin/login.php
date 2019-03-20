<?php
session_start();
function post($index, $value='')
{
	return isset($_POST[$index])?$_POST[$index]:$value;
}
$email = post('e');
$pass = md5(post('p'));
$sm   = post('sm');

if ($sm!='Đăng nhập' || ($email=='') )
{
	header('location:dang_nhap.php'); exit;
}
$pdo = new PDO('mysql:host=localhost; dbname=venzshop', 'root', '');
$pdo->query("set names 'utf8' ");
$sql ="select * from admin where email='$email' and password='$pass' ";
$data = $pdo->query($sql);

if ($data->rowCount() != 0) //ok
{
	$r = $data->fetchAll(PDO::FETCH_ASSOC);
	$_SESSION['admin'] = $r[0]['email'];
	header('location:index.php');
}
else 
{
	header('location:dang_nhap.php');
}