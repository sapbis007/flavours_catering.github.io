<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Home</title>
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
     <div class="home_body" align="center">
    	<img src="img/1.jpg" width="90%" style="margin-bottom:15px;" />
    </div>
</div>
</body>
</html>