<?php
class Db
{
	public $conn;
	public function __construct()
	{
		$this->conn = new PDO("mysql:host=localhost; dbname=webbangiay", "root", "");
		$this->conn->query("set names 'utf8' ");
	}
/**
 * [selectQuery description]
 * @param  [type] $sql [Chuoi query]
 * @param  [type] $arr [Mang truyen noi dung cho chuoi. Mac dinh la mang rong]
 * @return [type]      [Tra ve mang các dòng ket qua nhan duoc]
 */
	protected function selectQuery($sql, $arr=array())
	{
		$t = $this->conn->prepare($sql);
		$t->execute($arr);
		return $t->fetchAll(PDO::FETCH_ASSOC);
	}

	protected function updateQuery($sql, $arr=array())
	{
		$t = $this->conn->prepare($sql);
		$t->execute($arr);
		return $t->rowCount();
	}
}

