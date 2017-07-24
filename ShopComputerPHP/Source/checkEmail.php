<?php 
$email =   $_POST["email"];
include("models/m_khach_hang.php");
$m_khach_hang= new M_khach_hang();
$check  = $m_khach_hang->Kiem_tra_email($email);
if($check){
	echo "1";
}else{
	echo "0";
}


?>