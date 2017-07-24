<?php	@session_start();
 include_once("models/m_nav.php");
		$m_nav = new M_Nav();
		$navs = $m_nav->hien_thi_super_menu();
		$subs= array();
		
		foreach($navs as $nav){
			$subs[$nav->ma_loai] = $m_nav->hien_thi_super_menu($nav->ma_loai);
		}

?>