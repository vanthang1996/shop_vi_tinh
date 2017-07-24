<?php
@session_start();
ini_set("display_errors",1);
include("controllers/c_about.php");
$c_about = new  C_about();
$c_about->hien_thi_trang_about();
?>