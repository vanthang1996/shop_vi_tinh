<!-- header -->
<!--<script>
$(document).ready(function() {

var data = {}; 
$("#search option").each(function(i,el) {  
   data[$(el).data("value")] = $(el).val();
});
// `data` : object of `data-value` : `value`
console.log(data, $("#search option").val());


    $('#search_submit').click(function()
    {
        var value = $('#search_product').val();
        alert($('#search [value="' + value + '"]').data('value'));
    });
});
</script>-->

<div class="agileits_header">
  <div class="w3l_offers"> <a href="products.php">Khuyễn Mãi HOT!</a> </div>
  <div class="w3l_search">
    <form action="single.php" method="post">
      {literal}
      <input type="text" name="Product" list="search" id="search_product" value="Tìm kiếm..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Tìm kiếm...';}" required>
      <datalist id="search"  name="search">
      </datalist>
      {/literal}
      <input type="submit" name="search_submit" id="search_submit" value=" ">
    </form>
  </div>
  <div class="product_list_header"> 
    <!-- Cart item-->
    <form class="minicart-empty">
      <div style="width:130px;float:right;position:relative;padding-left:9em"> <a href="#" class="cart-box" id="cart-info" title="View Cart"> {if isset($smarty.session.products) }
        {$number=0}
        {foreach $smarty.session.products  as $pr}
        {$number=$number+$pr["product_qty"]}
        {/foreach}
        {$number}
        {else}
        {0}
        {/if} </a>
        <div class="shopping-cart-box"> <a href="#" class="close-shopping-cart-box" >Close</a>
          <h4>Giỏ hàng của bạn</h4>
          <div id="shopping-cart-results"></div>
        </div>
      </div>
    </form>
    <div style="clear:both"></div>
    <!-- End Cart item--> 
    
  </div>
  <div class="w3l_header_right">
    <ul class="login">
      <li class="dropdown profile_details_drop"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
        <div class="mega-dropdown-menu">
          <div class="w3ls_vegetables">
            <ul class="dropdown-menu drp-mnu">
              <li><a href="login.php">Đăng nhập</a></li>
              <li><a href="login.php">Đăng ký</a></li>
            </ul>
          </div>
        </div>
      </li>
    </ul>
    {if isset($smarty.session.khach_hang)}
    <style>
  .login{
  	display:none;
  }
  </style>
    <p style="display:block;padding: 13px 8px 9px 0px; font-size:12px; color:white;" class="out"> Chào bạn! {$smarty.session.khach_hang->ten_khach_hang} | <a  href="javascript:void(0)"  class="logout">Thoát</a></p>
    {/if} </div>
  <div class="w3l_header_right1">
    <h2><a href="mail.php">Liên hệ</a></h2>
  </div>
  <div class="clearfix"> </div>
</div>
{include file="script-sticky-nav.tpl"}
<div class="logo_products">
  <div class="container">
    <div class="w3ls_logo_products_left">
      <h1><a href="index.php"><span>Technology</span> Store</a></h1>
    </div>
    <div class="w3ls_logo_products_left1">
      <ul class="special_items">
        <li><a href=".">Sự kiện</a><i>/</i></li>
        <li><a href="about.php">Thông tin</a><i>/</i></li>
        <li><a href="products.php">Nổi bật</a><i>/</i></li>
        <li><a href="bai_viet.php">Bài viết</a></li>
      </ul>
    </div>
    <div class="w3ls_logo_products_left1">
      <ul class="phone_email">
        <li><i class="fa fa-phone" aria-hidden="true"></i>(+84)120 394 7318</li>
        <li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href="mailto:store@grocery.com">vanthang1996</a></li>
      </ul>
    </div>
    <div class="clearfix"> </div>
  </div>
</div>
<!-- //header --> 
