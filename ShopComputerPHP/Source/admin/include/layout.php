<?php include("head.php") ?>
<div id="body-wrapper">
<!-- Wrapper for the radial gradient background -->
<div id="sidebar" class="print">
  <div id="sidebar-wrapper"> <!-- Sidebar with logo and menu --> 
    <?php include("logo_profile.php") ?>			
    <?php include("nav.php") ?>
    <?php include("messages.php") ?>
  </div>
</div>
<!-- End #sidebar -->
<div id="main-content">
<!-- Main Content Section with everything -->
<?php //include ("noScript.php") ?> 
<!-- Page Head -->
<div class="print"> 
<?php include ("pageHead.php") ?>
<div class="clear"></div> <!-- End .clear --> 
</div>
<!-- End Page Head --> 

<!-- Content --> 
<?php include("content.php") ?>
<?php //include ("content_left.php") ?>
<?php //include("content_right.php") ?> 
<!-- end Content -->
<div class="clear"></div>
<!-- Start Notifications --> 
<?php //include ("notification.php") ?> 
<!-- End Notifications --> 
<div class="print">
<?php include("footer.php") ?> 
</div>