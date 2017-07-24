<section class="slider">
      <div class="flexslider">
        <ul class="slides">
          <li>
            <div class="w3l_banner_nav_right_banner">
             
            </div>
          </li>
          <li>
            <div class="w3l_banner_nav_right_banner1">
             
            </div>
          </li>
          <li>
            <div class="w3l_banner_nav_right_banner2">
              
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!-- flexSlider -->
    <link rel="stylesheet" href="public/layout/css/flexslider.css" type="text/css" media="screen" property="" />
    <script defer src="public/layout/js/jquery.flexslider.js"></script> 
    <script type="text/javascript">
				$(window).load(function(){
				  $('.flexslider').flexslider({
					animation: "slide",
					start: function(slider){
					  $('body').removeClass('loading');
					}
				  });
				});
			  </script> 
    <!-- //flexSlider --> 
    <!-- top-brands -->
