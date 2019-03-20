<?php
$server = "localhost";
$database = "webbangiay";
$user = "root";
$password = "";
$connect = new mysqli($server, $user, $password, $database);

mysqli_query ($connect,"SET NAMES UTF8");

if(isset($_SESSION["my_user"]))
		$my_user = $_SESSION["my_user"];
?>