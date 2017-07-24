
<h1 style="text-align:center">Đơn hàng của bạn <?php echo $_SESSION["ten_khach_hang"] ?></h1>
<center>(cập nhật lại số lượng sản phẩm hay xóa sản phẩm)</center>
{if  isset($smarty.session.products) && count($smarty.session.products)>0}
{$cart_box}
{else}
{$null}
{header("refresh:3;url=index.php")}
{/if}
