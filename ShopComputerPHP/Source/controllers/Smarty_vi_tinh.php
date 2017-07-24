<?php
include("smarty/libs/Smarty.class.php");
class Smarty_vi_tinh extends Smarty
{
	function Smarty_vi_tinh()
	{
		parent::__construct();
	//	$this->setCacheDir("smarty/cache/");
		$this->setCompileDir("smarty/templates_c/");
		$this->setConfigDir("smarty/configs/");
		$this->setTemplateDir("smarty/templates/");	
	}
	function Hien_thi_giao_dien($layout)
	{
		$this->display($layout);	
	}
	

}

?>