<?php
@session_start();
include("controllers/c_nguoi_dung.php");
$c_nguoi_dung = new C_nguoi_dung();
$c_nguoi_dung->Sua_nguoi_dung();
?>