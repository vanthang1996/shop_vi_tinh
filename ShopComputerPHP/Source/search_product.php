<?php
$keyWord = $_POST["keyWord"];
include("models/m_products.php");
$m_products = new M_products();
$san_phams = $m_products->tim_kiem_san_pham_theo_ten($keyWord);
if(count($san_phams>0)){
	foreach ( $san_phams as $san_pham){
		?>
		
		<option value="<?= $san_pham->ten_san_pham?>"><?= $san_pham->ma_san_pham?></option>
		
		<?php }} ?>