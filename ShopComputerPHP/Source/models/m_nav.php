<?php 
include_once("models/database.php");
class M_Nav extends database{
	function hien_thi_super_menu($ma_loai_cha=-1){
		if($ma_loai_cha==-1){
			$ma_loai_cha=0;
		}
		$sql = "select ma_loai,ten_loai from loai_san_pham where ma_loai_cha=?";
		$this->setQuery($sql);
		return $this->loadAllRows(array($ma_loai_cha));
	}
}


?>