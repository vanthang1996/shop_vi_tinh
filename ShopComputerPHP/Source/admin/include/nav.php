<script>
$(function() {
     var pgurl = window.location.href.substr(window.location.href.lastIndexOf("/")+1);
	 var id=null;
	 if (pgurl=="") pgurl="." ;
     $("#main-nav li a").each(function(){
          if($(this).attr("href") == pgurl || $(this).attr("href") == '' )
		  {
			var title = $(this).attr("title");
			id=document.getElementById(title);
			$(this).addClass("current");
			$(id).addClass("current");	
		  }
		  
     })
		
	$(id).click();
	
});

</script>

<ul id="main-nav">
  <!-- Accordion Menu -->
  
  <li> <a href="quantri.php" class="nav-top-item no-submenu"> 
    <!-- Add the class "no-submenu" to menu items with no sub menu  --> 
    Danh mục <span><i class="fa fa-list" aria-hidden="true"></i></span> </a> </li>
  <li> <a href="#" class="nav-top-item" id="baiviet"> Bài viết <span></span></a>
    <ul>
      <li><a href="baiviet.php" title="baiviet">Danh sách bài viết</a></li>
      <li><a href="thembaiviet.php" title="baiviet">Thêm bài viết</a></li>
        <li><a href="loaibaiviet.php" title="baiviet">Danh sách loại bài viết</a></li>
      <li><a href="themloaibaiviet.php" title="baiviet">Thêm loại bài viết</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="hoadon"> Đơn hàng <span><i class="fa fa-truck" aria-hidden="true"></i></span></a>
    <ul>
      <li><a href="donhang.php" title="hoadon">Danh sách đơn hàng</a></li>
    <!--  <li><a href="chitietdonhang.php" title="hoadon">Chi tiết hóa đơn</a></li>-->
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="loaisanpham"> Loại sản phẩm</a>
    <ul>
      <li><a href="loaisanpham.php" title="loaisanpham">Danh sách loại sản phẩm</a></li>
      <li><a href="themloaisanpham.php" title="loaisanpham" >Thêm loại sản phẩm</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="sanpham"> Sản phẩm </a>
    <ul>
      <li><a href="sanpham.php" title="sanpham">Danh sách sản phẩm</a></li>
      <li><a href="themsanpham.php" title="sanpham">Thêm sản phẩm</a></li>
    </ul>
  </li>
 <!-- <li> <a href="#" class="nav-top-item" id="sanpham"> Sản phẩm trả góp <span><i class="fa fa-money" aria-hidden="true"></i></span></a>
    <ul>
      <li><a href="#" title="sanphamtragop">Danh sách sản phẩm trả góp</a></li>
      <li><a href="#" title="sanphamtragop">Thêm sản phẩm trả góp</a></li>
    </ul>
  </li>-->
  <li> <a href="#" class="nav-top-item" id="khachhang"> Khách hàng <span><i class="fa fa-users" aria-hidden="true"></i></span></a>
    <ul>
      <li><a href="khachhang.php" title="khachhang">Danh sách khách hàng</a></li>
      <li><a href="themkhachhang.php" title="khachhang">Thêm khách hàng</a></li>
    </ul>
  </li>
  <li> <a href="#" class="nav-top-item" id="user"> Người dùng <span><i class="fa fa-male" aria-hidden="true"></i></span> </a>
    <ul>
      <li><a href="nguoidung.php" title="user">Danh sách người dùng</a></li>
      <li><a href="themnguoidung.php" title="user">Thêm người dùng</a></li>
      <li><a href="loainguoidung.php" title="user">Danh sách loại người dùng</a></li>
      <li><a href="themloainguoidung.php" title="user">Thêm Loại người dùng</a></li>
    </ul>
  </li>
</ul>
<!-- End #main-nav -->