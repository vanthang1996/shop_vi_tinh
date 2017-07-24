<?php
@session_start();
include("controllers/c_don_hang.php");
$c_don_hang = new C_don_hang();
$c_don_hang->Chi_tiet_don_hang();
?>