<?php
require_once('database.php');
class M_bai_viet extends database {
	function Doc_bai_viet($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where tieu_de like '% $tim%' or tieu_de like '%$tim %' or tieu_de like '%$tim%'";
		}
		
		$sql = "Select * from bai_viet ". $dk ." order by ngay_gui_bai desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	function Doc_loai_bai_viet($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai_bai_viet like '% $tim%' or ten_loai_bai_viet like '%$tim %' or ten_loai_bai_viet like '%$tim%'";
		}
		
		$sql = "Select * from loai_bai_viet ". $dk ." order by ten_loai_bai_viet desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	function  Doc_loai_bai_viet_theo_ma_cha($ma_cha){
		
		$sql = "Select * from loai_bai_viet where ma_loai_bai_viet=?";
		
        $this->setQuery($sql);
        return $this->loadRow(array($ma_cha));
	}
	 function Doc_bai_viet_theo_ma_bai_viet($ma_bai_viet){
		 $sql = "Select * from bai_viet where ma_bai_viet=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_bai_viet));
	 }
	  function  Sua_bai_viet($ma_bai_viet,$tieu_de,$noi_dung_tom_tat,$noi_dung_chi_tiet,$ngay_gui_bai,$ngay_xuat_ban,$ngay_het_han,$xuat_ban){
		  $sql ="UPDATE `bai_viet` SET `tieu_de`=?,`noi_dung_tom_tat`=?,`noi_dung_chi_tiet`=?,`ngay_gui_bai`=?,`ngay_xuat_ban`=?,`ngay_het_han`=?,`xuat_ban`=? WHERE `ma_bai_viet`=? ";
		  $this->setQuery($sql);
		  return $this->execute(array($tieu_de,$noi_dung_tom_tat,$noi_dung_chi_tiet,$ngay_gui_bai,$ngay_xuat_ban,$ngay_het_han,$xuat_ban,$ma_bai_viet));
		   
		  
	  }
	   function Doc_loai_bai_viet_theo_ma_loai_bai_viet($ma_loai_bai_viet){
	    $sql = "Select * from loai_bai_viet where ma_loai_bai_viet=?";
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai_bai_viet));
	   
	   }
	    function Sua_loai_bai_viet($ma_loai_bai_viet,$ten_loai_bai_viet,$mo_ta,$ma_loai_cha){
			$sql  = "UPDATE `loai_bai_viet` SET `ten_loai_bai_viet`=?,`mo_ta`=?,`ma_loai_cha`=? WHERE ma_loai_bai_viet=?";

$this->setQuery($sql);
return $this->execute(array($ten_loai_bai_viet,$mo_ta,$ma_loai_cha,$ma_loai_bai_viet));
		}
	    function Them_bai_viet( $ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban){
			$sql = "INSERT INTO `bai_viet`(`ma_bai_viet`, `ma_loai_bai_viet`, `ma_nguoi_dung`, `tieu_de`, `noi_dung_tom_tat`, `noi_dung_chi_tiet`, `ngay_gui_bai`, `ngay_xuat_ban`, `ngay_het_han`, `so_lan_xem`, `xuat_ban`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array(NULL, $ma_loai_bai_viet, $ma_nguoi_dung, $tieu_de, $noi_dung_tom_tat, $noi_dung_chi_tiet, $ngay_gui_bai, $ngay_xuat_ban, $ngay_het_han, $so_lan_xem, $xuat_ban));
			return $this->getLastId();
			}
			 function Doc_loai_bai_viet_khong_co_con(){
			 $sql ="select *  from loai_bai_viet where   ma_loai_bai_viet  not in (select ma_loai_cha from loai_bai_viet  )";
			  $this->setQuery($sql);
			   return $this->loadAllRows();
			 }
		function Them_loai_bai_viet($ten_loai_bai_viet,$mo_ta,$ma_loai_cha){
			$sql = "insert into loai_bai_viet values(?,?,?,?)";
			$this->setQuery($sql);
	
			$this->execute(array(NULL,$ten_loai_bai_viet,$mo_ta,$ma_loai_cha));
			return $this->getLastId();
					}
	
	
	 public function Xoa_tin_tuc($ma_bai_viet)
	   {
		   $sql="delete from bai_viet where ma_bai_viet=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_bai_viet));
	   }
}


?>