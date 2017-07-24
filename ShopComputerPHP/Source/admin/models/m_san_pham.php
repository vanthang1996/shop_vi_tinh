<?php
require_once('database.php');
class M_san_pham extends database {
	function Doc_loai_san_pham($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai like '% $tim%' or ten_loai like '%$tim %' or ten_loai like '%$tim%'";
		}
		
		$sql = "Select * from loai_san_pham ". $dk ." order by ma_loai";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	function  Doc_loai_san_pham_theo_ma_loai_cha($ma_loai_cha){
		$sql = "Select * from loai_san_pham where ma_loai=? ";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai_cha));
	}
	function Doc_san_pham($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_san_pham like '% $tim%' or ten_san_pham like '%$tim %' or ten_san_pham like '%$tim%'";
		}
		
		$sql = "Select * from san_pham ". $dk ." order by ngay_tao";
			if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	 function Doc_san_pham_theo_ma_san_pham($ma_san_pham){
		 $sql = "select  * from san_pham where ma_san_pham=?";
		 $this->setQuery($sql);
		 return $this->loadRow(array($ma_san_pham));
	 }
	 
	  function Doc_loai_san_pham_khong_co_con(){
	  $sql ="select  *  from  loai_san_pham where  ma_loai not in( select ma_loai_cha  from loai_san_pham )";
	  $this->setQuery($sql);
	  return $this->loadAllRows();
	  }
	   function Doc_loai_san_pham_theo_ma_loai($ma_loai){
		    $sql = "select  * from loai_san_pham where ma_loai=?";
		 $this->setQuery($sql);
		 return $this->loadRow(array($ma_loai));
	   }
	    function Sua_loai_san_pham($ma_loai,$ten_loai,$mo_ta,$ma_loai_cha,$hinh){
			$sql ="UPDATE `loai_san_pham` SET `ten_loai`=?,`mo_ta`=?,`ma_loai_cha`=?,`hinh`=? WHERE ma_loai=?";
			$this->setQuery($sql);
			return  $this->execute(array($ten_loai,$mo_ta,$ma_loai_cha,$hinh,$ma_loai));
		}
		function Sua_san_pham($ma_san_pham,$ten_san_pham,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi){
			$sql ="UPDATE san_pham SET ten_san_pham=?,ma_loai=?,mo_ta_tom_tat=?,mo_ta_chi_tiet=?,don_gia=?,hinh=?,san_pham_moi=? WHERE ma_san_pham=?";
			$this->setQuery($sql);
			return $this->execute(array($ten_san_pham,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$ma_san_pham));
		}
		
		function Them_loai_san_pham($ten_loai,$mo_ta,$ma_loai_cha,$hinh){
			$sql="insert into loai_san_pham values(?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array(NULL,$ten_loai,$mo_ta,$ma_loai_cha,$hinh));
			 return $this->getLastId();
			
		}
		 function Them_san_pham($ten_san_pham ,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao){
			 $sql = "insert into san_pham   values (?,?,?,?,?,?,?,?,?,?)";
			 $this->setQuery($sql);
			 $this->execute(array(NULL,$ten_san_pham,$ma_loai,$mo_ta_tom_tat,$mo_ta_chi_tiet,$don_gia,$hinh,$san_pham_moi,$so_lan_xem,$ngay_tao));
			  return $this->getLastId();
			 
			 
		 }
		
	
	
}


?>