<?php
require_once('database.php');
class M_nguoi_dung extends database
{
	function Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung)
	{
		$sql="select * from nguoi_dung where ma_nguoi_dung=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_nguoi_dung));	
	}
	
	
	 
}