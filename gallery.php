<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Gallery</title>
<script>
if(screen.width<1500)
	document.write('<link rel="stylesheet" href="style/style3.css"/>');
else
	document.write('<link rel="stylesheet" href="style/style2.css"/>');
</script>
<style>
.gallery_body
{
	margin-left:15px;
	margin-right:15px;
	margin-top:250px;
	border-top: inset .5px #CCFFFF;
}
.gallery_body h3
{
	color: #0090d5;
    font-family:"Comic Sans MS", cursive;
    letter-spacing: 2px;
    text-align: center;
    text-transform: uppercase;
	font-size:20px;
}
.gallery_body img
{
	float:inherit;
	padding:5px;
	width:32%;
	height:400px;
}
</style>
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
    <div class="gallery_body" align="center">
    	<h3>FEW SNAPS OF OUR WORK</h3>
        	<img src="img/001.jpg"  />
			<img src="img/002.jpg" />
            <img src="img/003.jpg" />
            <img src="img/004.jpg" />
            <img src="img/005.JPG" />
    </div>
</div>
</body>
</html>