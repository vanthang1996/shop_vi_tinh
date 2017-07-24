<!-- brands -->
{if null!==$cung_loais}
	<div class="w3ls_w3l_banner_nav_right_grid w3ls_w3l_banner_nav_right_grid_popular">
		<div class="container">
			<h3>Sản phẩm cùng loại</h3>
          
				<div class="w3ls_w3l_banner_nav_right_grid1">
				<!--	<h6>food</h6> -->
                  {foreach  $cung_loais  as $cl}
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid cart_items">
							<div class="agile_top_brand_left_grid_pos">
								<img src="public/layout/images/offer.png" alt=" " class="img-responsive" />
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php?ma_san_pham={$cl->ma_san_pham}" class="product-image" ><img src="public/layout/images/{$cl->hinh}" alt="{$cl->ten_san_pham}" class="img-responsive" /></a>
											<p>{$cl->ten_san_pham}</p>
											<h4>{number_format($cl->don_gia)}VNĐ </h4>
										</div>
										<div class="snipcart-details">
											<!--<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{$cl->ten_san_pham}" />
													<input type="hidden" name="amount" value="{$cl->don_gia}" />
													<input type="hidden" name="discount_amount" value="0" />
													<input type="hidden" name="currency_code" value="VND" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
												</fieldset>
											</form>-->
                                            <form class="form-item">
                      <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                      <input name="product_code" type="hidden" value="{$cl->ma_san_pham }">
                       <input type="submit" name="submit" value="Thêm vào giỏ" class="add-to-cart button" />
                    </form>
										</div>
									</div>
								</figure>
							</div>
						</div>
						</div>
					</div>
					{/foreach}	
					<div class="clearfix"> </div>
				</div>
			 <div style="clear:both; text-align:center">{if isset($lst)} {$lst} {/if}</div>  
		</div>
	</div>
 {/if}   
<!-- //brands -->