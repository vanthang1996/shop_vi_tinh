<!-- top-brands -->
<div id="banchay"></div>
<div class="top-brands" >

  <div class="container" >
    <h3>Sản phẩm bán chạy</h3>
    <div class="agile_top_brands_grids"> {foreach  $ban_chays  as $bc}
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid cart_items">
            <div class="tag"><!--<img src="public/layout/images/tag.png" alt=" " class="img-responsive" />--></div>
            <div class="agile_top_brand_left_grid1">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="single.php?ma_san_pham={$bc->ma_san_pham}"  class="product-image" ><img title="{$bc->ten_san_pham}" alt="{$bc->ten_san_pham}" src="public/layout/images/{$bc->hinh}" /></a>
                    <p>{$bc->ten_san_pham}</p>
                    <h4>{number_format($bc->don_gia)}VNĐ </h4>
                  </div>
                  <div class="snipcart-details top_brand_home_details">
                    <!--<form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="{$bc->ten_san_pham}" />
                        <input type="hidden" name="amount" value="{$bc->don_gia}" />
                        <input type="hidden" name="discount_amount" value="0" />
                        <input type="hidden" name="currency_code" value="VND" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                      </fieldset>
                    </form>-->
                    <form class="form-item">
                      <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                      <input name="product_code" type="hidden" value="{$bc->ma_san_pham }">
                       <input type="submit" name="submit" class="add-to-cart button" value="Thêm vào giỏ"  />
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
    <div style="float:right;margin-top:10px;padding-right:20px"><h4><u><a href="products.php?ban_chay=true" style="padding-top:15px;">Xem thêm ...</a></u></h4></div>
  </div>
</div>
<!-- //top-brands -->
<div id="moi"></div>
<div class="top-brands" id="moi">

  <div class="container" >
    <h3>Sản phẩm mới</h3>
    <div class="agile_top_brands_grids"> {foreach  $mois  as $moi}
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid cart_items">
            <div class="tag"><!--<img src="public/layout/images/offer.png" alt=" " class="img-responsive" />--></div>
            <div class="agile_top_brand_left_grid1">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="single.php?ma_san_pham={$moi->ma_san_pham}" class="product-image"><img title="{$moi->ten_san_pham}" alt="{$moi->ten_san_pham}" src="public/layout/images/{$moi->hinh}" /></a>
                    <p>{$moi->ten_san_pham}</p>
                    <h4>{number_format($moi->don_gia)}VNĐ </h4>
                  </div>
                  <div class="snipcart-details top_brand_home_details">
                    <!--<form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="{$moi->ten_san_pham}" />
                        <input type="hidden" name="amount" value="{$moi->don_gia}" />
                        <input type="hidden" name="discount_amount" value="0" />
                        <input type="hidden" name="currency_code" value="VND" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="hidden" name="submit" value="Thêm vào giỏ" class="button" />
                      </fieldset>
                    </form>-->
                     <form class="form-item">
                    <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                    <input name="product_code" type="hidden" value="{$moi->ma_san_pham }">
                     <input type="submit" name="submit" value="Thêm vào giỏ" class="button add-to-cart" />
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
    <div style="float:right;margin-top:10px;padding-right:20px"><h4><u><a href="products.php?moi=true" style="padding-top:15px;">Xem thêm ...</a></u></h4></div>
  </div>
</div>
<!-- //top-brands --> 
<!-- top-brands -->
<div  id="yeuthich"></div>
<div class="top-brands"  id="yeuthich">

  <div class="container">
    <h3>Sản phẩm yêu thích</h3>
    <div class="agile_top_brands_grids"> {foreach  $yeu_thichs  as $yeu_thich}
      <div class="col-md-3 top_brand_left">
        <div class="hover14 column">
          <div class="agile_top_brand_left_grid cart_items">
            <div class="tag"><!--<img src="public/layout/images/tag.png" alt=" " class="img-responsive" />--></div>
            <div class="agile_top_brand_left_grid1">
              <figure>
                <div class="snipcart-item block" >
                  <div class="snipcart-thumb"> <a href="single.php?ma_san_pham={$yeu_thich->ma_san_pham}" class="product-image"><img title="{$yeu_thich->ten_san_pham}" alt="{$yeu_thich->ten_san_pham}" src="public/layout/images/{$yeu_thich->hinh}" /></a>
                    <p>{$yeu_thich->ten_san_pham}</p>
                    <h4>{number_format($yeu_thich->don_gia)}VNĐ </h4>
                  </div>
                  <div class="snipcart-details top_brand_home_details">
                   <!-- <form action="#" method="post">
                      <fieldset>
                        <input type="hidden" name="cmd" value="_cart" />
                        <input type="hidden" name="add" value="1" />
                        <input type="hidden" name="business" value=" " />
                        <input type="hidden" name="item_name" value="{$yeu_thich->ten_san_pham}" />
                        <input type="hidden" name="amount" value="{$yeu_thich->don_gia}" />
                        <input type="hidden" name="discount_amount" value="0" />
                        <input type="hidden" name="currency_code" value="VND" />
                        <input type="hidden" name="return" value=" " />
                        <input type="hidden" name="cancel_return" value=" " />
                        <input type="submit" name="submit" value="Thêm vào giỏ" class="button" />
                      </fieldset>
                    </form>-->
                    <form class="form-item">
                      <input type="hidden" name="product_qty" min="1" value="1" style="width:30px" />
                      <input name="product_code" type="hidden" value="{$yeu_thich->ma_san_pham }">
                        <input type="submit" name="submit" value="Thêm vào giỏ" class="button add-to-cart" />
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
    <div style="float:right;margin-top:10px;padding-right:20px"><h4><u><a href="products.php?yeu_thich=true" style="padding-top:15px;">Xem thêm ...</a></u></h4></div>
  </div>
</div>
<!-- //top-brands --> 