<?php
ini_set("display_errors",1);
require_once("database.php");
class M_nguoi_dung extends database {
	function doc_nguoi_dung(){
		$sql ="select * from nguoi_dung";
		$this->setQuery($sql);
		return $this->loadAllRows();
	}
	
	function Doc_nguoi_dung2($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where ho_ten like '% $tim%' or ho_ten like '%$tim %' or ho_ten like '%$tim%'";
		}
		
		$sql = "Select * from nguoi_dung ". $dk ." order by active desc,ho_ten ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}

        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	function Doc_loai_nguoi_dung($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_loai_nguoi_dung like '% $tim%' or ten_loai_nguoi_dung like '%$tim %' or ten_loai_nguoi_dung like '%$tim%'";
		}
		
		$sql = "Select * from loai_nguoi_dung ". $dk ." order by ten_loai_nguoi_dung ";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	
	function Doc_ngDung_theo_tenDn_pass($ten,$mk)
	{
		$sql=" select * from nguoi_dung where ten_dang_nhap=? and mat_khau=?";
		
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}
	function Doc_admin($ten,$mk)
	{
		$sql=" select * from nguoi_dung where ten_dang_nhap=? and mat_khau=? ";
		
		$this->setQuery($sql);
		return $this->loadRow(array($ten,md5($mk)));	
	}
	function  Doc_loai_nguoi_dung_theo_ma_loai_nguoi_dung($ma_loai_nguoi_dung){
		
		$sql = "Select * from loai_nguoi_dung where ma_loai_nguoi_dung=?";
		
        $this->setQuery($sql);
        return $this->loadRow(array($ma_loai_nguoi_dung));
	}
	  function  Sua_nguoi_dung($ma_nguoi_dung,$ma_loai_nguoi_dung,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$active){
		  $sql ="UPDATE `nguoi_dung` SET `ma_loai_nguoi_dung`=?,`ho_ten`=?,`ten_dang_nhap`=?,`mat_khau`=?,`email`=?,`active`=? WHERE ma_nguoi_dung=?";
		  $this->setQuery($sql);
		  return $this->execute(array($ma_loai_nguoi_dung,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$active,$ma_nguoi_dung));
	  }
	  
	  function  Doc_nguoi_dung_theo_ma_nguoi_dung($ma_nguoi_dung){
		 	$sql = "Select * from nguoi_dung where ma_nguoi_dung=?";
		
        $this->setQuery($sql);
        return $this->loadRow(array($ma_nguoi_dung));
	 }
	
	  function Sua_loai_nguoi_dung($ma_loai_nguoi_dung,$ten_loai_nguoi_dung){
		  $sql = "Update  loai_nguoi_dung  set ten_loai_nguoi_dung=? where ma_loai_nguoi_dung=?";
		  $this->setQuery($sql);
		  return  $this->execute(array($ten_loai_nguoi_dung,$ma_loai_nguoi_dung));
	  }
	  
	   public function Xoa_nguoi_dung($ma_nguoi_dung)
	   {
		   $sql="delete from nguoi_dung where ma_nguoi_dung=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_nguoi_dung));
	   }
	    public function Xoa_loai_nguoi_dung($ma_loai_nguoi_dung)
	   {
		   $sql="delete from nguoi_dung where ma_loai_nguoi_dung=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_loai_nguoi_dung));
	   }
	   public function them_loai_nguoi_dung($ten_loai_nguoi_dung){
	   		$sql ="insert into loai_nguoi_dung values (null,?)";
			$this->setQuery($sql);
			$this->execute(array($ten_loai_nguoi_dung));
	   
	   }
	   public function Them_nguoi_dung($ma_loai_nguoi_dung,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky,$ative){
	   		$sql ="insert into nguoi_dung values (null,?,?,?,?,?,?,null,?)";
			$this->setQuery($sql);
			return $this->execute(array($ma_loai_nguoi_dung,$ho_ten,$ten_dang_nhap,$mat_khau,$email,$ngay_dang_ky,$ative));
	   	
	   
	   }
	    
	 
	  
}



?>