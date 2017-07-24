{if null!=$san_pham}

			<div class="agileinfo_single">
				<h5>{$san_pham->ten_san_pham}</h5>
				<div class="col-md-4 agileinfo_single_left">
					<img id="example" src="public/layout/images/{$san_pham->hinh}" alt="{$san_pham->ten_san_pham}" class="img-responsive" width="242"  height="242" />
				</div>
				<div class="col-md-8 agileinfo_single_right">
					<div class="rating1">
						<span class="starRating">
							<input id="rating5" type="radio" name="rating" value="5"  checked="checked">
							<label for="rating5">5</label>
							<input id="rating4" type="radio" name="rating" value="4">
							<label for="rating4">4</label>
							<input id="rating3" type="radio" name="rating" value="3" >
							<label for="rating3">3</label>
							<input id="rating2" type="radio" name="rating" value="2">
							<label for="rating2">2</label>
							<input id="rating1" type="radio" name="rating" value="1">
							<label for="rating1">1</label>
						</span>
					</div>
					<div class="w3agile_description">
						<h4>Mô tả :</h4>
						<p>{$san_pham->mo_ta_chi_tiet}</p>
					</div>
					<div class="snipcart-item block">
						<div class="snipcart-thumb agileinfo_single_right_snipcart">
							<h4>{number_format($san_pham->don_gia)} </h4>
						</div>
						<div class="snipcart-details agileinfo_single_right_details">
							<!--<form action="#" method="post">
								<fieldset>
									<input type="hidden" name="cmd" value="_cart" />
									<input type="hidden" name="add" value="1" />
									<input type="hidden" name="business" value=" " />
									<input type="hidden" name="item_name" value="{$san_pham->ten_san_pham}" />
									<input type="hidden" name="amount" value="{$san_pham->don_gia}" />
									<input type="hidden" name="discount_amount" value="0" />
									<input type="hidden" name="currency_code" value="VND" />
									<input type="hidden" name="return" value=" " />
									<input type="hidden" name="cancel_return" value=" " />
									<input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
								</fieldset>
							</form>-->
                            <form class="form-item">
                      <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                      <input name="product_code" type="hidden" value="{$san_pham->ma_san_pham }">
                       <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                    </form>
						</div>
					</div>
				</div>
                
				<div class="clearfix"> </div>
                <div id="tabs">
  <ul>
    <li><a href="#tabs-1">Thông tin chi tiết</a></li>
    <li><a href="#tabs-2">Bình luận </a></li>
  </ul>
  <div id="tabs-1">
    <p>{$san_pham->mo_ta_chi_tiet}</p>
  </div>
  <div id="tabs-2">
    <p><div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<div class="fb-comments" data-href="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fvanthang1996%2Fposts%2F1312559012129544" data-width="100%" data-numposts="10"></div>
</p>
  </div>
  
</div>
			</div>
            

{/if}