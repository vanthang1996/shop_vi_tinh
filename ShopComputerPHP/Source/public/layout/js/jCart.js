// JavaScript Document
$(document).ready(function(){	
		$('.add-to-cart').click(function() {
			
   var cart = $('.cart-box');
   var imgtofly = $(this).parents('div.cart_items').find('a.product-image img').eq(0);
    if (imgtofly) {
        var imgclone = imgtofly.clone()
            .offset({ top:imgtofly.offset().top, left:imgtofly.offset().left })
            .css({'opacity':'0.7', 'position':'absolute', 'height':'150px', 'width':'150px', 'z-index':'1000'})
            .appendTo($('body'))
            .animate({
                'top':cart.offset().top + 10,
                'left':cart.offset().left + 30,
                'width':55,
                'height':55
            }, 1500, 'easeInElastic');
        imgclone.animate({'width':0, 'height':0}, function(){ $(this).detach() });
    }
  
});
		
		$(".form-item").submit(function(e){
			
			
			//
			  
			/*var cart = $(".cart-box");
			
			  var imgtofly = $(this).find(".add-to-cart").parent('div.cart_items').find('a.product-image img').eq(0);
			   if (imgtofly) {
        var imgclone = imgtofly.clone()
            .offset(
			{ top:imgtofly.offset().top, left:imgtofly.offset().left }
			)
            .css(
			{'opacity':'0.7', 'position':'absolute', 'height':'150px', 'width':'150px', 'z-index':'1000'}
			)
            .appendTo(
			$('body')
			)
            .animate({
                'top':cart.offset().top + 10,
                'left':cart.offset().left + 30,
                'width':55,
                'height':55
            }, 1500, 'easeInElastic');
        imgclone.animate({'width':0, 'height':0}, function(){ $(this).detach() });
    }*/
			//
			var form_data = $(this).serialize();
			var button_content = $(this).find('input.button');
			button_content.val('Đang thêm...'); //Loading button text 
			//window.location = "cart_process.php?product_qty=1&product_code=33";
			$.ajax({ //make ajax request to cart_process.php
				url: "cart_process.php",
				type: "POST",
				dataType:"json", //expect json value from server
				data: form_data
			}).done(function(data){ //on Ajax success
			
				setTimeout(function(){
						$("#cart-info").html(data.items); //total items in cart-info element
					button_content.val('Thêm vào giỏ') //reset button text to original text
					
					},1500);
				
				//alert("Thêm sản phẩm vào giỏ hàng thành công !"); //alert user
				if($(".shopping-cart-box").css("display") == "block"){ //if cart box is still visible
					$(".cart-box").trigger( "click" ); //trigger click to update the cart box.
				}
			})
			e.preventDefault();
			return false;
		});//end submit in Cart

	
	//Show Items in Cart
	$( ".cart-box").click(function(e) { //when user clicks on cart box
		e.preventDefault(); 
		$(".shopping-cart-box").fadeIn(1000); //display cart box
		$("#shopping-cart-results").html('<img src="public/layout/images/ajax-loader.gif">'); //show loading image
		$("#shopping-cart-results" ).load( "cart_process.php", {"load_cart":"1"}); //Make ajax request using jQuery Load() & update results
	}); //end Show Items in Cart
	
	//Close Cart
	$( ".close-shopping-cart-box").click(function(e){ //user click on cart box close link
		e.preventDefault(); 
		$(".shopping-cart-box").fadeOut(1000); //close cart-box
		return false;
	}); //end Close Cart
	
	//Remove items from list cart
	$("#shopping-cart-results").on('click', 'a.remove-item', function(e) {
		e.preventDefault(); 
		var pcode = $(this).attr("data-code"); //get product code
		$(this).parent().fadeOut(); //remove item element from box
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ //get Item count from Server
			$("#cart-info").html(data.items); //update Item count in cart-info
			$(".cart-box").trigger( "click" ); //trigger click on cart-box to update the items list
		});
		return false;
	}); //end Remove items from list cart
	
	//Remove items from view cart
	$(".shopping-cart").on('click', 'a.remove-item', function() {
		
		var pcode = $(this).attr("data-code"); //get product code
		$.getJSON( "cart_process.php", {"remove_code":pcode} , function(data){ 
			window.location="gio_hang.php"; //location url
		});
	}); // end Remove items from view cart
	
	// Change product_qty from view cart
	$(".product_qty").on('change',function(){
		
		
		var pval = $(this).val(); //get product value
		if(Number(pval)<=0)
		{
			alert("Số lượng sản phẩm > 0");
			window.location="gio_hang.php"; //location url
			return false;
				
		}
		var pcode = $(this).attr('data_code'); //get product id
		
		$.getJSON( "cart_process.php", {"update_code":pcode,"value":pval} , function(data){ 
		
			window.location="gio_hang.php"; //location url
			
		});
		
		
	}); // end Change product_qty from view cart
	// logout
	
	$(".logout").click(function(){
			$.ajax({
				url : "logout_process.php",
				success: function(data){
					$("ul.login").removeClass("login");
					$("p.out").css("display","none");
				}
				});
	});
	
	
	//end logout
	
	//search product
	$("#search_product").keyup(function(){
		 var val = $(this).val();
	
		 if(val!=""){
			 $.ajax({
				 url:"search_product.php",
				 data:{keyWord : val},
				 type:"POST",
				 success: function(data){
					 /// do some thing
					 console.log(data);
					 $("#search").html(data);
				 },
				 statusCode: {
					 404: function(){
						 console.log("Lổi");
					 },
					 404: function(){
						 console.log("Lổi");
					 }
				 }
				 
				 
				 });
 
		}
		
	});
	//search product end
	
	// send mail
	
	$(".send-mail").submit(function(e){
			var form_data = $(this).serialize();
			$.ajax({
				 url :  "send_mail.php",
				type : "POST",
				data: form_data,success: function(data){
					 if(data!="0"){
						$(this).find("input[name='Email']").val("");
						 alert("Bạn đăng ký thành công!");
					 }else{
						 alert("Bạn đăng ký thất bại!" + data);
						 }
				}
				 
				 });
			e.preventDefault();
			return false;
		});
	// send mail ends
	
	
});// end ready