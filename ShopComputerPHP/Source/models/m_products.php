<?php 
include_once("models/database.php");
class M_products extends database{
	 function doc_san_pham($vt=-1,$limit=-1){
		 $sql="select * from san_pham ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		$this->setQuery($sql);
		return $this->loadAllRows();
	 }
	 function doc_san_pham_theo_ma_loai($ma_loai,$vt=-1,$limit=-1){
		 $sql="select  * from san_pham  where ma_loai=?";
		 if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		 $this->setQuery($sql);
		 return $this->loadAllRows(array($ma_loai));
		 
	 }
	 function doc_san_pham_cung_loai($ma_loai,$ma_san_pham,$vt=-1,$limit=-1){
		 $sql="select  * from san_pham  where ma_loai=?  and  ma_san_pham!=?";
		 if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		 $this->setQuery($sql);
		 return $this->loadAllRows(array($ma_loai,$ma_san_pham));
		 
	 }
	 function doc_loai_san_pham (){
	 		$sql ="select  ma_loai,ten_loai  from loai_san_pham  where ma_loai in(select distinct ma_loai from san_pham)";
			$this->setQuery($sql);
			return $this->loadAllRows();
	 }
	  function doc_san_pham_moi($vt=-1,$limit=-1){
		   $sql="select  * from san_pham  where san_pham_moi=?";
		 if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		 $this->setQuery($sql);
		 return $this->loadAllRows(array("1"));
	  }
	  function doc_san_pham_yeu_thich($vt=-1,$limit=-1){
		   $sql="select  * from san_pham  order by so_lan_xem";
		 if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		 $this->setQuery($sql);
		 return $this->loadAllRows();
	  }
	  //SELECT ct_hoa_don.ma_san_pham,ten_san_pham FROM `ct_hoa_don`  join  san_pham  on san_pham.ma_san_pham= ct_hoa_don.ma_san_pham   GROUP by ma_san_pham,ten_san_pham  ORDER BY sum(so_luong) desc
	   function doc_san_pham_ban_chay($vt=-1,$limit=-1){
		   $sql="SELECT ct_hoa_don.ma_san_pham,san_pham.ten_san_pham,san_pham.don_gia,san_pham.hinh FROM `ct_hoa_don`  join  san_pham  on san_pham.ma_san_pham= ct_hoa_don.ma_san_pham   GROUP by ct_hoa_don.ma_san_pham,san_pham.ten_san_pham,san_pham.don_gia,san_pham.hinh  ORDER BY sum(so_luong) desc";
		 if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		 $this->setQuery($sql);
		 return $this->loadAllRows();
	  }
	   function doc_san_pham_theo_ma_san_pham($ma_san_pham){
		   $sql = "update  san_pham  set so_lan_xem =so_lan_xem+1 where ma_san_pham=? ";
		    $this->setQuery($sql);
			 $this->execute(array($ma_san_pham));
		    $sql="select  * from san_pham  where ma_san_pham =?";
		 $this->setQuery($sql);
		 return $this->loadRow(array($ma_san_pham));
	   }
	    function tim_kiem_san_pham_theo_ten($keyWord){
		$sql="SELECT * FROM san_pham WHERE  ten_san_pham  like '%$keyWord%' limit 0,10";
		 $this->setQuery($sql);
		 return $this->loadAllRows();
		}
		 function tim_kiem_san_pham_theo_ten2($ten){
		$sql="SELECT * FROM san_pham WHERE  ten_san_pham  like '%$ten%' limit 0,1";
		 $this->setQuery($sql);
		 return $this->loadRow();
		}
		
		
}


?>