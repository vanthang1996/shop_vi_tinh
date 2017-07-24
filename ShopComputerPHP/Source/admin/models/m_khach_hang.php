<?php
require_once('database.php');
class M_khach_hang extends database {
	
	function  Doc_khach_hang_theo_ma_khach_hang($ma_khach_hang){
		
		$sql = "Select * from khach_hang where ma_khach_hang=?";
		
        $this->setQuery($sql);
        return $this->loadRow(array($ma_khach_hang));
	}
	function Doc_khach_hang($tim="",$vt=-1,$limit=-1){
		$dk="";
		if($tim!="")
		{
			$dk = "where ten_khach_hang like '% $tim%' or ten_khach_hang like '%$tim %' or ten_khach_hang like '%$tim%'";
		}
		
		$sql = "Select * from khach_hang ". $dk ." order by ten_khach_hang desc";
		if($vt>=0 && $limit>0)
		{
			$sql.=" limit $vt,$limit ";	
		}
		
        $this->setQuery($sql);
        return $this->loadAllRows();
	}
	 function  Sua_khach_hang($ma_khach_hang,$ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email){
		 $sql ="UPDATE `khach_hang` SET `ten_khach_hang`=?,`phai`=?,`ngay_sinh`=?,`dia_chi`=?,`dien_thoai`=?,`email`=? WHERE `ma_khach_hang`=?";
		 $this->setQuery($sql);
		 return  $this->execute(array($ten_khach_hang,$phai,$ngay_sinh,$dia_chi,$dien_thoai,$email,$ma_khach_hang));
	 }
	 function Them_khach_hang( $ten_khach_hang, $mat_khau, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email){
			$sql = "INSERT INTO `khach_hang`(`ma_khach_hang`, `ten_khach_hang`, `mat_khau`, `phai`, `ngay_sinh`, `dia_chi`, `dien_thoai`, `email`) VALUES  (?,?,?,?,?,?,?,?)";
			$this->setQuery($sql);
			$this->execute(array(NULL, $ten_khach_hang, $mat_khau, $phai, $ngay_sinh, $dia_chi, $dien_thoai, $email));
			return $this->getLastId();
			}
	 public function Xoa_khach_hang($ma_khach_hang)
	   {
		   $sql="delete from khach_hang where ma_khach_hang=?";
		   $this->setQuery($sql);
		   return $this->execute(array($ma_khach_hang));
	   }
}


?>