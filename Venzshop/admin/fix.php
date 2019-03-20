<?php
$pdo = new PDO('mysql:host=localhost; dbname=venzshop', 'root', '');
$pdo->query("set names 'utf8' ");

if(isset($_POST["ok"])) //kiem tra xem nguoi xu dung da bam vao nut "tai len" hay chua
{
$ten = $_POST['t'];
$loai = $_POST['l'];
$gia = $_POST['g'];
$spnb = $_POST['sp'];
$madt = $_POST['mdt'];
$h = $_FILES['file']['error']==0?"".$_FILES["file"]["name"]:"";
$sql= "update dienthoai set tendt='$ten', maloai='$loai', gia='$gia', hinh='$h', sp_noibat='$spnb' where madt='$madt'";
//echo $sql
$data = $pdo->query($sql);
if($_FILES['file']["error"]==0)
	{
		move_uploaded_file($_FILES['file']["tmp_name"],"".$_FILES["file"]["name"]);
	}
header("location:tables.php");
}