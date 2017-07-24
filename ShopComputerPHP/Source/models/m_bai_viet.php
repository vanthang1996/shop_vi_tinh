<?php 
include_once("database.php");
class M_bai_viet extends database{
	 function Doc_bai_viet($vt=-1,$limit=-1){
		 $sql="select * from bai_viet ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	 }
	 function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet){
		$sql="UPDATE bai_viet SET so_lan_xem = (so_lan_xem + 1) WHERE ma_bai_viet=?";
		$this->setQuery($sql);
		 $this->execute(array($ma_bai_viet));
		 $sql="select * from bai_viet where ma_bai_viet=?";
		$this->setQuery($sql);
		return $this->loadRow(array($ma_bai_viet));
	 }
	 
	 
		
}


?>