<?php
@session_start();
include("controllers/c_nguoi_dung.php");
$c_nguoi_dung = new C_nguoi_dung();
$c_nguoi_dung->Them_nguoi_dung();
?>