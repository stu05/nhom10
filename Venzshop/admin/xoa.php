<?php
$pdo = new PDO('mysql:host=localhost; dbname=venzshop', 'root', '');
$pdo->query("set names 'utf8' ");
$madt = $_GET['id'];


$sql= "delete from dienthoai where madt='$madt' ";
//echo $sql;
$data = $pdo->query($sql);
header("location:tables.php");