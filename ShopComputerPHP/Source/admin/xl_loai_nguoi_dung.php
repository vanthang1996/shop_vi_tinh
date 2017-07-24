<?php
include("models/m_nguoi_dung.php");
$m_nguoi_dung=new M_nguoi_dung();
$arr =$m_nguoi_dung->Doc_loai_nguoi_dung();
	foreach($arr as $item){
		echo "<option value=".$item->ma_loai_nguoi_dung.">".$item->ten_loai_nguoi_dung."</option>";
		//echo $item->ma_loai_nguoi_dung;
	}

?>