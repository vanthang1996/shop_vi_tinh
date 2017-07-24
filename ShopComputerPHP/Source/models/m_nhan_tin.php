<?php 
include_once("database.php");
class M_nhan_tin extends database{
	  function Them_nhan_tin($email){
		   if(!Kiem_tra_email_nhan_tin($email)){
		  $sql = "insert into nhan_tin  values(?,?)";
		  $this->setQuery($sql);
		   $this->execute(array(NULL,$email));
		  return  $this->getLastId();}
	  }
	  function Kiem_tra_email_nhan_tin($email){
		   $sql  = "select *  from nhan_tin where email=?" ; 
		   $this->setQuery($sql);
	 	   return (count($this->loadRow(array($email)))>0)?true :false;
	  }
	  
		
}


?>