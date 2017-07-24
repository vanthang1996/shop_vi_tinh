
			<div class="w3ls_w3l_banner_nav_right_grid">
				<h3>{$ten_loai}</h3>
                
				<div class="w3ls_w3l_banner_nav_right_grid1">
					<h6></h6>
                    {foreach $products as $product}
					<div class="col-md-3 w3ls_w3l_banner_left">
						<div class="hover14 column">
						<div class="agile_top_brand_left_grid w3l_agile_top_brand_left_grid cart_items">
							<div class="agile_top_brand_left_grid_pos">
								<!--<img src="public/layout/images/offer.png" alt=" " class="img-responsive" />-->
							</div>
							<div class="agile_top_brand_left_grid1">
								<figure>
									<div class="snipcart-item block">
										<div class="snipcart-thumb">
											<a href="single.php?ma_san_pham={$product->ma_san_pham}"  class="product-image"><img src="public/layout/images/{$product->hinh}" alt="{$product->ten_san_pham}" class="img-responsive" /></a>
											<p>{$product->ten_san_pham}</p>
											<h4>{number_format($product->don_gia)} đ <!--<span>$5.00</span>--></h4>
										</div>
										<div class="snipcart-details">
											<!--<form action="#" method="post">
												<fieldset>
													<input type="hidden" name="cmd" value="_cart" />
													<input type="hidden" name="add" value="1" />
													<input type="hidden" name="business" value=" " />
													<input type="hidden" name="item_name" value="{$product->ten_san_pham}" />
													<input type="hidden" name="amount" value="{$product->don_gia}" />
													<input type="hidden" name="discount_amount" value="0.00" />
													<input type="hidden" name="currency_code" value="VND" />
													<input type="hidden" name="return" value=" " />
													<input type="hidden" name="cancel_return" value=" " />
													<input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
												</fieldset>
											</form>-->
                                            <form class="form-item">
                      <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                      <input name="product_code" type="hidden" value="{$product->ma_san_pham }">
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