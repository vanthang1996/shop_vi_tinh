<?php
@session_start();
?>
<a href="quantri.php"><img style="margin-left:54px;" id="logo" src="public/layout/resources/images/admin.png" alt="logo T3H" /></a> 
<!-- Sidebar Profile links -->
<div id="profile-links"> Chào, <a href="#" title="Edit your profile">
<?php echo $_SESSION["fullname"] ?>
</a><br />
<?= $_SESSION["loai_nguoi_dung"]?>
  <br />
  <a href="#" title="View the Site">View the Site</a> | 
  <a href="quantri.php?func=exit" title="Sign Out">Sign Out</a> </div>
