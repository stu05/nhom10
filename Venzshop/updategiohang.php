<?php
if (!isset($_SESSION)) session_start();
if (!isset($_SESSION['giohang'])) 
	$_SESSION['giohang'] = array();
$tam = $_SESSION['giohang'];

$id = isset($_GET['id'])?$_GET['id']:'';
$sl = isset($_GET['sl'])?$_GET['sl']:1;
if ($id !='') //Thêm
{
	if (!isset($tam[$id]))
		$tam[$id]= $sl;
	else $tam[$id] += $sl;
}
$_SESSION['giohang'] = $tam ;

header('location:giohang.php');