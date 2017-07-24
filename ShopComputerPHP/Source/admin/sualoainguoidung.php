<?php
@session_start();
include("controllers/c_loai_nguoi_dung.php");
$c_loai_nguoi_dung = new C_loai_nguoi_dung();
$c_loai_nguoi_dung->Sua_loai_nguoi_dung();
?>