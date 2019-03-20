<?php
$pdo = new PDO('mysql:host=localhost; dbname=venzshop', 'root', '');
$pdo->query("set names 'utf8' ");
$ten = $_GET['id'];


$sql= "delete from admin where username='$ten' ";
//echo $sql;
$data = $pdo->query($sql);
header("location:quan_tri.php");