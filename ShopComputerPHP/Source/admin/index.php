<?php
@session_start();
$err="";
if(isset($_SESSION["error"]))
{
	$err=$_SESSION["error"];
	$_SESSION["error"]="";
}
 if(isset($_SESSION['fullname'])){
	 header("location:quantri.php");
 }
?>
<!doctype html>
<html>
	 <head>
	 <meta charset="utf-8">
	 <title>Admin Login</title>
	 <link rel="stylesheet" type="text/css" href="public/layout/resources/css/login_admin.css">
	 <script src="public/layout/resources/scripts/jquery-3.1.1.min.js"></script>
	 <link href='//fonts.googleapis.com/css?family=Open+Sans'
	rel='stylesheet' type='text/css'>
	 <meta name="viewport" content="width=device-width, initial-scale=1" />
	 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	 <meta name="keywords"
	content="Simple Login Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	 <script type="application/x-javascript">
	
	
	
	
	 addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	 </head>
	 <body>
<h1>ADMIN PAGE</h1>
<div class="container w3">
       <h2>Login Now</h2>
       <form action="quantri.php" method="post" id="login">
    <div class="username"> <span class="username">Username:</span>
           <input type="text"
					name="name" class="name" id="username" placeholder=""
					required="required">
           <div class="clear"></div>
         </div>
    <div class="password-agileits"> <span class="username">Password:</span>
           <input type="password"
					name="password" class="password" id="password" required>
         </div>
    <div class="rem-for-agile">
           <input type="checkbox" name="remember" class="remember"
					id="remember">
           Remember me<br>
           <!--  <a href="#">Forgot Password</a><br>--> 
         </div>
    <div class="login-w3">
           <input type="submit" class="login" value="Login" name="login">
         </div>
         <div class="rem-for-agile" style="color:#F50E12;size:10px;margin-top:20px;margin-left:0px"><?php echo $err ?></div>
    <div class="clear"></div>
    <!--<script type="text/javascript">
		
	
            $(document).ready(function() {

        var remember = $.cookie('remember');
        if (remember == 'true') 
        {
            var username = $.cookie('username');
            //var password = $.cookie('password');
            // autofill the fields
            $('#username').val(username);
           // $('#password').val(password);
        }


    $("#login").submit(function() {
        if ($('#remember').is(':checked')) {
            var username = $('#username').val();
           // var password = $('#password').val();

            // set cookies to expire in 14 days
            $.cookie('username', username, { expires: 1 });
            //$.cookie('password', password, { expires: 14 });
            $.cookie('remember', true, { expires: 1 });                
        }
        else
        {
            // reset cookies
            $.cookie('username', null);
           // $.cookie('password', null);
            $.cookie('remember', null);
        }
  });
});
		</script>-->
  </form>
     </div>
</body>
</html>