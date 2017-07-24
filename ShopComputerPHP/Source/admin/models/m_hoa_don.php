<?php
require_once('database.php');
class M_hoa_don extends database{
	public function thong_ke_hoa_don(){
	$sql="SELECT concat(Month(ngay_hd),'-',Year(ngay_hd)) as ThangNam,sum(tri_gia) as tong FROM hoa_don group by Month(ngay_hd),Year(ngay_hd) order by Year(ngay_hd),Month(ngay_hd)";
	//$sql="SELECT * from hoa_don";
		$this->setQuery($sql);
        return $this->loadAllRows();
	}
	public function doc_hoa_don_theo_maHD($maHD){
		
	}
	
	
	 public function Xoa_hoa_don($so_hoa_don)
	   {
		   $sql="delete from hoa_don where so_hoa_don=?";
		   $this->setQuery($sql);
		   return $this->execute(array($so_hoa_don));
	   }
	   
	   
	    public function Xoa_chi_tiet_hoa_don($stt)
	   {
		   $sql="delete from ct_hoa_don where stt=?";
		   $this->setQuery($sql);
		   return $this->execute(array($stt));
	   }
	   
	    public function dem_hoa_don_dang_xu_ly(){
		$sql ="select count(*) as count from hoa_don where trang_thai=0";
		$this->setQuery($sql);
		return $this->loadRow();
	
}
}
//$m= new M_hoa_don();
//$arr=$m->thong_ke_hoa_don();
//print_r($arr);

?>