<?php
/* Smarty version 3.1.30, created on 2016-12-18 06:00:41
  from "C:\xampp\htdocs\src\LTW-PHP2 - Copy\smarty\templates\mailus\gift.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_585617f945b346_25872514',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f6ec15142664fad7fc5528e9b0391e16b4a9a54' => 
    array (
      0 => 'C:\\xampp\\htdocs\\src\\LTW-PHP2 - Copy\\smarty\\templates\\mailus\\gift.tpl',
      1 => 1481913192,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_585617f945b346_25872514 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!-- map -->

<?php echo '<script'; ?>
 type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"><?php echo '</script'; ?>
>

	<div class="map">
    <?php echo '<script'; ?>
 type="text/javascript">
var gmap = new google.maps.LatLng(10.7626391,106.6798381);
var marker;
function initialize()
{
    var mapProp = {
         center:new google.maps.LatLng(10.7626391,106.6798381),
         zoom:16,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
 
    var map=new google.maps.Map(document.getElementById("googleMap")
    ,mapProp);
 
  var styles = [
    {
      featureType: 'road.arterial',
      elementType: 'all',
      stylers: [
        { hue: '#fff' },
        { saturation: 100 },
        { lightness: -48 },
        { visibility: 'on' }
      ]
    },{
      featureType: 'road',
      elementType: 'all',
      stylers: [
 
      ]
    },
    {
        featureType: 'water',
        elementType: 'geometry.fill',
        stylers: [
            { color: '#adc9b8' }
        ]
    },{
        featureType: 'landscape.natural',
        elementType: 'all',
        stylers: [
            { hue: '#809f80' },
            { lightness: -35 }
        ]
    }
  ];
 
  var styledMapType = new google.maps.StyledMapType(styles);
  map.mapTypes.set('Styled', styledMapType);
 
  marker = new google.maps.Marker({
    map:map,
    draggable:true,
    animation: google.maps.Animation.DROP,
    position: gmap
  });
  google.maps.event.addListener(marker, 'click', toggleBounce);
}
 
function toggleBounce() {
 
  if (marker.getAnimation() !== null) {
    marker.setAnimation(null);
  } else {
    marker.setAnimation(google.maps.Animation.BOUNCE);
  }
}
 
google.maps.event.addDomListener(window, 'load', initialize);
<?php echo '</script'; ?>
>
<div id="googleMap" style="width: 100%;
    height: 300px;">Google Map</div>
		<!--<iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d96748.15352429623!2d-74.25419879353115!3d40.731667701988506!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sshopping+mall+in+New+York%2C+NY%2C+United+States!5e0!3m2!1sen!2sin!4v1467205237951" style="border:0"></iframe>-->

	</div>
<!-- //map -->
<?php }
}
