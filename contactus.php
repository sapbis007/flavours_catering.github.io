<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Contact Us</title>
<script>
if(screen.width<1500)
	document.write('<link rel="stylesheet" href="style/style3.css"/>');
else
	document.write('<link rel="stylesheet" href="style/style2.css"/>');
</script>
</head>

<body>
<div class="wrap">
	<header>
    	<img src="img/logo.png"/>
		<h1><?php include("header.php"); ?></h1>
	</header>
   
    <nav>
    	<?php include("navigation.php"); ?>
    </nav>
    
     <div class="contactus_body" align="center">
    	<h2>Contact Us</h2>
        <form method="get">
        <table class="form">
        <tr><td><label>Your Name :</label></td></tr>
        <tr><td><input type="text" name="your_name" id="your_name" class="your_name" /></td></tr>
        <tr><td><label>Email_Id :</label></td></tr>
        <tr><td><input type="text" name="email_id" id="email_id" class="email_id" /></td></tr>
        <tr><td><label>Your Message :</label></td></tr>
        <tr><td><textarea rows="10" cols="50"></textarea></td></tr>
        <tr><td><input type="button" value="Send" /></td></tr>
        </table>
        </form>
        <table class="contact_details">
		<tr><td><p>Address:   306/1, Tarashankar Road, Desh Bandhu Para, Siliguri-734004</p></td></tr>
        <tr><td><p>Phone Number:   +91 8145741345 / +91 843624930</p></td></tr>
        <tr><td><p>Email Id:   sapbis007@gmail.com</p></td></tr>
        </table>
    </div>
</div>
</body>
</html>