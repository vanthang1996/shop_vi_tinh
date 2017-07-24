<?php

include("models/m_hoa_don.php");
$dh = new M_hoa_don();
$sl =$dh->dem_hoa_don_dang_xu_ly();

echo ($sl->count >0)?"+".$sl->count:"0";
?>