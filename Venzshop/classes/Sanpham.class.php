<?php
class Sanpham extends Db
{
	function tatca()
	{
		return $this->selectQuery("select * from giay");
	}

	function timKiem($ten)
	{
		$sql="select * from giay where tengiay like ?";
		$arr = array("%$ten%");
		return $this->selectQuery($sql, $arr);
	}

	
	function noibat()
	{
		return $this->selectQuery("SELECT * FROM `giay` WHERE sp_noibat = '1'");
	}

	function theoLoai($loai)
	{
		if ($loai =="adidas")
			$query = "SELECT * FROM giay WHERE magiay BETWEEN 1 AND 5";
		if ($loai =="converse")
			$query = "SELECT * FROM giay WHERE magiay BETWEEN 6 AND 8";
	    if ($loai =="jordan")
			$query = "SELECT * FROM giay WHERE magiay BETWEEN 9 AND 11";
		if ($loai =="puma")
			$query = "SELECT * FROM giay WHERE magiay BETWEEN 13 AND 15";
		if ($loai =="nike")
			$query = "SELECT * FROM giay WHERE magiay BETWEEN 16 AND 20";
		return $this->selectQuery($query);
	}
}