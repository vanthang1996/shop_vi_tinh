<?php
require_once('database.php');
class M_don_hang extends database {
	function Doc_don_hang($tim="",$vt=-1,$limit=-1){
		$dk="";
		$khach_hangs= array();
		if($tim!="")
		{
			$sql  = "select ma_khach_hang,ten_khach_hang  from  khach_hang where ten_khach_hang like '% $tim%' or ten_khach_hang like '%$tim %' or ten_khach_hang like '%$tim%'";
			
			 $this->setQuery($sql);
			 $khach_hangs = $this->loadAllRows();
		}
		$don_hangs =  array();
		if(count($khach_hangs)>0){
			foreach($khach_hangs as $khach_hang){
				$sql = "Select * from hoa_don  where ma_khach_hang=? ";
				if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		
				   $this->setQuery($sql);
				$don_hangs[] = $this->loadRow(array($khach_hang->ma_khach_hang));
			}
		}else{
			
		
			$sql = "Select * from hoa_don ". $dk ." order by trang_thai,ngay_hd ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
        $this->setQuery($sql);
     $don_hangs= $this->loadAllRows();
		
		}
		return $don_hangs;
		
	}
	 function Doc_chi_tiet_don_hang_theo_so_hoa_don($so_hoa_don){
	 $sql  = "select * from ct_hoa_don where  so_hoa_don=?";
	 $this->setQuery($sql);
	 return  $this->loadAllRows(array($so_hoa_don));
	 }
	
	
}


?>